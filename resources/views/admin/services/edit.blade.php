@extends('layouts.master')
@section('css')
  @section('title')
  {{ __('site.services_page') }}
  @stop
@endsection
{{-- start content  --}}
@section('content')
@include('partial.error')
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0"> {{ __('site.Edit_services') }}</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('serv.index') }}" class="default-color">{{ __('site.Edit_services') }}</a></li>
                    <li class="breadcrumb-item active">{{ __('site.page') }}</li>
                </ol>
            </div>
        </div>
    </div>
   <div class="card">
       <div class="card-body">
         <form action="{{ route('serv.update',$serv->id) }}" method="post" autocomplete="off" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="">{{ __('site.service_name_ar') }}</label>
                    <input type="text" placeholder="ادخل اسم الخدمه" name="serve_name" class="form-control" value="{{ $serv->getTranslation('serve_name','ar') }}">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">{{ __('site.service_name_en') }}</label>
                    <input type="text" placeholder="Enter service name " name="serve_name_en" class="form-control" value="{{ $serv->getTranslation('serve_name','en') }}">
                </div>
                <div class="col-md-6 mb-3">
                   <label for="status">{{ __('site.status') }}</label>
                   <input type="checkbox"  name="status" {{ $serv->status == 1?'checked':'' }} >
                </div>
                <div class="col-md-12 mb-3">
                   <label for="desc">{{ __('site.description') }}</label>
                    <textarea name="desc" id=""  rows="3" class="form-control"> {{ $serv->desc }}</textarea>
                </div>
               <div class="col-lg-6">
                   <label>{{ __('site.edit-image') }}  <span style="color:rgb(199, 8, 8)">*</span></label>
                   <input class="form-control img" name="image"  type="file">
               </div>
               <div class="col-lg-6 mb-3">
                   <img src="{{ asset('uploads/serv/'. $serv->image) }}" class="img-thumbnail img-preview" width="100" alt="no photo">
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
