<?php

namespace App\Http\Controllers;

use App\Helper\Helper;
use App\Models\ProductGroup;
use App\Models\Products;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;
use Morilog\Jalali\Jalalian;

class ProductController extends Controller
{
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
        $ProdGroup = ProductGroup::all();
        return view('portal.Product.create', ['GroupProd' => $ProdGroup]);
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
            'title' => 'required',
            'GroupProd' => 'required',
            'count' => 'required',
            'unit' => 'required',
            'price' => 'required',
            'weight' => 'required',

        ], [
            'title.required' => 'عنوان  کالای را وارد کنید',
            'GroupProd.required' => ' گروه کالای را وارد کنید',
            'count.required' => 'موجودی کالا را وارد کنید',
            'unit.required' => 'واحد کالا را وارد کنید',
            'price.required' => 'قیمت کالا را وارد کنید',
            'weight.required' => 'وزن کالا را وارد کنید',

        ]);


        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        //  $AKC = 'AG-' . time() . date('Ymd');


        $user = new Products();
        $user->userId = \Auth::user()->id;
        //  $user->AKC = $AKC;
        $user->title = $request->title;
        $user->slug = Helper::url_slug($request->title);
        $user->price = $request->price;
        $user->description = $request->desc;
        $user->groupId = $request->GroupProd;
        $user->count = $request->count;
        $user->unit = $request->unit;
        $user->weight = $request->weight;
        $user->view = 0;
        $user->is_running_out = 0;
        $user->status = is_null($request->statusProduct) ? 'inactive' : $request->statusProduct;
        $user->datereg = Jalalian::fromCarbon(Carbon::now())->format(' %A  %d %B %Y | H:i:s ');


        if ($user->save()) {

            $product = Products::where('id', $user->id)->first();
            if ($product) {
                //(hexdec(substr(uniqid(), 6, 3)))
                $AKC = 'AGC-' . $product->id . '-' .  date('Ymd');
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
