@extends('admin.layout.app')
@section('styles')
@stop
@section('content')
<div class="page-title-box">
    <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Header</h6>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{url('admin')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('admin.header.index')}}">Header</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create</li>
                </ol>
            </div>
        </div> 
    </div>
</div>
<div class="card">
    <div class="card-body">
        <form action="{{route('admin.header.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row pb-3">
                <div class="form-group col-12">
                    <label>Header Image</label>
                    <input class="form-control" name="header_image" type="file" required>
                    <small class="text-muted">File berformat Jpg,Jpeg, Png dan maksimal file 4MB</small>
                    @if($errors->has('header_image'))
                        <div class="error">{{ $errors->first('header_image') }}</div>
                    @endif
                </div>
            </div>
            <div class="row pb-3">
                <div class="form-group col-12">
                    <label>Description</label>
                    <textarea class="form-control" id="description" rows="12" name="description"></textarea>
                    @if($errors->has('description'))
                    <div class="error">{{ $errors->first('description') }}</div>
                @endif
                </div>
            </div>
            <div class="row pb-3">
                <div class="form-group col-12">
                    <label>Sub Description</label>
                     <textarea class="form-control" id="description" rows="4" name="sub_description">
                    </textarea>
                    @if($errors->has('sub_description'))
                    <div class="error">{{ $errors->first('sub_description') }}</div>
                @endif
                </div>
            </div>
            <div class="row pb-3">
                <div class="form-group col-12">
                    <label>Position</label>
                    <select class="form-select" aria-label="Default select example" name="position">
                        <option selected disabled>Open this select menu</option>
                        <option>Homepage</option>
                        <option>Layanan</option>
                        <option>Topik Konseling</option>
                        <option>Artikel</option>
                        <option>About Us</option>
                    </select>
                    @if($errors->has('position'))
                    <div class="error">{{ $errors->first('position') }}</div>
                @endif
                </div>
            </div>
            <div class="form-group" align="right">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-success">Reset</button>
                <a href="{{route('admin.header.index')}}" class="btn btn-danger">Back</a>
            </div>
        </form>
    </div>
</div>


@stop
@section('scripts')
<script src="{{asset('vendor/ckeditor')}}/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'description' );
</script>
@stop

