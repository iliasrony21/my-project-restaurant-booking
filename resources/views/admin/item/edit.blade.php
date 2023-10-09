@extends('layouts.app')
@section('content')

<div class="card card-preview">
    <div class="card-inner">
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h4 class="nk-block-title">Create Item</h4>
            </div>
        </div>
        <div class="preview-block">
           <form action="{{ route('item.update',$item->id) }}" method="POST">
             @csrf
             @method('Put')
            <div class="row gy-4">
                <div class="col-lg-6 col-sm-6">
                    <div class="form-group">
                        <div class="form-control-wrap">
                            <input type="text" class="form-control form-control-xl form-control-outlined" name="name" value="{{$item->name}}" >
                            <label class="form-label-outlined">Item name</label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="form-group">
                        <div class="form-control-wrap ">
                            <div class="form-control-select">
                                <select class="form-control form-control-xl" id="default-06" name="category" value="{{$item->category->name}}">
                                    @foreach ($categories as $category)
                                         <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row gy-4">

                <div class="col-lg-6 col-sm-6">
                    <div class="form-group">
                        <div class="form-control-wrap">
                            <input type="text" class="form-control form-control-xl form-control-outlined" id="outlined-normal" name="price"  value="{{$item->price}}">
                            <label class="form-label-outlined" for="outlined-normal">Price</label>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6">
                    <div class="form-group">
                        <div class="form-control-wrap ">
                            <textarea name="details" class="form-control form-control-xl" placeholder="Item Details">{{$item->details}}"</textarea>
                            {{-- <label class="form-label-outlined" for="outlined-normal">Details</label> --}}
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
