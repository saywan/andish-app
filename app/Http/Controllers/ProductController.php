<?php

namespace App\Http\Controllers;

use App\Helper\Helper;
use App\Models\ProductGroup;
use App\Models\ProductPercent;
use App\Models\Products;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;
use Morilog\Jalali\Jalalian;

class ProductController extends Controller
{
    function __construct()
    {
        /* $this->middleware('permission:Product|CreateProduct|storeProduct|getPriceProduct','ChangeStatusProduct','ShowEditProduct','UpdateProduct','DeleteProduct',['only' => ['index', 'show']]);

         $this->middleware('permission:CreateProduct|storeProduct', ['only' => ['create', 'store']]);
         $this->middleware('permission:UpdateProduct|ShowEditProduct', ['only' => ['edit', 'update']]);
         $this->middleware('permission:DeleteProduct', ['only' => ['destroy']]);*/
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Product = Products::all();
        return view('portal.Product.list', compact('Product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ProdGroup = ProductGroup::orderBy('id', 'DESC')->get();
        $ProdPercent = ProductPercent::orderBy('id', 'DESC')->get();

        return view('portal.Product.create', ['GroupProd' => $ProdGroup, 'ProdPercent' => $ProdPercent]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $validator = Validator::make($request->all(), [
            'groupProductId' => 'required',
            'PercentGroup' => 'required',
            'count' => 'required',
            'unit' => 'required',
            'price' => 'required',
        ], [
            'groupProductId.required' => 'گروه کالای را انتخاب کنید',
            'PercentGroup.required' => ' درصد کالای را انتخاب کنید',
            'count.required' => 'موجودی کالا را وارد کنید',
            'unit.required' => 'واحد کالا را وارد کنید',
            'price.required' => 'قیمت کالا را وارد کنید',
            /* 'weight.required' => 'وزن کالا را وارد کنید',*/
        ]);


      //  dd($request->all());

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        //  $AKC = 'AG-' . time() . date('Ymd');


        $getinfoProductGroup = ProductGroup::find($request->groupProductId);
        if ($getinfoProductGroup == null) {
            return response()->json(['status' => 419, 'message' => 'گروه کالا یافت نشد']);
        }

        $user = new Products();
        $user->userId = \Auth::user()->id;
        //  $user->AKC = $AKC;
        $user->title = $getinfoProductGroup->title;
        $user->groupId = $request->groupProductId;
        $user->percentId = $request->PercentGroup;
        $user->slug = Helper::url_slug($getinfoProductGroup->title);
        $user->price = $request->price;
        $user->description = $request->desc;

        $user->count = $request->count;
        $user->unit = $request->unit;
        /*  $user->weight = $request->weight;*/
        $user->view = 0;
        $user->is_running_out = 0;
        $user->status = is_null($request->statusProduct) ? 'inactive' : $request->statusProduct;
        $user->datereg = Jalalian::fromCarbon(Carbon::now())->format(' %A  %d %B %Y | H:i:s ');


        if ($user->save()) {

            $product = Products::where('id', $user->id)->first();
            if ($product) {
                //(hexdec(substr(uniqid(), 6, 3)))
                $AKC = 'AGC-' . $product->id . '-' . date('Ymd');
                $product->update([
                    'AKC' => $AKC,
                    'url' => 'Product' . '/' . $user->title . '/' . $user->id,
                ]);
            }

            if ($request->get('file')) {


                $foldername = $AKC;
                $directory = public_path('Upload/Product/') . $foldername;
                if (!file_exists($directory)) {
                    mkdir(public_path('Upload/Product/') . $foldername);
                    //  mkdir(public_path("Upload/Product/$foldername/medium"));
                    //  mkdir(public_path("Upload/Product/$foldername/small"));
                }

                $image = $request->get('file');
                $name = time() . '.' . explode('/', explode(':', substr($image, 0, strpos($image, ';')))[1])[1];
                //  \Image::make($request->get('file'))->save(public_path('Upload/Product/' . $foldername . '/') . $name);
                $img = Image::make($request->get('file'));

                /* $img->insert(public_path('image/bclogo.png'), 'top-left ', 10, 10);*/
                //   $img->insert(public_path('image/bck.png'), 'top-left ', -5, -2);
                $img->save(public_path('Upload/Product/' . $foldername . '/') . $name);


                $product_update_image = Products::where('id', $user->id)->first();
                $product_update_image->update([
                    'image' => 'Upload/Product/' . $foldername . '/' . $name,
                    'nameimage' => $name,
                    'namefolder' => $foldername,
                ]);


                if ($user) {

                    $message = [
                        'status' => 200,
                    ];
                    return response()->json($message);

                } else {
                    $message = [
                        'status' => 500,
                    ];
                    return response()->json($message);
                }

            } else {

                $message = [
                    'status' => 200,
                ];
                return response()->json($message);
            }


        } else {
            return response()->json(['status' => 100]);
        }
    }


    public function getPriceProduct(Request $request)
    {
        if ($request->action == 'getPriceProduct') {

            $validator = Validator::make($request->all(), [
                'ProductId' => 'required',
                'PercentGroupId' => 'required',
            ], [
                'ProductId.required' => 'عنوان کالا الزامسیت',
                'PercentGroupId.required' => ' گروه کالای الزامسیت',
            ]);


            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }

            $productGroupId = $request->ProductId;
            $PercentGroupId = $request->PercentGroupId;
            $getProductGroup = ProductGroup::where('id', $productGroupId)->first()->toArray();
            $getPercentProduct = ProductPercent::where('id', $PercentGroupId)->first()->toArray();

            $unit = $getProductGroup['unit_producte'];
            if ($unit == 'meter') {
                $unit = 'متر';
            } elseif ($unit == 'numerical') {
                $unit = 'عدد';
            } elseif ($unit == 'kilogarm') {
                $unit = 'کیلوگرم';
            } elseif ($unit == 'roll') {
                $unit = 'رول';
            }

            if ($getProductGroup['unit_producte'] == 'meter') {


                $calc = (float)$getProductGroup['weight'] * $getPercentProduct['total'];
                return response()->json(['status' => 200, 'result' => $calc, 'unit' => $unit]);
            }
            if ($getProductGroup['unit_producte'] == 'numerical') {

                $calc = (float)$getProductGroup['price'] * ($getPercentProduct['total'] / 100) + (float)$getProductGroup['price'];
                return response()->json(['status' => 200, 'result' => $calc, 'unit' => $unit]);
            }


        }

    }


    public function chooseTypePercent(Request $request)
    {
        if ($request->action == 'chooseTypePercent') {


            $validator = Validator::make($request->all(), [
                'groupId' => 'required',

            ], [
                'groupId.required' => 'عنوان گروه کالای را انتخاب کنید ',
            ]);


            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }


            // dd($request->all());

            $groupId = $request->groupId;
            $getInfoGroup = ProductGroup::where('id', $groupId)->first();
            if ($getInfoGroup) {
                // get info percent by percent id
                $getPercentInfo = ProductPercent::find($getInfoGroup->percent_id);

                $unit = $getInfoGroup['unit_producte'];
                if ($unit == 'meter') {
                    $unit = 'متر';
                } elseif ($unit == 'numerical') {
                    $unit = 'عدد';
                } elseif ($unit == 'kilogarm') {
                    $unit = 'کیلوگرم';
                } elseif ($unit == 'roll') {
                    $unit = 'رول';
                }

                if ($getInfoGroup['unit_producte'] == 'meter') {


                    $calc = (float)$getInfoGroup['weight'] * $getPercentInfo['total'];
                    //  return response()->json(['status' => 200, 'result' => $calc, 'unit' => $unit]);
                }
                if ($getInfoGroup['unit_producte'] == 'numerical') {

                    $calc = (float)$getInfoGroup['price'] * ($getPercentInfo['total'] / 100) + (float)$getInfoGroup['price'];
                    //  return response()->json(['status' => 200, 'result' => $calc, 'unit' => $unit]);
                }


                $option = '<option value="' . $getPercentInfo->id . '">' . $getPercentInfo->title . '</option>';
                return response()->json(['status' => 200, 'option' => $option, 'unit' => $unit, 'price' => $calc]);

            } else {
                return response()->json(['status' => 422, 'message' => 'شناسه یافت نشد']);
            }


        }

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $infoGroupProduct = Products::find($id);
        if ($infoGroupProduct) {
            $GroupProd = ProductGroup::all();
            return view('portal.Product.edit', ['edit' => $infoGroupProduct, 'GroupProd' => $GroupProd]);
        } else {
            return redirect('Product');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $article = Products::findOrFail($request->id);

        $article->update([
            'title' => $request->title,
            'groupId' => $request->GroupProd,
            'count' => $request->count,
            'price' => $request->price,
            'unit' => $request->unit,
            'weight' => $request->weight,
        ]);

        return response()->json(['status' => 200]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $GProduct = Products::where('id', $request->Id)->first();
        if ($GProduct) {

            $GProduct->delete();
            return response()->json(['status' => 200]);

        }
    }
}
