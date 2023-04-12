@extends('admin.layout.app')
@section('styles')

@stop
@section('content')
<div class="page-title-box">
    <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Pyschology Order</h6>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{url('admin')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Pyschology Order</li>
                </ol>
            </div>
            <div class="col-md-4">
                <div class="float-end d-none d-md-block">
                    <div class="dropdown">
                        <a class="btn btn-primary" href="{{route('admin.psychology-order.choose')}}">
                            <i class="fas fa-plus"></i> Add Pyschology Order</i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Data Pyschology Order</h4>
                <div class="table-responsive pt-3">
                    <table class="table table-bordered ">
                        <thead style="background-color: #20BBC7;" class="text-center">
                        <tr class="text-white">
                            <th>No</th>
                            <th>Session ID</th>
                            <th>Nama Client</th>
                            <th>Nomor Handphone Client</th>
                            <th>Nama Pyschology</th>
                            <th>Tanggal</th>
                            <th>Jam Mulai</th>
                            <th>Jam Selesai</th>
                            <th>Sumber</th>
                            <th>Jumlah Sesi Konseling</th>
                            <th>Medium Konseling</th>
                            <th>Reschedule</th>
                            <th>Extends</th>
                            <th>Extends Minute</th>
                            <th>Harga</th>
                            <th>Status</th>
                            <th>Action</th>

                        </tr>
                        </thead>
                        <tbody class="text-center">
                        @foreach ($orders as $order)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$order->session_id}}</td>
                            <td>{{$order->client_name}}</td>
                            <td>{{$order->client_phone}}</td>
                            <td>{{$order->psychology->name}}</td>
                            <td>{{$order->date}}</td>
                            <td>{{$order->time_start}}</td>
                            <td>{{$order->time_end}}</td>
                            <td>{{$order->source}}</td>
                            <td>{{$order->number_counseling_session}}</td>
                            <td>{{$order->price->title}} - {{$order->price->type}} - {{$order->price->price}}</td>
                            <td>{{($order->reschedule == false ) ? 'False' :'True'}}</td>
                            <td>{{($order->extended == false ) ? 'False' :'True'}}</td>
                            <td>{{$order->extended_counseling_minute}}</td>
                            <td>Rp .{{number_format($order->total_price)}}</td>
                            <td>{{$order->status}}</td>
                            <td>
                                <a class="btn btn-sm btn-success text-white" href="{{route('admin.psychology-order.reschedule',['session'=>$order->session_id])}}">Reschedule</a>

                                <a class="btn btn-sm btn-warning text-white" href="{{route('admin.psychology-order.extended',['session'=>$order->session_id])}}">Extend</a>

                                <a class="btn btn-sm btn-primary text-white" href="{{route('admin.psychology-order.edit',['session'=>$order->session_id])}}">Edit</a>

                                <form action="{{route('admin.psychology-order.delete',['session'=>$order->session_id])}}" class="d-inline" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-sm btn-danger text-white" >Delete</button>
                                </form>

                                <form action="{{route('admin.psychology-order.finish',['session'=>$order->session_id])}}" class="d-inline" method="POST">
                                    @csrf
                                    @method('patch')
                                    <button type="submit" class="btn btn-sm btn-info text-white" >Finish</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                       
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

@stop
@section('scripts')
@stop
