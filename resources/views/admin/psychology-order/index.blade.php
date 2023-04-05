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
                        <a class="btn btn-primary" href="{{route('admin.psychology-order.create')}}">
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
                            <th>Action</th>

                        </tr>
                        </thead>
                        <tbody class="text-center">
                        <tr>
                            <td>1</td>
                            <td>8f5a0268-2bfa-4fdc-b22f-51cd4407b738</td>
                            <td>Adam</td>
                            <td>628788293xxxx</td>
                            <td>Dokter Pyschology</td>
                            <td>23-03-2023</td>
                            <td>10:00</td>
                            <td>12:00</td>
                            <td>Web Admin</td>
                            <td>1</td>
                            <td>Online</td>
                            <td>false</td>
                            <td>false</td>
                            <td>0</td>
                            <td>
                                <a class="btn btn-sm btn-success text-white" href="#">Reschedule</a>
                                <a class="btn btn-sm btn-warning text-white" href="#">Extended</a>
                                <a class="btn btn-sm btn-primary text-white" href="#">Edit</a>
                                <a class="btn btn-sm btn-danger text-white" href="#">Delete</a>
                                <a class="btn btn-sm btn-info text-white" href="#">Finish</a>
                            </td>
                        </tr>
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
