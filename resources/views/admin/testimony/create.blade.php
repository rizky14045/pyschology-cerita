@extends('admin.layout.app')
@section('styles')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@stop
@section('content')
<div class="page-title-box">
    <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Testimony</h6>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{url('admin')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('admin.testimony.index')}}">Testimony</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create</li>
                </ol>
            </div>
        </div> 
    </div>
</div>
<div class="card">
    <div class="card-body">
        <form action="{{route('admin.testimony.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row pb-3">
                <div class="form-group col-12">
                    <label>Client Name</label>
                    <input type="text" class="form-control" name="client_name" required>
                    @if($errors->has('client_name'))
                    <div class="error">{{ $errors->first('client_name') }}</div>
                @endif
                </div>
            </div>
            <div class="row pb-3">
                <div class="form-group col-12">
                    <label>Client Image</label>
                    <input class="form-control" name="client_image" type="file">
                    <small class="text-muted">File berformat Jpg,Jpeg, Png dan maksimal file 4MB</small>
                    @if($errors->has('client_image'))
                        <div class="error">{{ $errors->first('client_image') }}</div>
                    @endif
                </div>
            </div>
            <div class="row pb-3">
                <div class="form-group col-12">
                    <label >Description</label>
                    <textarea class="form-control" rows="5" name="description" placeholder="Description"></textarea>
                    @if($errors->has('description'))
                        <div class="error">{{ $errors->first('description') }}</div>
                    @endif
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
            <div class="form-group" align="right">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-success">Reset</button>
                <a href="{{route('admin.testimony.index')}}" class="btn btn-danger">Back</a>
            </div>
        </form>
    </div>
</div>


@stop
@section('scripts')
<script src="{{asset('vendor/ckeditor')}}/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'body' );
</script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
    $('.psychology-select').select2({
        theme: "bootstrap"
    });
});

</script>
@stop
