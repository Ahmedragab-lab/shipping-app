<?php

namespace App\Http\Controllers\Admin;

use App\Models\ClientFeedback;
use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;


class ClientFeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feedbacks = ClientFeedback::all();
        return view('admin.feedback.index',compact('feedbacks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $servs=Service::all();
        $clients = User::where('roles_name','["client"]')->get();
        return view('admin.feedback.create',compact('servs','clients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $feedback = new ClientFeedback();
            $feedback->user_id = $request->client_id;
            $feedback->serv_id = $request->serv_id;
            $feedback->feedback = $request->feedback;
            $feedback->save();
            toastr()->success(__('feedback create successfully'));
            return redirect()->route('feedback.index');
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ClientFeedback  $clientFeedback
     * @return \Illuminate\Http\Response
     */
    public function show(ClientFeedback $clientFeedback)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ClientFeedback  $clientFeedback
     * @return \Illuminate\Http\Response
     */
    public function edit(ClientFeedback $clientFeedback)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ClientFeedback  $clientFeedback
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClientFeedback $clientFeedback)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ClientFeedback  $clientFeedback
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClientFeedback $clientFeedback)
    {
        //
    }
}
