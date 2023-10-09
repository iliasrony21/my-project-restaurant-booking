@extends('layouts.app')
@section('content')

<div class="card card-preview">
    <div class="card-inner">
        <div class="preview-block">
            <span class="preview-title-lg overline-title">Edit Chef</span>
           <form action="{{route('chef.update',$chef->id)}}" method="POST" enctype="multipart/form-data" >
             @csrf
             @method('PUT')
            <div class="row gy-4">

                <div class="col-lg-6 col-sm-6">
                    <div class="form-group">
                        <div class="form-control-wrap">
                            <input type="text" class="form-control form-control-xl form-control-outlined" id="outlined-normal" name="name" value="{{ $chef->name}}">
                            <label class="form-label-outlined" for="outlined-normal">Chef Name</label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="form-group">
                        <div class="form-control-wrap">
                            <div class="form-icon form-icon-right xl">
                                <em class="icon ni ni-user"></em>
                            </div>
                            <input type="text" class="form-control form-control-xl form-control-outlined" id="outlined-right-icon" name="title" value="{{ $chef->title}}">
                            <label class="form-label-outlined" for="outlined-right-icon" >Chef title</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gy-4">
               <div class="col-lg-12">
                <div class="form-group">
                    <label class="form-label" for="customFileLabel">Chef Image Upload</label>
                    <img src="{{asset('uploads/chef/'.$chef->image)}}" style="width: 140px; height:80px;" alt="" srcset="">
                    <div class="form-control-wrap">

                        <div class="custom-file">

                            <input type="file" class="custom-file-input" id="customFile" name="image">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                </div>
               </div>

            </div>
            <div class="row gy-4">
                <div class="col-lg-12">
                    <a href="{{ route('chef.index') }}" class="btn btn-round btn-warning">Back</a>
                    <input type="reset" class="btn btn-round btn-info">
                    <input type="submit" class="btn btn-round btn-success float-right" value="Update">


                </div>
            </div>
        </form>


        </div>



    </div>
</div>


@endsection
