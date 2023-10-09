@extends('layouts.app')
@section('content')

<div class="card card-preview">

    <div class="card-inner">

        <table class="datatable-init nowrap table">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Action</th>
                </tr>
            </thead>
          <tbody>
            @foreach ($contacts as $key=>$contact)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$contact->name}}</td>
                <td>{{$contact->email}}</td>
                <td>{{$contact->subject}}</td>
                <td>{{$contact->message}}</td>
                {{-- <td>
                    @if ($reservation->status == 1)
                        <span class="badge badge-success">Confirmed</span>
                    @endif
                    @if ($reservation->status == 0)
                    <span class="badge badge-danger">Warning</span>
                @endif
                </td> --}}
                <td>
                    {{-- @if ($reservation->status == 0)
                        <form id="form-status-{{$reservation->id}}" action="{{route('reservation.status',$reservation->id)}}" method="POST">
                            @csrf
                        </form>
                        <button type="button" class="btn btn-warning btn-sm " onclick="if(confirm('Are you sure to delete this?')){
                            event.preventDefault();
                            document.getElementById('form-status-{{$reservation->id}}').submit();
                        }else{
                            event.preventDefault();
                        }
                        ">Confirmed</button>
                    @endif --}}
                    {{-- @if ($reservation->status == 0)
                        <form id="form-status-{{$reservation->id}}" action="{{route('reservation.status',$reservation->id)}}" method="POST">
                            @csrf
                        </form>
                        <button type="button" class="btn btn-info btn-sm " onclick="if(confirm('Are you varified to phone number?')){
                            event.preventDefault();
                            document.getElementById('form-status-{{$reservation->id}}').submit();
                        }else{
                            event.preventDefault();
                        }
                        ">Confirm</button>
                    @endif --}}
                    {{-- <a href="#" class="btn btn-primary">Edit</a> --}}
                    <form id="delete-form-{{$contact->id}}" action="{{route('contact.destroy',$contact->id)}}" method="POST">
                        @csrf

                    </form>
                        <button type="button" class="btn btn-danger btn-sm " onclick="if(confirm('Are you sure to delete this?')){
                            event.preventDefault();
                            document.getElementById('delete-form-{{$contact->id}}').submit();
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
