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
                            <a class="nav-link active" data-bs-toggle="tab" href="#general-setting" role="tab">
                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                <span class="d-none d-sm-block">General Setting</span> 
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#social-link" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block">Social Link</span> 
                            </a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active" id="general-setting" role="tabpanel">
                            <form action="{{route('admin.settings.general.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mt-4">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="p-4">
                                                <label for="">Company Name</label>
                                                <input type="text" class="form-control" name="name" value="{{$setting->where('key','name')->first()->value}}">
                                                <br>
                                                <label for="">Logo</label> <br>
                                                <img src="{{url('uploads/setting/'.$setting->where('key','logo')->first()->value)}}" height="50px">
                                                <br><br>
                                                <input type="file" name="logo">
                                                <br><br>
                                                <label for="">Favicon</label> <br>
                                                <img src="{{url('uploads/setting/'.$setting->where('key','favicon')->first()->value)}}" height="50px">
                                                <br><br>
                                                <input type="file" name="favicon">
                                                <br><br>
                                                <button class="btn btn-primary">Save</button>
                                                </div>   
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane" id="social-link" role="tabpanel">
                            <form action="{{route('admin.settings.social-link.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mt-4">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="p-4">
                                                <label for="">Whatsapp</label>
                                                <input type="text" class="form-control" name="setting[whatsapp]" value="{{$setting->where('key','whatsapp')->first()->value}}">
                                                <small class="text-muted">Format Number Phone : 62812345</small>
                                                <br>
                                                <br>
                                                <label for="">Facebook</label>
                                                <input type="text" class="form-control" name="setting[facebook]" value="{{$setting->where('key','facebook')->first()->value}}">
                                                <br>
                                                <label for="">Instagram</label>
                                                <input type="text" class="form-control" name="setting[instagram]" value="{{$setting->where('key','instagram')->first()->value}}">
                                                <br>
                                                <label for="">Twitter</label>
                                                <input type="text" class="form-control" name="setting[twitter]" value="{{$setting->where('key','twitter')->first()->value}}">
                                                <br>
                                                <button class="btn btn-primary">Save</button>
                                                </div>   
                                            </div>
                                        </div>
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
