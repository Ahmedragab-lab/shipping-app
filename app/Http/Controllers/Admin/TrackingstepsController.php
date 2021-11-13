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
        return view('admin.tracking_steps.create');
    }

   
    public function store(Request $request)
    {
        tracking_step::create([
            'id' => $request->id,
            'order_no' => $request->order_no,
            'step1' => $request->step1,
            'step2' => $request->step2,
            'step3' => $request->step3,
            'step4' => $request->step4,
            'date' => $request->date,
        ]);
        session()->flash('Add', ' tracking_step create successfully');
        return redirect('/tracking_steps');
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
      
        $tracking_stepس = tracking_step::findOrFail($request->id);
 
        $tracking_step->update([
            'id' => $request->id,
            'order_no' => $request->order_no,
            'step1' => $request->step1,
            'step2' => $request->step2,
            'step3' => $request->step3,
            'step4' => $request->step4,
            'date' => $request->date,
     
        ]);
 
        session()->flash('Edit', ' tracking_step update successfully  ');
        return back();
    }


 
    public function destroy(Request $request)
    {
        $id = $request->id;
        tracking_step::find($id)->delete();
        session()->flash('delete',' tracking_step delete successfully ');
        return redirect('/tracking_steps');
    }
}


