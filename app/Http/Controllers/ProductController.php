<?php

namespace App\Http\Controllers;

use App\Models\ProductGroup;
use App\Models\Products;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
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

        // dd($request->all());

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
        $user = new Products();
        $user->userId = \Auth::user()->id;
        $user->title = $request->title;
        $user->price = $request->price;
        $user->groupId = $request->GroupProd;
        $user->count = $request->count;
        $user->unit = $request->unit;
        $user->weight = $request->weight;
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
