@extends('admin.layout.app')
@section('styles')
@stop
@section('content')
<div class="page-title-box">
    <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Article</h6>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{url('admin')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('admin.article.index')}}">Article</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create</li>
                </ol>
            </div>
        </div> 
    </div>
</div>
<div class="card">
    <div class="card-body">
        <form action="{{route('admin.article.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row pb-3">
                <div class="form-group col-12">
                    <label>Title</label>
                    <input type="text" class="form-control" name="title" required>
                    @if($errors->has('title'))
                    <div class="error">{{ $errors->first('title') }}</div>
                @endif
                </div>
            </div>
            <div class="row pb-3">
                <div class="form-group col-12">
                    <label>Banner Image</label>
                    <input class="form-control" name="banner_image" type="file" required>
                    <small class="text-muted">File berformat Jpg,Jpeg, Png dan maksimal file 4MB</small>
                    @if($errors->has('banner_image'))
                        <div class="error">{{ $errors->first('banner_image') }}</div>
                    @endif
                </div>
            </div>
            {{-- <div class="row pb-3">
                <div class="form-group col-12">
                    <label >Description ( Optional )</label>
                    <textarea class="form-control" rows="5" name="description" placeholder="First Paragraph in Body"></textarea>
                    @if($errors->has('description'))
                        <div class="error">{{ $errors->first('description') }}</div>
                    @endif
                </div>
            </div> --}}
            <div class="row pb-3">
                <div class="form-group col-12">
                    <label >body</label>
                    <textarea class="form-control" id="body" rows="12" name="body" required></textarea>
                    @if($errors->has('body'))
                        <div class="error">{{ $errors->first('body') }}</div>
                    @endif
                </div>
            </div>
            <div class="form-group" align="right">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-success">Reset</button>
                <a href="{{route('admin.article.index')}}" class="btn btn-danger">Back</a>
            </div>
        </form>
    </div>
</div>


@stop
@section('scripts')
<script src="{{asset('vendor/ckeditor')}}/ckeditor.js"></script>
<script>
    CKEDITOR.replace('body', {
        filebrowserUploadUrl: "{{route('admin.article.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
    </script> 
@stop
