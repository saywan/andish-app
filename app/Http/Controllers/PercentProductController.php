<?php

namespace App\Http\Controllers;

use App\Models\ProductGroup;
use App\Models\ProductPercent;
use App\Models\Products;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Morilog\Jalali\Jalalian;

class PercentProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $GProuct = ProductPercent::orderBy('created_at', 'DESC')->get();
        return view('portal.Percent.list', ['GProuct' => $GProuct]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('portal.Percent.create');
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
            'titlePercent' => 'required',
            'percentProduct' => 'required',
            'feeGroup' => 'required',
            'unitPercent' => 'required',


        ], [
            'titlePercent.required' => 'عنوان گروه کالای را وارد کنید',
            'percentProduct.required' => 'درصد گروه کالای را وارد کنید',
            'feeGroup.required' => 'ارزش افزوده گروه کالای را وارد کنید',
            'unitPercent.required' => 'واحد گروه کالای را وارد کنید',

        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $getInfoPercent = ProductPercent::where('title', 'like', '%' . $request->titlePercent . '%')->first();
        if ($getInfoPercent) {
            return response()->json(['status' => 419, 'message' => 'عنوان تخفیف یا درصد تکراری میباشد']);
        }
        // dd($request->all());


        $percent = str_replace(",", "", $request->percentProduct);

        $total = 0;

        if ($request->unitPercent == 'kilo') {

            // $unit='کیلو';
            $total = $percent * ((int)$request->feeGroup / 100) + $percent;

        } else {
            //  $unit='عدد';
            $total = $percent + $request->feeGroup;
        }

        //dd($total);

        $user = new ProductPercent();
        $user->userId = \Auth::user()->id;
        $user->title = $request->titlePercent;
        $user->percent = $percent;
        $user->fee = $request->feeGroup;
        $user->unit = $request->unitPercent;
        $user->total = $total;
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
        //
        $infoGroupProduct = ProductPercent::find($id);
        if ($infoGroupProduct) {
            return view('portal.Percent.edit', ['edit' => $infoGroupProduct]);
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
        //


        $validator = Validator::make($request->all(), [
            'titlePercent' => 'required',
            'percentProduct' => 'required',
            'feeGroup' => 'required',
            'unitPercent' => 'required',
        ], [
            'titleGroup.required' => 'عنوان گروه کالای را وارد کنید',
            'percentProduct.required' => 'درصد گروه کالای را وارد کنید',
            'feeGroup.required' => 'ارزش افزوده گروه کالای را وارد کنید',
            'unitPercent.required' => 'واحد گروه کالای را وارد کنید',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        $percentProduct = ProductPercent::findOrFail($request->id);
        if ($percentProduct) {

            $percent = str_replace(",", "", $request->percentProduct);

            $total = 0;

            // dd($user->unit);

            /* if ($user->unit == 'kilo') {

                 // $unit='کیلو';
                 $total = $percent * ($request->feeGroup / 100) + $percent;
             } else {
                 //  $unit='عدد';
                 $total = $percent + $request->feeGroup;
             }*/


            $getProductGroup = ProductGroup::where('percent_id', $percentProduct->id)->get();


            $getInfoProduct = Products::where('percentId', $request->id)->get();

            if ($percentProduct->unit == 'kilo') {
                $total = $percent * ($request->feeGroup / 100) + $percent;
            } else {
                $total = $percent + $request->feeGroup;
            }

            $percentProduct->update([
                'title' => $request->titlePercent,
                'percent' => $request->percentProduct,
                'fee' => $request->feeGroup,
                /*  'unit' => $request->unitPercent,*/
                'total' => $total,
            ]);

            foreach ($getProductGroup as $itemGroup) {

                if ($itemGroup->unit_producte == 'meter') {

                    $calc = (float)$itemGroup['weight'] * $percentProduct['total'];

                } elseif ($itemGroup->unit_producte == 'numerical') {

                    $calc = (float)$itemGroup['price'] * ($percentProduct['total'] / 100) + (float)$getProductGroup['price'];
                }

                foreach ($getInfoProduct as $itemProduct) {


                    if($itemProduct->groupId==$itemGroup->id)
                    {
                        $itemProduct->update([
                            'price' => $calc
                        ]);
                    }


                }

            }





            return response()->json(['status' => 200]);

        } else {
            return response()->json(['status' => 100]);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $GProduct = ProductPercent::where('id', $request->Id)->first();
        if ($GProduct) {

            $Product = Products::where('percentId', $request->Id)->get();
            if (count($Product) > 0) {
                return response()->json(['status' => 401]);
            } else {
                $GProduct->delete();
                return response()->json(['status' => 200]);
            }


        }
    }
}
