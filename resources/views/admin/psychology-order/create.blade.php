@extends('admin.layout.app')
@section('styles')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link href="/select2-bootstrap-theme/select2-bootstrap.min.css" type="text/css" rel="stylesheet" />

@stop
@section('content')
<div class="page-title-box">
    <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Psychology Order</h6>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{url('admin')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('admin.psychology-order.index')}}">Psychology Order</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create</li>
                </ol>
            </div>
        </div>
        
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form class="" action="{{route('admin.psychology-order.store')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="row pb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <i class="fa fa-calendar"></i>
                                    <label class="form-label">Nama Client</label>
                                    <input class="form-control" type="text" name="client_name" value="" required placeholder="Nama Client"/>
                                    @if($errors->has('client_name'))
                                        <div class="error">{{ $errors->first('client_name') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <i class="fa fa-calendar"></i>
                                    <label class="form-label">No Handphone</label>
                                    <input class="form-control" type="text" name="client_phone" value="" required placeholder="No Handphone Client"/>
                                    @if($errors->has('client_phone'))
                                        <div class="error">{{ $errors->first('client_phone') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row pb-3">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <i class="fa fa-calendar"></i>
                                    <label class="form-label">Nama Psychology</label>
                                    <select id="psychology" class="form-select psychology-select" name="psychology_id">
                                        <option selected disabled>Pilih Psychology</option>
                                        @foreach ($psychologies as $psychology)
                                            <option value="{{$psychology->id}}">{{$psychology->name}}</option>
                                        @endforeach
                                    </select>
                                    @if($errors->has('psychology_id'))
                                        <div class="error">{{ $errors->first('psychology_id') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row pb-3">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <i class="fa fa-calendar"></i>
                                    <label class="form-label">Tanggal</label>
                                    <input class="form-control" type="date"name="date" value="" required />
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
                                    <input class="form-control" type="time" name="time_start" value="" required />
                                    @if($errors->has('time_start'))
                                        <div class="error">{{ $errors->first('time_start') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <i class="fa fa-clock"></i>
                                    <label class="form-label">Jam Selesai</label>
                                    <input class="form-control" type="time" name="time_end" value="" required />
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
                                    <input class="form-control" type="text" name="source" value="" required placeholder="Sumber"/>
                                    @if($errors->has('source'))
                                        <div class="error">{{ $errors->first('source') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <i class="fa fa-calendar"></i>
                                    <label class="form-label">Jumlah Sesi Konseling</label>
                                    <input class="form-control" type="number" name="number_counseling_session" value="" required />
                                    @if($errors->has('number_counseling_session'))
                                        <div class="error">{{ $errors->first('number_counseling_session') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <i class="fa fa-calendar"></i>
                                    <label class="form-label">Medium Konseling</label>
                                    <select class="form-select" name="price_id">
                                        <option selected disabled>Pilih Medium Konseling</option>
                                        @foreach ($prices as $price)
                                            <option value="{{$price->id}}">{{$price->title}} - {{$price->type}} - Rp. {{number_format($price->price)}}</option>
                                        @endforeach
                                    </select>
                                    @if($errors->has('price_id'))
                                        <div class="error">{{ $errors->first('price_id') }}</div>
                                    @endif
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
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
    $('.psychology-select').select2({
        theme: "bootstrap"
    });
});

</script>
@stop
