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
                    <li class="breadcrumb-item active" aria-current="page">Faq</li>
                </ol>
            </div>
            <div class="col-md-4">
                <div class="float-end d-none d-md-block">
                    <div class="dropdown">
                        <a href="{{route('admin.faq.create')}}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Add Faq</i>
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
                <h4 class="card-title">Data Faq</h4>
                <div class="table-responsive pt-3">
                    <table class="table table-bordered ">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($faqs as $faq)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$faq->title}}</td>
                                <td>{!!$faq->description!!}</td>
                                <td>
                                    <a class="btn btn-sm btn-primary text-white" href="{{route('admin.faq.edit',['id'=>$faq->id])}}">Edit</a>
                                    <form action="{{route('admin.faq.delete',['id'=>$faq->id])}}" class="d-inline" method="POST">
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

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

@stop
@section('scripts')
@stop
