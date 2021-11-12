@extends('layouts.master')
@section('css')
  @section('title')
  feedbacks
  @stop
@endsection
{{-- start content  --}}
@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0"> {{ __('services page') }}</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
                    <li class="breadcrumb-item"><a href="#" class="default-color">feedbacks</a></li>
                    <li class="breadcrumb-item active">{{ __('table') }}</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- widgets -->
    <div class="row">
        <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
            <a href="{{ route('feedback.create') }}" class="btn btn-primary">Add feedback</a>
        </div>
    </div>
 <!-- row -->
 <div class="row">
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
                <div class="col-xl-12 mb-30">
                    <div class="card card-statistics h-100">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                       data-page-length="50"
                                       style="text-align: center">
                                    <thead>
                                    <tr class="alert-success">
                                        <th>#</th>
                                        <th>Client name</th>
                                        <th>Client feedback</th>
                                        <th>service</th>
                                        <th>action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($feedbacks as $index=>$feedback)
                                        <tr>
                                            <td>{{ $index+1 }}</td>
                                            <td>{{ $feedback->client->name }}</td>
                                            <td>{{ $feedback->feedback }}</td>
                                            <td>{{ $feedback->serv->serve_name}}</td>
                                            <td>
                                                <a href="{{ route('serv.edit',$feedback->id) }}" class="btn btn-info btn-sm" role="button" aria-pressed="true" title="edit">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete_feedback{{ $feedback->id }}" title="delete">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    {{-- @include('admin.services.delete') --}}
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- row closed -->

@endsection

@section('js')

@endsection
