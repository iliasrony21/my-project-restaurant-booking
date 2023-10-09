@extends('layouts.app')
@section('content')
<a href="{{route('slider.create')}}" class="btn btn-primary btn-sm my-3">Add Slider</a>
<div class="card card-preview">

    <div class="card-inner">

        <table class="datatable-init nowrap table">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Title</th>
                    <th>Sub-Title</th>
                    <th>Images</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sliders as $key=>$slider)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$slider->title}}</td>
                    <td>{{$slider->sub_title}}</td>
                    <td><img src="{{asset('uploads/slider/'.$slider->images)}}" style="width: 140px; height:80px;" alt="" srcset=""></td>
                    <td>
                        <a href="{{route('slider.edit',$slider->id)}}"class="btn btn-primary btn-sm float-left">Edit</a>
                        <form id="delete-form-{{$slider->id}}" action="{{route('slider.destroy',$slider->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                        </form>
                        <button type="button" class="btn btn-danger btn-sm float-right" onclick="if(confirm('Are you sure to delete this?')){
                            event.preventDefault();
                            document.getElementById('delete-form-{{$slider->id}}').submit();
                        }else{
                            event.preventDefault();
                        }
                        ">Delete</button>
                    </td>

                </tr>
                @endforeach


            </tbody>
        </table>
    </div>
</div><!-- .card-preview -->

@endsection
