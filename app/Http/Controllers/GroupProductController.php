<?php

namespace App\Http\Controllers;

use App\Models\ProductGroup;
use App\Models\ProductPercent;
use App\Models\Products;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Morilog\Jalali\Jalalian;

class GroupProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $GProuct = ProductGroup::all();
        return view('portal.Group.list', ['GProuct' => $GProuct]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $percent = ProductPercent::all();
        return view('portal.Group.create', ['percent' => $percent]);
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
            'titleGroup' => 'required',
            'unitPercent' => 'required',
            'percentgroupId' => 'required',
        ], [
            'titleGroup.required' => 'عنوان گروه کالای را وارد کنید',
            'unitPercent.required' => 'واحد کالا را وارد کنید',
            'percentgroupId.required' => 'دسته درصد کالای را انتخاب کنید',

        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        $priceproduct = str_replace(",", "", $request->priceproduct);

        if ($request->unitPercent == 'meter') {

            $unitPercent = 'meter';
            $weight = $request->weightProduct;
            $price = 0;

        } else if ($request->unitPercent == 'numerical') {
            $weight = 0;
            $price = $priceproduct;
            $unitPercent = 'numerical';

        }
        $user = new ProductGroup();
        $user->userId = \Auth::user()->id;
        $user->percent_id = $request->percentgroupId;
        $user->title = $request->titleGroup;
        $user->unit_producte = $unitPercent;
        $user->status = $request->statusProduct;
        $user->weight = $weight;
        $user->price = $price;
        $user->datereg = Jalalian::fromCarbon(Carbon::now())->format(' %A  %d %B %Y | H:i:s ');

        if ($user->save()) {
            return response()->json(['status' => 200]);
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

        $infoGroupProduct = ProductGroup::find($id);
        if ($infoGroupProduct) {
            $percent = ProductPercent::all();
            return view('portal.Group.edit', ['edit' => $infoGroupProduct, 'percent' => $percent]);
        } else {
            return redirect('GroupProduct');
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

        $article = ProductGroup::findOrFail($request->id);
        // dd($request->all());

        $article->update([
            'title' => $request->titleGroup,
            'percent_id' => $request->percentgroupId,
            'unit_producte' => $request->unitPercent,
            'price' => str_replace(',', '', $request->priceproduct),
            'weight' => $request->weightProduct,
            'status' => 'active',
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
        // $GProduct = ProductGroup::find($id);
        //dd($request->id)
        $GProduct = ProductGroup::where('id', $request->Id)->first();
        if ($GProduct) {

            $Product = Products::where('groupId', $request->Id)->get();
            if (count($Product) > 0) {
                return response()->json(['status' => 401]);
            } else {
                $GProduct->delete();
                return response()->json(['status' => 200]);
            }


        }

    }
}
