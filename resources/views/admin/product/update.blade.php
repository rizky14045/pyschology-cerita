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
        <form action="{{route('admin.product.update',['id'=>$product->id])}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="row pb-3">
                <div class="form-group col-12">
                    <label>Title</label>
                    <input type="text" class="form-control" name="title" required value="{{$product->title}}">
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
<<<<<<< HEAD
                        <option {{ ($product->type == 'Online') ? 'selected' : ''}}>Online</option>
                        <option {{ ($product->type == 'Offline') ? 'selected' : ''}}>Offline</option>
=======
                        <option {{ ($product->type == 'Individu') ? 'selected' : ''}}>Individu</option>
                        <option {{ ($product->type == 'Berpasangan') ? 'selected' : ''}}>Berpasangan</option>
>>>>>>> fdf898a59796b18e821afe2bc349c63c3107eeda
                    </select>
                    @if($errors->has('type'))
                        <div class="error">{{ $errors->first('type') }}</div>
                    @endif
                </div>
            <div class="row pb-3">
                <div class="form-group col-12">
                    <label>Price</label>
                    <input type="text" class="form-control" name="price" required value="{{$product->price}}">
                    @if($errors->has('price'))
                    <div class="error">{{ $errors->first('price') }}</div>
                @endif
                </div>
            </div>
            <div class="row pb-3">
                <div class="form-group col-12">
                    <label>Product Image</label>
                    <br>
                    <img src="{{asset('uploads/product_image/'.$product->product_image)}}" alt="" class="img-fluid pb-3" style="width:50%;">
                    <input class="form-control" name="product_image" type="file">
                    <small class="text-muted">File berformat Jpg,Jpeg, Png dan maksimal file 4MB</small>
                    @if($errors->has('product_image'))
                        <div class="error">{{ $errors->first('product_image') }}</div>
                    @endif
                </div>
            </div>
            <div class="row pb-3">
                <div class="form-group col-12">
                    <a href="#-1" class="btn btn-primary col-2 add-product">Add List Product</a>
                    <br>
                    <label class="mt-3">List Product</label>
                        <div class="list-place">
                            @php
                            $list = json_decode($product->list_product);  
                            @endphp
                            @foreach ($list as $item)
                                @if ($item)
                                <input type="text" class="form-control mt-3" name="list_product[]" value="{{$item}}">
                                @endif
                            @endforeach
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
