@extends('admin.layout.app')
@section('styles')
@stop
@section('content')
<div class="page-title-box">
    <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Faq</h6>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{url('admin')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('admin.faq.index')}}">Faq</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Update</li>
                </ol>
            </div>
        </div> 
    </div>
</div>
<div class="card">
    <div class="card-body">
        <form action="{{route('admin.faq.update',['id'=>$faq->id])}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="row pb-3">
                <div class="form-group col-12">
                    <label>Title</label>
                    <input type="text" class="form-control" name="title" required value="{{$faq->title}}">
                    @if($errors->has('title'))
                    <div class="error">{{ $errors->first('title') }}</div>
                @endif
                </div>
            </div>
            <div class="row pb-3">
                <div class="form-group col-12">
                    <label >Description</label>
                    <textarea class="form-control" id="description" rows="12" name="description">
                        {{$faq->description}}
                    </textarea>
                    @if($errors->has('description'))
                    <div class="error">{{ $errors->first('description') }}</div>
                @endif
                </div>
            </div>
            <div class="form-group" align="right">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-success">Reset</button>
                <a href="{{route('admin.faq.index')}}" class="btn btn-danger">Back</a>
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
>
@stop
