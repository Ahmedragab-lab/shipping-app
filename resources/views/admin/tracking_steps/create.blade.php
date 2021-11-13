@extends('layouts.master')
@section('css')
  @section('title')
  tracking_steps
  @stop
@endsection
{{-- start content  --}}
@section('content')
@include('partial.error')
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0"> {{ __('Add tracking_steps page') }}</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('tracking_steps.index') }}" class="default-color">Add tracking_steps</a></li>
                    <li class="breadcrumb-item active">{{ __('table') }}</li>
                </ol>
            </div>
        </div>
    </div>
   <div class="card">
   <div class="card-body">
         <form action="{{ route('tracking_steps.store') }}" method="post" autocomplete="off" enctype="multipart/form-data">
            @csrf
             <div class="row">
                 <div class="col-md-6 mb-3">
                     <label for=""> id</label>
                     <input type="id"  name="id" class="form-control">
                 </div>
                 <div class="col">
                 <label for="inputName" class="control-label">order_no </label>
                  <input type="text" class="form-control" id="inputName" name="order_no"
                    title="Please enter the order-no " required>
                  </div><br>

                  <div class="col-lg-3">
                        <label class="rdiobox">
                            <input checked name="rdio" type="radio" value="1" id="type_div"> <span>step1
                                </span>
                                <input checked name="rdio" type="radio" value="1" id="type_div"> <span>step2
                                </span>
                                <input checked name="rdio" type="radio" value="1" id="type_div"> <span>step3
                                </span>
                                <input checked name="rdio" type="radio" value="1" id="type_div"> <span>step4
                                </span>
                            </label>
                    </div>
                    <!-- <div class="col-lg-3">
                        <label class="rdiobox">
                            <input checked name="rdio" type="radio" value="1" id="type_div"> <span>step2
                                </span></label>
                    </div>
                    <div class="col-lg-3">
                        <label class="rdiobox">
                            <input checked name="rdio" type="radio" value="1" id="type_div"> <span>step3
                                </span></label>
                    </div>
                    <div class="col-lg-3">
                        <label class="rdiobox">
                            <input checked name="rdio" type="radio" value="1" id="type_div"> <span>step4
                                </span></label>
                    </div> -->
                
                 <div class="col-md-6 mb-3">
                 <div class="form-group">
                 <label>date</label>
                <input class="form-control" type="text"  id="datepicker-action" name="date" data-date-format="yyyy-mm-dd">
                    </div>
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
