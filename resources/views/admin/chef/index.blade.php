@extends('layouts.app')
@section('content')
<a href="{{route('chef.create')}}" class="btn btn-primary btn-sm my-3">Add Chef</a>
<div class="card card-preview">

    <div class="card-inner">

        <table class="datatable-init nowrap table">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($chefs as $key=>$chef)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$chef->name}}</td>
                    <td>{{$chef->title}}</td>
                    <td><img src="{{asset('uploads/chef/'.$chef->image)}}" style="width: 140px; height:80px;" alt="" srcset=""></td>
                    <td>
                        <a href="{{route('chef.edit',$chef->id)}}"class="btn btn-primary btn-sm float-left">Edit</a>
                        <form id="delete-form-{{$chef->id}}" action="{{route('chef.destroy',$chef->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                        </form>
                        <button type="button" class="btn btn-danger btn-sm float-right" onclick="if(confirm('Are you sure to delete this?')){
                            event.preventDefault();
                            document.getElementById('delete-form-{{$chef->id}}').submit();
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
