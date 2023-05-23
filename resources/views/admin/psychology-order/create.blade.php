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
                            <div class="col-md-4">
                                <div class="form-group">
                                    <i class="fa fa-calendar"></i>
                                    <label class="form-label">Nama Client</label>
                                    <input class="form-control" type="text" name="client_name" value="" required placeholder="Nama Client"/>
                                    @if($errors->has('client_name'))
                                        <div class="error">{{ $errors->first('client_name') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <i class="fa fa-calendar"></i>
                                    <label class="form-label">No Handphone</label>
                                    <input class="form-control" type="text" name="client_phone" value="" required placeholder="No Handphone Client"/>
                                    @if($errors->has('client_phone'))
                                        <div class="error">{{ $errors->first('client_phone') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <i class="fa fa-calendar"></i>
                                    <label class="form-label">Email</label>
                                    <input class="form-control" type="email" name="client_email" value="" required placeholder="Email Client"/>
                                    @if($errors->has('client_email'))
                                        <div class="error">{{ $errors->first('client_email') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row pb-3">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <i class="fa fa-calendar"></i>
                                    <label class="form-label">Nama Psychology</label>
                                    <select id="psychology" class="form-select" name="psychology_id">
                                        <option value="{{$psychology->id}}">{{$psychology->name}}</option>
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
                            <div class="col-md-4">
                                <div class="form-group">
                                    <i class="fa fa-clock"></i>
                                    <label class="form-label">Jam Mulai</label>
                                    <input class="form-control time-start" type="time" name="time_start" value="" required />
                                    @if($errors->has('time_start'))
                                        <div class="error">{{ $errors->first('time_start') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <i class="fa fa-clock"></i>
                                    <label class="form-label">Jam Selesai</label>
                                    <input class="form-control time-end" type="time" name="time_end" value="" required />
                                    @if($errors->has('time_end'))
                                        <div class="error">{{ $errors->first('time_end') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <i class="fa fa-calendar"></i>
                                    <label class="form-label">Jumlah Sesi Konseling</label>
                                    <input class="form-control number-counseling-session" type="number" value="" readonly />
                                    @if($errors->has('number_counseling_session'))
                                        <div class="error">{{ $errors->first('number_counseling_session') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row pb-3">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <i class="fa fa-calendar"></i>
                                    <label class="form-label">Sumber</label>
                                    <select class="form-select source">
                                        <option selected disabled>Pilih Sumber</option>
                                        <option value="Facebook">Facebook</option>
                                        <option value="Instagram">Instagram</option>
                                        <option value="Tiktok">Tiktok</option>
                                        <option value="Linkedin">Linkedin</option>
                                        <option value="Facebook">Facebook</option>
                                        <option value="GoogleAds">GoogleAds</option>
                                        <option value="other">lainnya...</option>
                                    </select>
                                    <input class="form-control mt-3 source-get" type="hidden" name="source" value="" required placeholder="Sumber"/>
                                    @if($errors->has('source'))
                                        <div class="error">{{ $errors->first('source') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <i class="fa fa-calendar"></i>
                                    <label class="form-label">Medium Konseling</label>
                                    <select class="form-select price-id" name="price_id">
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
                            <div class="col-md-4">
                                <div class="form-group">
                                    <i class="fa fa-calendar"></i>
                                    <label class="form-label">Total Harga</label>
                                    <input class="form-control total-price" type="text" value="" readonly />
                                </div>
                            </div>
                        </div>
                        <div class="row pb-3">
                            <div class="col-md-6">
                                <div class="form-group col-12">
                                    <i class="fa fa-calendar"></i>
                                    <label>Lokasi ( Optional Jika Konseling dilakukan Secara Offline)</label>
                                    <textarea class="form-control" id="location" rows="5" name="location"></textarea>
                                    @if($errors->has('location'))
                                    <div class="error">{{ $errors->first('location') }}</div>
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
                        var id = $('.price-id').val();
                        $.ajax({
                            type: "GET",
                            url: "{{ url('/admin/psychology-order-get-price') . '/' }}" +id+'/' + res,
                            success: function(data) {
                                $('.total-price').val(data)
                            }
                        })
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
                        var id = $('.price-id').val();
                        $.ajax({
                            type: "GET",
                            url: "{{ url('/admin/psychology-order-get-price') . '/' }}" +id+'/' + res,
                            success: function(data) {
                                $('.total-price').val(data)
                            }
                        })
                    }
                });
        })
</script>
<script>
      $('.source').on('change', function(){
        var value = $(this).val();
        if(value == 'other'){
            $('.source-get').val('');
            $('.source-get').attr('type', 'text');
        }else{
            $('.source-get').val(value);
            $('.source-get').attr('type', 'hidden');
        }
        })
</script>
<script>
    $('.price-id').on('change', function(){
        var id = $(this).val();
        var number = $('.number-counseling-session').val();

           $.ajax({
                   type: "GET",
                   url: "{{ url('/admin/psychology-order-get-price') . '/' }}" +id+'/' + number,
                   success: function(res) {
                       $('.total-price').val(res)
                   }
               });
           })
</script>
@stop
