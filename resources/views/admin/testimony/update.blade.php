@extends('admin.layout.app')
@section('styles')
@stop
@section('content')
<div class="page-title-box">
    <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Testimony</h6>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{url('admin')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('admin.testimony.index')}}">Testimony</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Update</li>
                </ol>
            </div>
        </div> 
    </div>
</div>
<div class="card">
    <div class="card-body">
        <form action="{{route('admin.testimony.update',['id'=>$testimony->id])}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="row pb-3">
                <div class="form-group col-12">
                    <label>Client Name</label>
                    <input type="text" class="form-control" name="client_name" required value="{{$testimony->client_name}}">
                    @if($errors->has('client_name'))
                        <div class="error">{{ $errors->first('client_name') }}</div>
                    @endif
                </div>
            </div>
            <div class="row pb-3">
                <div class="form-group col-12">
                    <label>Client Image</label>
                    <br>
                    <img src="{{asset('uploads/testimony_image/'.$testimony->client_image)}}" alt="" class="img-fluid pb-3" style="width:50%;">
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
                    <textarea class="form-control" rows="5" name="description">
                       {{$testimony->description}}
                    </textarea>
                    @if($errors->has('description'))
                        <div class="error">{{ $errors->first('description') }}</div>
                    @endif
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
@stop
