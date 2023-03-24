@extends('admin.layout.app')
@section('styles')
@stop
@section('content')
<div class="page-title-box">
    <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Setting</h6>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{url('admin')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Setting</li>
                </ol>
            </div>
        </div>
        
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row mt-4">
                        <div class="col-lg-12">
                                <label for="">Company Name</label>
                                <input type="text" class="form-control" name="name" value="">
                                <br>
                                <label for="">Logo</label> <br>
                                <img src="" height="50px">
                                <br>
                                <input type="file" name="logo">
                                <br>
                                <br>
                                <label for="">Favicon</label>
                                <br>
                                <img src="" height="50px">
                                <br>
                                <input type="file" name="favicon">
                                <br>
                                <br>
                                <label for="">Facebook</label>
                                <input type="text" class="form-control" name="setting[facebook]" value="">
                                <br>
                                <label for="">Instagram</label>
                                <input type="text" class="form-control" name="setting[instagram]" value="">
                                <br>
                                <button class="btn btn-primary">Save</button> 
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

@stop
@section('scripts')
@stop
