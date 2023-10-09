@extends('layouts.app')
@section('content')
<a href="{{route('item.create')}}" class="btn btn-primary btn-sm my-3">Add Item</a>
<div class="card card-preview">

    <div class="card-inner">
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h4 class="nk-block-title">All Items</h4>
            </div>
        </div>
        <table class="datatable-init nowrap table">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Details</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($items as $key => $item)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->category->name}}</td>
                    <td>{{$item->details}}</td>
                    <td>{{$item->price}}</td>
                    <td>
                        <a href="{{route('item.edit',$item->id)}}"class="btn btn-primary btn-sm">Edit</a>
                        <form id="delete-form-{{$item->id}}" action="{{route('item.destroy',$item->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                        </form>
                        <button type="button" class="btn btn-danger btn-sm " onclick="if(confirm('Are you sure to delete this?')){
                            event.preventDefault();
                            document.getElementById('delete-form-{{$item->id}}').submit();
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
