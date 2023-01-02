<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Http\Requests\ProductRequest;
use App\Product;


class ProductController extends Controller
{
    public function index()
    {
        // DBよりProductテーブルの値を全て取得
        $product = Product::all();
//return $product->toArray();  Jsonで返す

        // 取得した値をビュー「Product/index」に渡す
        return view('product.index', compact('product'));
    }


    public function edit($product_id)
    {

        // DBよりURIパラメータと同じIDを持つProductの情報を取得
        $product = Product::findOrFail($product_id);

        // tinkerによるデバッグ
//        eval(\Psy\sh());

        // 取得した値をビュー「product/edit」に渡す
        return view('product/edit', compact('product'));
    }


    public function show($id)
    {
        return view('product', ['product' => Product::findOrFail($id)]);
    }


    public function update(ProductRequest $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->product_name = $request->product_name;
        $product->price = $request->price;
//        $product->brand_id = $request->brand_id;
        $product->save();

        return redirect("/product");
    }


    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect("/product");
    }


    public function create()
    {
        // 空の$bookを渡す
        $product = new Product();
        return view('product/create', compact('product'));
    }

    public function store(ProductRequest $request)
    {
        $product = new Product();
        $product->product_name = $request->product_name;
        $product->price = $request->price;
        $product->brand_id = $request->brand_id;
        $product->save();

        return redirect("/product");
    }
}
