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
                    <li class="breadcrumb-item active" aria-current="page">Reschedule</li>
                </ol>
            </div>
        </div>
        
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form class="" action="{{route('admin.psychology-order.reschedule-save',['session'=>$order->session_id])}}" method="POST">
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
                                    <label class="form-label">Tanggal</label>
                                    <input class="form-control" type="date"name="date" value="{{$order->date}}" required />
                                    @if($errors->has('date'))
                                        <div class="error">{{ $errors->first('date') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row pb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <i class="fa fa-clock"></i>
                                    <label class="form-label">Jam Mulai</label>
                                    <input class="form-control" type="time" name="time_start" value="{{$order->time_start}}" required />
                                    @if($errors->has('time_start'))
                                        <div class="error">{{ $errors->first('time_start') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <i class="fa fa-clock"></i>
                                    <label class="form-label">Jam Selesai</label>
                                    <input class="form-control" type="time" name="time_end" value="{{$order->time_end}}" required />
                                    @if($errors->has('time_end'))
                                        <div class="error">{{ $errors->first('time_end') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row pb-3">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <i class="fa fa-calendar"></i>
                                    <label class="form-label">Sumber</label>
                                    <input class="form-control" type="text" name="source" value="{{$order->source}}" disabled/>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <i class="fa fa-calendar"></i>
                                    <label class="form-label">Jumlah Sesi Konseling</label>
                                    <input class="form-control" type="number" name="number_counseling_session" value="{{$order->number_counseling_session}}" required />
                                    @if($errors->has('number_counseling_session'))
                                        <div class="error">{{ $errors->first('number_counseling_session') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <i class="fa fa-calendar"></i>
                                    <label class="form-label">Medium Konseling</label>
                                    <input class="form-control" type="text" name="price_id" value="{{$order->price->title}} - {{$order->price->type}} - {{$order->price->price}}" disabled />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <button class="btn btn-primary btn-sm" type="submit">
                                Submit
                            </button>
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
