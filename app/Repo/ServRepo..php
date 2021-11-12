<?php
namespace App\Repo;

use App\Models\Service;

class ServRepo implements ServInterface{


    public function index()
    {
        $services = Service::all();
        return view('admin.services.index',compact('services'));
    }
}
