@extends('layouts.master')
@section('css')
  @section('title')
  services
  @stop
@endsection
{{-- start content  --}}
@section('content')
@include('partial.error')
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0"> {{ __('Add services page') }}</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('serv.index') }}" class="default-color">Add services</a></li>
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
         <form action="{{ route('serv.store') }}" method="post" autocomplete="off" enctype="multipart/form-data">
            @csrf
             <div class="row">
                 <div class="col-md-6 mb-3">
                     <label for="">service name</label>
                     <input type="text" placeholder="Enter service name" name="serve_name" class="form-control">
                 </div>
                 <div class="col-md-6 mb-3">
                    <label for="status">status</label>
                    <input type="checkbox"  name="status" >
                 </div>
                 <div class="col-md-12 mb-3">
                    <label for="desc">Description</label>
                     <textarea name="desc" id=""  rows="3" class="form-control"></textarea>
                 </div>
                <div class="col-lg-6">
                    <label>Add image :  <span style="color:rgb(199, 8, 8)">*</span></label>
                    <input class="form-control img" name="image"  type="file">
                </div>
                <div class="col-lg-6 mb-3">
                    <img src="{{ asset('uploads/serv/default.jpg') }}" class="img-thumbnail img-preview" width="100" alt="no photo">
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
