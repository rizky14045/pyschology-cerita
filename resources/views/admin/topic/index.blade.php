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
                    <li class="breadcrumb-item active" aria-current="page">Topic</li>
                </ol>
            </div>
            <div class="col-md-4">
                <div class="float-end d-none d-md-block">
                    <div class="dropdown">
                        <a href="{{route('admin.topic.create')}}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Add Topic</i>
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
                <h4 class="card-title">Data Topic</h4>
                <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                        <thead style="background-color: #20BBC7;">
                        <tr class="text-white">
                            <th>No</th>
                            <th>Topic</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($topics as $topic)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$topic->topic_name}}</td>
                                <td>
                                    <img src="{{asset('uploads/topic_image/'.$topic->topic_image)}}" alt="" class="img-fluid pb-3" style="width:15%;">
                                </td>
                                <td>{{$topic->description}}</td>
                                <td>
                                    <a class="btn btn-sm btn-primary text-white" href="{{route('admin.topic.edit',['id'=>$topic->id])}}">Edit</a>
                                    <form action="{{route('admin.topic.delete',['id'=>$topic->id])}}" class="d-inline" method="POST">
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
                {{$topics->links()}}
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

@stop
@section('scripts')
@stop
