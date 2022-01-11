<?php

namespace Modules\Shop\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Shop\Entities\Product;
use Modules\Shop\Http\Requests\productRequest;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $product = Product::all();
        return response()->json([$product, JSON_PRETTY_PRINT]);
        //return view('shop::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('shop::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(productRequest $request)
    {

        $cridentials = [
            'name'          => $request->name,
            'description'   => $request->description,
            'image'         => $request->image ? $request->image : 'none',
            'categories'    => $request->categories,
            'amount'        => $request->amount,
            'price'         => $request->price,
            'product_owner' => 'test_user',
            'additional_info'=>$request->additional_info
        ];

        Product::create($cridentials);
        return("Post utworzono");
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('shop::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('shop::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
