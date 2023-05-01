@extends('admin.layout.app')
@section('styles')
@stop
@section('content')
<div class="page-title-box">
    <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Price</h6>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{url('admin')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('admin.price.index')}}">Price</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create</li>
                </ol>
            </div>
        </div> 
    </div>
</div>
<div class="card">
    <div class="card-body">
        <form action="{{route('admin.price.update',['id'=>$price->id])}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="row pb-3">
                <div class="form-group col-12">
                    <label>Medium</label>
                    <input type="text" class="form-control" name="title" required value="{{$price->title}}">
                    @if($errors->has('title'))
                    <div class="error">{{ $errors->first('title') }}</div>
                @endif
                </div>
            </div>
            <div class="row pb-3">
                <div class="form-group col-12">
                    <label>Price</label>
                    <input type="number" class="form-control" name="price" required value="{{$price->price}}">
                    @if($errors->has('price'))
                    <div class="error">{{ $errors->first('price') }}</div>
                @endif
                </div>
            </div>
            <div class="row pb-3">
                <div class="form-group col-12">
                    <label>Type</label>
<<<<<<< HEAD
                    <input type="text" class="form-control" name="type" required value="{{$price->type}}">
=======
                    <input type="number" class="form-control" name="type" required value="{{$type->type}}">
>>>>>>> fdf898a59796b18e821afe2bc349c63c3107eeda
                    @if($errors->has('type'))
                    <div class="error">{{ $errors->first('type') }}</div>
                @endif
                </div>
            </div>
            <div class="form-group" align="right">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-success">Reset</button>
                <a href="{{route('admin.price.index')}}" class="btn btn-danger">Back</a>
            </div>
        </form>
    </div>
</div>


@stop
@section('scripts')

@stop
