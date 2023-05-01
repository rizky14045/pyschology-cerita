@extends('admin.layout.app')
@section('styles')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@stop
@section('content')
<div class="page-title-box">
    <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Psychology</h6>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{url('admin')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('admin.psychology.index')}}">Psychology</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Update</li>
                </ol>
            </div>
        </div> 
    </div>
</div>
<div class="card">
    <div class="card-body">
        <form action="{{route('admin.psychology.update',['id'=>$psychology->id])}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="row pb-3">
                <div class="form-group col-12">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" required value="{{$psychology->name}}">
                    @if($errors->has('name'))
                    <div class="error">{{ $errors->first('name') }}</div>
                @endif
                </div>
            </div>
            <div class="row pb-3">
                <div class="form-group col-12">
                    <label >Biography</label>
                    <textarea class="form-control" rows="5" name="biography" placeholder="biography">
                        {{$psychology->biography}}
                    </textarea>
                    @if($errors->has('biography'))
                        <div class="error">{{ $errors->first('biography') }}</div>
                    @endif
                </div>
            </div>
            <div class="row pb-3">
                <div class="form-group col-12">
                    <label>Number License</label>
                     <textarea class="form-control" rows="5" name="number_license" placeholder="biography">
                        {{$psychology->number_license}}
                    </textarea>
                    @if($errors->has('number_license'))
                    <div class="error">{{ $errors->first('number_license') }}</div>
                @endif
                </div>
            </div>
            <div class="row pb-3">
                <div class="form-group col-12">
                    <label>Image</label>
                    <input class="form-control" name="psychology_image" type="file">
                    <small class="text-muted">File berformat Jpg,Jpeg, Png dan maksimal file 4MB</small>
                    @if($errors->has('psychology_image'))
                        <div class="error">{{ $errors->first('psychology_image') }}</div>
                    @endif
                </div>
            </div>
            <div class="row pb-3">
                <div class="form-group col-12">
                    <label >Education</label>
                    <textarea class="form-control" rows="5" name="education" placeholder="Education">
                        {{$psychology->education}}
                    </textarea>
                    @if($errors->has('education'))
                        <div class="error">{{ $errors->first('education') }}</div>
                    @endif
                </div>
            </div>
            <div class="row pb-3">
                <div class="form-group col-12">
                    <label >Certificate</label>
                    <textarea class="form-control" rows="5" name="certificate" placeholder="certificate">
                        {{$psychology->certificate }}
                    </textarea>
                    @if($errors->has('certificate'))
                        <div class="error">{{ $errors->first('certificate') }}</div>
                    @endif
                </div>
            </div>
            <div class="row pb-3">
                <div class="form-group col-12">
                    <label >Motto</label>
                    <textarea class="form-control" rows="5" name="motto" placeholder="motto">
                        {{$psychology->motto}}
                    </textarea>
                    @if($errors->has('motto'))
                        <div class="error">{{ $errors->first('motto') }}</div>
                    @endif
                </div>
            </div>
            <div class="row pb-3">
                <div class="form-group col-12">
                    <label >Experience</label>
                    <textarea class="form-control" rows="5" name="experience" placeholder="experience">
                        {{$psychology->experience}}
                    </textarea>
                    @if($errors->has('experience'))
                        <div class="error">{{ $errors->first('experience') }}</div>
                    @endif
                </div>
            </div>
            <div class="row pb-3">
                <div class="form-group col-12">
                    <label>Topics</label>
                    <select class="form-select topics" name="topics[]" multiple="multiple">
                        @php
                        $topic_selected = json_decode($psychology->topics);  
                        @endphp
                        @foreach ($topics as $topic)
                            <option {{is_array($topic_selected) && in_array($topic->topic_name, $topic_selected) ? 'selected' : '' }}>{{$topic->topic_name}}</option>
                        @endforeach
                    </select>
                    @if($errors->has('topics'))
                    <div class="error">{{ $errors->first('topics') }}</div>
                @endif
                </div>
            </div>
            
            <div class="form-group" align="right">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-success">Reset</button>
                <a href="{{route('admin.psychology.index')}}" class="btn btn-danger">Back</a>
            </div>
        </form>
    </div>
</div>


@stop
@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="{{asset('vendor/ckeditor')}}/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'biography' );
</script>
<script>
    CKEDITOR.replace( 'number_license' );
</script>
<script>
    CKEDITOR.replace( 'education' );
</script>
<script>
    CKEDITOR.replace( 'motto' );
</script>
<script>
    CKEDITOR.replace( 'certificate' );
</script>
<script>
    CKEDITOR.replace( 'experience' );
</script>
<script>
    $(".topics").select2({
        allowClear: true,
  tags: true
});
</script>
@stop
