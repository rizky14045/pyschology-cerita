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
                    <li class="breadcrumb-item active" aria-current="page">Article</li>
                </ol>
            </div>
            <div class="col-md-4">
                <div class="float-end d-none d-md-block">
                    <div class="dropdown">
                        <a href="{{route('admin.article.create')}}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Add Article</i>
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
                <h4 class="card-title">Data Article</h4>
                <div class="table-responsive pt-3">
                    <table class="table table-bordered ">
                        <thead style="background-color: #20BBC7;">
                        <tr class="text-white">
                            <th>No</th>
                            <th>Data</th>
                            <th>Created By</th>
                            <th>Title</th>
                            <th>Banner</th>
                            {{-- <th>Description</th> --}}
                            <th>Body</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($articles as $article)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$article->created_at->format('d F Y')}}</td>
                                <td>{{$article->creator->name ??''}}</td>
                                <td>{{$article->title}}</td>
                                <td>
                                    <img src="{{asset('uploads/banner_image/'.$article->banner_image)}}" alt="" class="img-fluid pb-3" style="width:50%;">
                                </td>
                                {{-- <td>{{$article->description}}</td> --}}
                                <td>{!!$article->body!!}</td>
                                <td>
                                    <a class="btn btn-sm btn-primary text-white" href="{{route('admin.article.edit',['id'=>$article->id])}}">Edit</a>
                                    <form action="{{route('admin.article.delete',['id'=>$article->id])}}" class="d-inline" method="POST">
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
                {{$articles->links()}}
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

@stop
@section('scripts')
@stop
