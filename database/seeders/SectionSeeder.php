<?php

namespace Database\Seeders;

use App\Models\Cat;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cats')->delete();
        $cat = new Cat();
        $cat->cat_name = 'elctronics';
        $cat->slug = 'elctronics';
        $cat->desc = 'elctronics section is most popular ';
        $cat->status = 1;
        $cat->popular = 1;
        $cat->image = 'default.jpg';
        $cat->meta_title = 'elctronics';
        $cat->meta_disc = 'elctronics';
        $cat->meta_keywords = 'elctronics';
        $cat->save();
    }
}
