<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->delete();
        $prod = new Product();
        $prod->cat_id = 1;
        $prod->product_name = 'Oppo Reno';
        $prod->slug = 'mobile';
        $prod->small_desc = 'this is famous product around world  ';
        $prod->desc = 'this is famous product around world $ most trending ';
        $prod->original_price = 5000;
        $prod->selling_price = 4500;
        $prod->qty = 500;
        $prod->tax = 50;
        $prod->status = 1;
        $prod->trending = 1;
        $prod->image = 'default.jpg';
        $prod->meta_title = 'mobile';
        $prod->meta_desc = 'mobile';
        $prod->meta_keywords = 'mobile';
        $prod->save();
    }
}
