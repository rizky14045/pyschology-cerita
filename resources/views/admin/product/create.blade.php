@extends('admin.layout.app')
@section('styles')
@stop
@section('content')
<div class="page-title-box">
    <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Product</h6>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{url('admin')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('admin.product.index')}}">Product</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create</li>
                </ol>
            </div>
        </div> 
    </div>
</div>
<div class="card">
    <div class="card-body">
        <form action="{{route('admin.product.store')}}" method="POST" enctype="multipart/form-data">
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
                    <label>Type</label>
                    <select class="form-select" aria-label="Default select example" name="type">
                        <option selected disabled>Open this select menu</option>
                        <option>Individu</option>
                        <option>Berpasangan</option>
                    </select>
                    @if($errors->has('type'))
                    <div class="error">{{ $errors->first('type') }}</div>
                @endif
                </div>
            </div>
            <div class="row pb-3">
                <div class="form-group col-12">
                    <label>Price</label>
                    <input type="text" class="form-control" name="price" required>
                    @if($errors->has('price'))
                    <div class="error">{{ $errors->first('price') }}</div>
                @endif
                </div>
            </div>
            <div class="row pb-3">
                <div class="form-group col-12">
                    <label>Product Image</label>
                    <input class="form-control" name="product_image" type="file" required>
                    <small class="text-muted">File berformat Jpg,Jpeg, Png dan maksimal file 4MB</small>
                    @if($errors->has('product_image'))
                        <div class="error">{{ $errors->first('product_image') }}</div>
                    @endif
                </div>
            </div>
            <div class="row pb-3">
                <div class="form-group col-12">
                    <a href="#" class="btn btn-primary col-2 add-product">Add List Product</a>
                    <br>
                    <div class="list-place">
                        <label class="mt-3" >List Product</label>
                        <input type="text" class="form-control" name="list_product[]" required>
                        @if($errors->has('list_product[]'))
                        <div class="error">{{ $errors->first('list_product[]') }}</div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="form-group" align="right">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-success">Reset</button>
                <a href="{{route('admin.product.index')}}" class="btn btn-danger">Back</a>
            </div>
        </form>
    </div>
</div>


@stop
@section('scripts')
<script>
    $('.add-product').on('click', function () {
    $('.list-place').append('<input type="text" class="form-control mt-3" name="list_product[]">');
    });
</script>
@stop
