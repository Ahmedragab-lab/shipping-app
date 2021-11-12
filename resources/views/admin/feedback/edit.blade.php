@extends('layouts.master')
@section('css')
  @section('title')
  feedback
  @stop
@endsection
{{-- start content  --}}
@section('content')
@include('partial.error')
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0"> {{ __('Edit services page') }}</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('serv.index') }}" class="default-color">Edit feedback</a></li>
                    <li class="breadcrumb-item active">{{ __('table') }}</li>
                </ol>
            </div>
        </div>
    </div>
   <div class="card">
       {{-- <div class="card-header">
         <h4>Add Categorie</h4>
       </div> --}}
       <div class="card-body">
         <form action="{{ route('feedback.update',$feedback->id) }}" method="post" autocomplete="off" >
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="">Client name</label>
                    <select name="client_id" id="" class="form-control" style="padding:10px;">
                        <option value="{{ $feedback->client->id }}" readonly>{{ $feedback->client->name }}</option>
                        @foreach ($clients as $client)
                          <option value="{{ $client->id }}">{{ $client->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">service name</label>
                    <select name="serv_id" id="" class="form-control" style="padding:10px;">
                        <option value="{{ $feedback->serv->id}}" readonly>{{ $feedback->serv->serve_name}}</option>
                        @foreach ($servs as $serv)
                          <option value="{{ $serv->id }}">{{ $serv->serve_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-12 mb-3">
                   <label for="desc">Your Feedback</label>
                    <textarea name="feedback" id=""  rows="3" class="form-control">{{ $feedback->feedback}}</textarea>
                </div>

                <div class="col-md-12 mb-3">
                   <button type="submit" class="btn btn-primary">Save</button>
                </div>
             </div>
         </form>
       </div>
   </div>


@endsection

@section('js')

@endsection
