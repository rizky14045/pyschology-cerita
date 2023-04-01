<!doctype html>
<html lang="en">
    @php
    $setting = App\Models\Setting::get();   
    @endphp

    <head>
    
        <meta charset="utf-8">
        <title>{{$setting->where('key','name')->first()->value}} - Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
        <meta content="Themesbrand" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('uploads/setting/'.$setting->where('key','favicon')->first()->value)}}">

        <!-- Bootstrap Css -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <!-- Icons Css -->
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css">
        <!-- App Css-->
        <link href="{{asset('/assets/css/app.min.css')}}" rel="stylesheet" type="text/css">
    
    
    </head>

    <body>

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Begin page -->
        <div class="accountbg"></div>
        <div class="account-pages mt-5 pt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-5 col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                
                                <div class="d-flex p-3">
                                    <div class="mx-auto text-center">
                                        <img src="{{asset('uploads/setting/'.$setting->where('key','logo')->first()->value)}}" alt="" class="text-center pb-3 w-100 pb-4">
                                        <h4 class="font-size-18">Welcome Back !</h4>
                                        <p class="text-muted mb-0">Sign in to continue to bagikanceritamu.com</p>
                                    </div>
                                </div>
                                <div class="p-3">
    
                                    <form class="form-horizontal" action="{{route('login')}}" method="POST">
                                    @csrf

                                        <div class="mb-3">
                                            <label class="form-label" for="username">Email</label>
                                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                                            @if($errors->has('email'))
                                            <div class="error">{{ $errors->first('email') }}</div>
                                        @endif
                                        </div>
    
                                        <div class="mb-3">
                                            <label class="form-label" for="userpassword">Password</label>
                                            <input type="password" class="form-control" id="userpassword" placeholder="Enter password" name="password">
                                        </div>
    
                                        <div class="float-end mt-4">
                                            <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button>
                                        </div>
                                    </form>
    
                                </div>
    
                            </div>
                        </div>
                        <div class="mt-5 text-center position-relative">
                            <p class="text-white"> © {{date('Y')}} bagikanceritamu.com <span class="d-none d-sm-inline-block"> by Ditama Digital.</span></p>
                        </div>
    
                    </div>
                </div>
            </div>
        </div>

                             
        <!-- JAVASCRIPT -->
        <script src="{{asset('assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>

        <script src="{{asset('assets/js/app.js')}}"></script>
        @include('sweetalert::alert')

    </body>
</html>
