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
                    <li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
                </ol>
            </div>
        </div> 
    </div>
</div>
<div class="row mt-4">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="p-4">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs nav-tabs-custom" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#user-profile" role="tab">
                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                <span class="d-none d-sm-block">User Profile</span> 
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#change-password" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block">Change Password</span> 
                            </a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active" id="user-profile" role="tabpanel">
                            <form action="{{route('admin.user.update-profile')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="row mt-4">
                                    <div class="col-md-2">
                                        <label for=""> Name </label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="name" value="{{Auth::user()->name}}" required>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-2">
                                        <label for=""> Email </label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="email" value="{{Auth::user()->email}}" required disabled>
                                        @if($errors->has('email'))
                                        <div class="error">{{ $errors->first('email') }}</div>
                                    @endif
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-2">
                                        <label for=""> Photo Profile ( Optional) </label>
                                    </div>
                                    <div class="col-md-10">
                                        <img src="{{asset('uploads/profile_image/')}}/{{Auth::user()->profile_image ?? 'default.png'}}" alt="" class="img-fluid pb-3" style="width:25%;">
                                        <input class="form-control" name="profile_image" type="file">
                                        <small class="text-muted">File berformat Jpg,Jpeg, Png dan maksimal file 4MB</small>
                                        @if($errors->has('profile_image'))
                                            <div class="error">{{ $errors->first('profile_image') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="offset-md-2 col-md-10">
                                        <input type="submit" class="btn btn-primary" value="Save Changes">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane" id="change-password" role="tabpanel">
                            <form action="{{route('admin.user.change-password')}}" method="post">
                            @csrf
                            @method('PATCH')
                                <div class="row mt-4">
                                    <div class="col-md-2">
                                        <label for=""> Current Password </label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="password" class="form-control" name="current_password" required>
                                        @if($errors->has('current_password'))
                                            <div class="error">{{ $errors->first('current_password') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-2">
                                        <label for=""> New Password </label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="password" class="form-control" name="password" required>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-2">
                                        <label for=""> New Password Confirmation </label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="password" class="form-control" name="password_confirmation" required>
                                        @if($errors->has('password_confirmation'))
                                        <div class="error">{{ $errors->first('password_confirmation') }}</div>
                                    @endif
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="offset-md-2 col-md-10">
                                        <input type="submit" class="btn btn-primary" value="Save Changes">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
@section('scripts')
@stop
