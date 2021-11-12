<?php

namespace App\Http\Controllers\Admin;
use App\Models\tracking_step;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrackingstepsController extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $tracking_steps = tracking_step::all();
        return view('admin.tracking_steps.index', compact('tracking_steps'));
    }

   
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
       //
    }


 
    public function show(tracking_steps $tracking_steps )
    {
        //
    }


  
    public function edit( tracking_steps $tracking_steps)
    {
        //
    }

    
    public function update(Request $request)
    {
      
    //
    }


 
    public function destroy(Request $request)
    {
       //
}

}
