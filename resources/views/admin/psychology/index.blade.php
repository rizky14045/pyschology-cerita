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
                    <li class="breadcrumb-item active" aria-current="page">Pyschology</li>
                </ol>
            </div>
            <div class="col-md-4">
                <div class="float-end d-none d-md-block">
                    <div class="dropdown">
                        <a href="{{route('admin.psychology.create')}}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Add pyschology</i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Pyschology</h4>
                <div class="table-responsive pt-3">
                    <table class="table table-bordered ">
                        <thead style="background-color: #20BBC7;">
                        <tr class="text-white">
                            <th>No</th>
                            <th>Name</th>
                            <th>Number License</th>
                            <th>Image</th>
                            <th>Education</th>
                            <th>Motto</th>
                            <th>Experience</th>
                            <th>Topics</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($psychologies as $psychology)
                        @php
                        $topics = json_decode($psychology->topics);  
                        @endphp
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$psychology->name}}</td>
                                <td>{{$psychology->number_license}}</td>
                                <td>
                                    <img src="{{asset('uploads/psychology_image/'.$psychology->psychology_image)}}" alt="" class="img-fluid pb-3" style="width:50%;">
                                </td>
                                <td>{!!$psychology->education!!}</td>
                                <td>{!!$psychology->motto!!}</td>
                                <td>{!!$psychology->experience!!}</td>
                                <td> @foreach ($topics as $item)
                                        
                                    @if ($item)
                                    <li>{{$item}}</li>
                                    @endif
                                @endforeach</td>
                                <td>
                                    <a class="btn btn-sm btn-primary text-white" href="{{route('admin.psychology.edit',['id'=>$psychology->id])}}">Edit</a>
                                    <form action="{{route('admin.psychology.delete',['id'=>$psychology->id])}}" class="d-inline" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-sm btn-danger text-white" >Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                      
                        </tbody>
                    </table>
                </div>
                {{$psychologies->links()}}

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

@stop
@section('scripts')
@stop
