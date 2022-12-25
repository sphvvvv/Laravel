<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // テーブルのクリア
        DB::table('product')->truncate();

        // 初期データ用意（列名をキーとする連想配列）
        $aryProduct = [
                  ['product_name' => 'PHP Book',
                   'price' => 2000,
                   'brand_id' => 1],
                  ['product_name' => 'Laravel Book',
                   'price' => 3000,
                   'brand_id' => null],
                  ['product_name' => 'Ruby Book',
                   'price' => 2500,
                   'brand_id' => 3]
                 ];

        // 登録
        foreach($aryProduct as $item) {
            \App\Product::create($item);
        }
    }
}
