<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->delete();
        $serv = new Service();
        $serv->serve_name = 'نقل برى';
        $serv->image = 'default.jpg';
        $serv->desc = 'يوجد لدينا خدمات متعدده';
        $serv->status = 1;
        $serv->save();
        $serv = new Service();
        $serv->serve_name = 'نقل جوى';
        $serv->image = 'default.jpg';
        $serv->desc = 'يوجد لدينا خدمات متعدده';
        $serv->status = 1;
        $serv->save();
    }
}
