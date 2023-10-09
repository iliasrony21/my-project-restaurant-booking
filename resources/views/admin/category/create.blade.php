@extends('layouts.app')
@section('content')

<div class="card card-preview">
    <div class="card-inner">
        <div class="preview-block">
            <span class="preview-title-lg overline-title">Create Slider</span>
           <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data" >
             @csrf
            <div class="row gy-4">

                <div class="col-lg-12 col-sm-12">
                    <div class="form-group">
                        <div class="form-control-wrap">
                            <input type="text" class="form-control form-control-xl form-control-outlined" id="outlined-normal" name="name" >
                            <label class="form-label-outlined" for="outlined-normal">Category name</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row gy-4">
                <div class="col-lg-12">
                    <a href="{{ route('category.index') }}" class="btn btn-round btn-warning">Back</a>
                    <input type="reset" class="btn btn-round btn-info">
                    <input type="submit" class="btn btn-round btn-success float-right">


                </div>
            </div>
        </form>


        </div>



    </div>
</div>


@endsection
