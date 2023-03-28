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

    @yield('styles')
</head>