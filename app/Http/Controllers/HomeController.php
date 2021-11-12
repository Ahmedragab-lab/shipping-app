<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use App\Models\Product;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $client = User::where('roles_name','["client"]')->count();
        $serv = Service::count();
        $cat = Cat::count();
        $product = Product::count();
        return view('home',compact('serv','cat','product','client'));
    }
}
