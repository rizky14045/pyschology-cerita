<head>

    <meta charset="utf-8">
    <title>{{$setting->where('key','name')->first()->value}} - Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Dashboard & Admin website bagikanceritamu.com" name="description">
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
    <style>
        .pagination .pagination-list{
            display: flex;
            list-style: none !important;
            gap: 15px;
            align-items: center !important;
        }
        .pagination-list li a{
   
                text-decoration: none;
                position: relative;
                display: block;
                color: #20BBC7;
                background-color: #fff;
                border: 1px solid #ced4da;
                border-radius: 2px;
                padding: 7px;
        }
        .pagination-list .active a{
   
                text-decoration: none;
                position: relative;
                display: block;
                color: #fff !important;
                background-color: #20BBC7;
                border: 1px solid #ced4da;
                border-radius: 2px;
                padding: 7px;
        }
        .pagination-list .disabled .page-link{
                background-color: #ced4da;
                }
    </style>
</head>