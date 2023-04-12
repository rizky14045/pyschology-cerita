@extends('admin.layout.app')
@section('styles')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link href="/select2-bootstrap-theme/select2-bootstrap.min.css" type="text/css" rel="stylesheet" />
<style>
    .card {
      margin-bottom: 20px;
      border-radius: 5px;
      box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
    }
  
    .card-img {
      border-top-left-radius: 5px;
      border-bottom-left-radius: 5px;
      height: 100%;
    }
  
    .card-body {
      padding: 1rem;
    }
  
    .card-title {
      font-size: 1.25rem;
      margin-bottom: 0.5rem;
    }
  
    .card-text {
      font-size: 1rem;
      margin-bottom: 1rem;
    }
  
    .text-muted {
      font-size: 0.875rem;
    }
  </style>
@stop
@section('content')
<div class="page-title-box">
    <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Psychology Order</h6>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{url('admin')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('admin.psychology-order.index')}}">Psychology Order</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Choose</li>
                </ol>
            </div>
        </div>
        
    </div>
</div>
@foreach ($psychologies as $psychology)
    <div class="row">
        <div class="container">
            <div class="card">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{asset('uploads/psychology_image/'.$psychology->psychology_image)}}" alt="gambar" class="img-fluid card-img w-50">
            </div>
            <div class="col-md-6">
                <div class="card-body">
                    <h5 class="card-title">{{$psychology->name}}</h5>
                    @php
                        $topics = json_decode($psychology->topics);
                    @endphp
                    <p class="card-text">
                            @foreach ($topics as $item)    
                                @if ($item)
                                    <span class="badge bg-secondary">{{$item}}</span>
                                @endif
                            @endforeach
                    </p>
                </div>
            </div>
            <div class="col-md-2" >
                <a href="{{route('admin.psychology-order.create',['id' =>$psychology->id])}}" class="btn btn-primary d-flex align-content-center justify-content-center me-5 my-5">Pilih Psikolog</a>
            </div>
        </div>
    </div>

        @endforeach


@stop
@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
    $('.psychology-select').select2({
        theme: "bootstrap"
    });
});
</script>
<script>
     $('.time-start').on('change', function(){
        var start = $(this).val();
        var end = $('.time-end').val();

            $.ajax({
                    type: "GET",
                    url: "{{ url('/admin/psychology-order-get-minute') . '/' }}" +start+'/' + end,
                    success: function(res) {
                        $('.number-counseling-session').val(res)
                        console.log(res)
                    }
                });
            })
     $('.time-end').on('change', function(){
        var start = $('.time-start').val();
        var end = $(this).val();

            $.ajax({
                    type: "GET",
                    url: "{{ url('/admin/psychology-order-get-minute') . '/' }}" +start+'/' + end,
                    success: function(res) {
                        $('.number-counseling-session').val(res)
                        console.log(res)
                    }
                });
        })
</script>
@stop
