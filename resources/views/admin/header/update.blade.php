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
        <form action="{{route('admin.header.update',['id'=>$header->id])}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="row pb-3">
                <div class="form-group col-12">
                    <label>Header Image</label>
                    <br>
                    <img src="{{asset('uploads/header_image/'.$header->header_image)}}" alt="" class="img-fluid pb-3" style="width:50%;">
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
                    <textarea class="form-control" id="description" rows="12" name="description">
                        {{$header->description}}
                    </textarea>
                    @if($errors->has('description'))
                    <div class="error">{{ $errors->first('description') }}</div>
                @endif
                </div>
            </div>
            <div class="row pb-3">
                <div class="form-group col-12">
                    <label>Sub Description</label>
                    <textarea class="form-control" id="description" rows="4" name="sub_description">
                        {{$header->sub_description}}
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
                        <option {{ ($header->position == 'Homepage') ? 'selected' : ''}}>Homepage</option>
                        <option {{ ($header->position == 'Layanan') ? 'selected' : ''}}>Layanan</option>
                        <option {{ ($header->position == 'Topik Konseling') ? 'selected' : ''}}>Topik Konseling</option>
                        <option {{ ($header->position == 'Artikel') ? 'selected' : ''}}>Artikel</option>
                        <option {{ ($header->position == 'About Us') ? 'selected' : ''}}>About Us</option>

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

