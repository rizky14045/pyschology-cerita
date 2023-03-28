@extends('admin.layout.app')
@section('styles')
@stop
@section('content')
<div class="page-title-box">
    <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">User</h6>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{url('admin')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('admin.user.create')}}">User</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create</li>
                </ol>
            </div>
        </div> 
    </div>
</div>
<div class="card">
    <div class="card-body">
        <form action="{{route('admin.user.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row pb-3">
                <div class="form-group col-6">
                    <label>Username</label>
                    <input type="text" class="form-control" name="name" required>
                    @if($errors->has('name'))
                    <div class="error">{{ $errors->first('name') }}</div>
                @endif
                </div>
                <div class="form-group col-6">
                    <label >Email</label>
                    <input type="email" class="form-control" name="email" required>
                    @if($errors->has('email'))
                    <div class="error">{{ $errors->first('email') }}</div>
                @endif
                </div>
            </div>
            <div class="row pb-3">
                <div class="form-group col-6">
                    <label for="role" class="control-label">Role</label>
                    <select class="form-select" name="role" required>
                        <option selected disabled>Choose Role</option>
                        <option>admin</option>
                        <option>finance</option>
                    </select>
                </div>
                <div class="form-group col-6">
                    <label for="profile_image" class="control-label">File Foto</label>
                    <input class="form-control" name="profile_image" type="file">
                    @if($errors->has('profile_image'))
                        <div class="error">{{ $errors->first('profile_image') }}</div>
                    @endif
                    <small class="text-muted">File berformat Jpg,Jpeg, Png dan maksimal file 4MB</small>
                </div>
            </div>
            <div class="form-group pb-3">
                <label >Password</label>
                <input type="password" class="form-control" name="password" required>
            </div>

            <div class="form-group" align="right">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-success">Reset</button>
                <a href="{{route('admin.user.index')}}" class="btn btn-danger">Back</a>
            </div>
        </form>
    </div>
</div>


@stop
@section('scripts')
@stop
