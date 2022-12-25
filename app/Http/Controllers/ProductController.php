<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
  public function index()
  {
      // DBよりProductテーブルの値を全て取得
      $product = Product::all();

      // 取得した値をビュー「Product/index」に渡す
      return view('product/index', compact('product'));
  }

  public function edit($id)
  {
      // DBよりURIパラメータと同じIDを持つProductの情報を取得
      $product = Product::findOrFail($id);

      // 取得した値をビュー「product/edit」に渡す
      return view('product/edit', compact('product'));
  }
}
