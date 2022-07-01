@extends('layouts.admin')

@section('content')

<h1>Messages</h1>



<table class="table table-striped table-inverse table-responsive">
    <thead class="thead-inverse">
        <tr>
            <th>Subject</th>
            <th>Email</th>
            <th>FullName</th>
            <th>Message</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>

        @forelse ($messages as $message )
        <tr>
            <td scope="row">{{$message->subject}}</td>
            <td>{{$message->email}}</td>
            <td>{{$message->full_name}}</td>
            <td>{{$message->message}}</td>

            <td>
                <a href="{{route('admin.messages.show', $message->id)}}" class="btn btn-primary"> View Message</a> 
           </td>
        </tr>

        @empty

        <tr>
            <td scope="row">Nothing to show</td>

        </tr>


        @endforelse

    </tbody>
</table>



@endsection