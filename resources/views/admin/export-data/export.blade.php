@extends('admin.layout.app')
@section('styles')
<script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
@stop
@section('content')
<div class="page-title-box">
    <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Export Data</h6>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{url('admin')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('admin.export-data.index')}}">Export Data</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Export</li>
                </ol>
            </div>
            <div class="col-md-4">
                <div class="float-end d-none d-md-block">
                    <div class="dropdown">
                        <a href="#" class="btn btn-primary"  onclick="ExportToExcel('xlsx')">
                            Export Data</i>
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
                <h4 class="card-title">Data {{$psychology}}</h4>
                <div class="table-responsive pt-3">
                    <table class="table table-bordered" id="table">
                        <thead style="background-color: #20BBC7;" class="text-center">
                        <tr class="text-white">
                            <th>No</th>
                            <th>Session ID</th>
                            <th>Nama Client</th>
                            <th>Nomor Handphone Client</th>
                            <th>Email</th>
                            <th>Tanggal</th>
                            <th>Jam Mulai</th>
                            <th>Jam Selesai</th>
                            <th>Sumber</th>
                            <th>Jumlah Sesi Konseling</th>
                            <th>Tipe Konseling</th>
                            <th>Medium Konseling</th>
                            <th>Reschedule</th>
                            <th>Extends</th>
                            <th>Extends Minute</th>
                            <th>Harga</th>
                            <th>Lokasi</th>
                            <th>Reschedule Rev</th>
                            <th>Extend Rev</th>
                            <th>Total Rev</th>
                            <th>Commision</th>
                            <th>Psychology Gross Take</th>

                        </tr>
                        </thead>
                        <tbody class="text-center">
                        @foreach ($orders as $order)
                        @php
                         if ($order->reschedule == true) {
                            if ($order->price->title == 'Online') {
                                $rescheduleFee = 75000;
                            } else {
                               $rescheduleFee = 150000;
                            }
                         } else {
                           $rescheduleFee = 0;
                         }     
                         if ($order->extended == true) {
                            $number_counseling_session = number_format(($order->extended_counseling_minute * 1 / 60),1);
                            $extendFee = $order->price->price * $number_counseling_session;
                         } else {
                            $extendFee = 0;
                         }
                          
                         $totalFee = $order->total_price + $rescheduleFee + $extendFee;
                         $psychologyFee = $totalFee * (65/100);
                        @endphp
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$order->session_id}}</td>
                            <td>{{$order->client_name}}</td>
                            <td>{{$order->client_phone}}</td>
                            <td>{{$order->client_email}}</td>
                            <td>{{$order->date}}</td>
                            <td>{{$order->time_start}}</td>
                            <td>{{$order->time_end}}</td>
                            <td>{{$order->source}}</td>
                            <td>{{$order->number_counseling_session}}</td>
                            <td>{{$order->price->type}}</td>
                            <td>{{$order->price->title}}</td>
                            <td>{{($order->reschedule == false ) ? 'No' :'Yes'}}</td>
                            <td>{{($order->extended == false ) ? 'No' :'Yes'}}</td>
                            <td>{{$order->extended_counseling_minute}}</td>
                            <td>Rp .{{number_format($order->total_price)}}</td>
                            <td>{{$order->location}}</td>
                            <td>Rp {{number_format($rescheduleFee)}}</td>
                            <td>Rp {{number_format($extendFee)}}</td>
                            <td>Rp {{number_format($totalFee)}}</td>
                            <td>{{'65%'}}</td>
                            <td>Rp {{number_format($psychologyFee)}}</td>
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
<script>

    function ExportToExcel(type, fn, dl) {
        var elt = document.getElementById('table');
        var wb = XLSX.utils.table_to_book(elt, { sheet: "sheet1" });
        return dl ?
            XLSX.write(wb, { bookType: type, bookSST: true, type: 'base64' }) :
            XLSX.writeFile(wb, fn || ('Export Data - {{$psychology}}.' + (type || 'xlsx')));
    }

</script>
@stop
