@extends('layouts.app')
@section('content')
<a href="{{route('category.create')}}" class="btn btn-primary btn-sm my-3">Add Category</a>
<div class="card card-preview">

    <div class="card-inner">

        <table class="datatable-init nowrap table">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $key=>$category)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$category->name}}</td>
                    <td>{{$category->slug}}</td>
                    <td>
                        <a href="{{route('category.edit',$category->id)}}"class="btn btn-primary btn-sm">Edit</a>
                        <form id="delete-form-{{$category->id}}" action="{{route('category.destroy',$category->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                        </form>
                        <button type="button" class="btn btn-danger btn-sm " onclick="if(confirm('Are you sure to delete this?')){
                            event.preventDefault();
                            document.getElementById('delete-form-{{$category->id}}').submit();
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
