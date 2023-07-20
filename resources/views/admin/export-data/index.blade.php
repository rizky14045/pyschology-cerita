@extends('admin.layout.app')
@section('styles')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link href="/select2-bootstrap-theme/select2-bootstrap.min.css" type="text/css" rel="stylesheet" />
@stop
@section('content')
<div class="page-title-box">
    <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Export Data</h6>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{url('admin')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('admin.export-data.index')}}">Export Data</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Export</li>
                </ol>
            </div>
        </div>
        
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="{{route('admin.export-data.export')}}" method="GET">
                    @csrf
                    <div class="form-group pb-3">
                      <label for="exampleFormControlSelect1">Example select</label>
                      <select class="form-control psychologist" id="exampleFormControlSelect1" name="psychology_id">
                        <option selected disabled>Choose Psychology</option>
                        @foreach ($psychologist as $psychology)
                        <option value="{{$psychology->id}}">{{$psychology->name}}</option>
                        @endforeach
                     
                      </select>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Start Date</label>
                                <input type="date" class="form-control" name="start_date">
                              </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">End Date</label>
                                <input type="date" class="form-control" name="end_date">
                              </div>
                        </div>
                    </div>
                   <button class="btn btn-primary mt-5 float-end" type="submit">Search</button>
                  </form>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->
@endsection
@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(".psychologist").select2({
        allowClear: true,
});
</script>

@stop
