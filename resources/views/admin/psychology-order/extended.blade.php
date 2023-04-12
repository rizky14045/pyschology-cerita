@extends('admin.layout.app')
@section('styles')

@stop
@section('content')
<div class="page-title-box">
    <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Psychology Order</h6>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{url('admin')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('admin.psychology-order.index')}}">Psychology Order</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Extend</li>
                </ol>
            </div>
        </div>
        
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form class="" action="{{route('admin.psychology-order.extended-save',['session'=>$order->session_id])}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="row pb-3">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <i class="fa fa-calendar"></i>
                                    <label class="form-label">Session Id</label>
                                    <input class="form-control" type="text" name="client_name" value="{{$order->session_id}}" disabled/>
                                </div>
                            </div>
                        </div>
                        <div class="row pb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <i class="fa fa-calendar"></i>
                                    <label class="form-label">Nama Client</label>
                                    <input class="form-control" type="text" name="client_name" value="{{$order->client_name}}" disabled/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <i class="fa fa-calendar"></i>
                                    <label class="form-label">No Handphone</label>
                                    <input class="form-control" type="text" name="client_phone" value="{{$order->client_phone}}" disabled/>
                                </div>
                            </div>
                        </div>
                        <div class="row pb-3">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <i class="fa fa-calendar"></i>
                                    <label class="form-label">Nama Psychology</label>
                                    <input class="form-control" type="text" name="psychology_id" value="{{$order->psychology->name}}" disabled/>
                                </div>
                            </div>
                        </div>
                        <div class="row pb-3">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <i class="fa fa-calendar"></i>
                                    <label class="form-label">Extend Minute</label>
                                    <input class="form-control" type="number"name="extended_counseling_minute" required />
                                    @if($errors->has('extended_counseling_minute'))
                                        <div class="error">{{ $errors->first('extended_counseling_minute') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-group" align="right">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-success">Reset</button>
                            <a href="javascript:history.go(-1)" class="btn btn-danger">Back</a>
                        </div>
                    </div>
                </form>
             </div>
        </div>
    </div>
 </div>


@stop
@section('scripts')

@stop
