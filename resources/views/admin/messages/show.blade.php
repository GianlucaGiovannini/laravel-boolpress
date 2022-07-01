@extends('layouts.admin')

@section('content')

<h1>Messages</h1>


<div>
    <strong>Subject: </strong>
    {{$message->subject}}
</div>
<div>
    <strong>Email: </strong>
    {{$message->email}}
</div>
<div>
    <strong>Name: </strong>
    {{$message->full_name}}
</div>
<div>
    <strong>Message: </strong>
    {{$message->message}}
</div>
<div class="">

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#model-{{$message->id}}">
        Replay
    </button>

    <!-- Modal -->
    <div class="modal fade" id="model-{{$message->id}}" tabindex="-1" role="dialog" aria-labelledby="modelTitle-{{$message->id}}" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Reply to user</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form action="{{route('admin.messages.store')}}" method="post">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" name="email" id="email" class="form-control" placeholder="user email here" aria-describedby="emailHelper" value="{{$message->email}}">

                        </div>

                        <div class="mb-3">
                            <label for="subject" class="form-label">subject</label>
                            <input type="text" name="subject" id="subject" class="form-control" placeholder="user subject here" aria-describedby="subjectHelper" value="{{'Re:' . $message->subject}}">

                        </div>

                        <div class="mb-3 d-flex flex-column">
                            <label for="message" class="form-label">Reply Message</label>
                            <textarea name="message" id="message" cols="50" rows="10">


                                 ______________ Old message ______________
                                {{$message->message}}
                                    
                                </textarea>
                        </div>
                    <button type="submit" class="btn btn-primary">Replay</button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
                </form>
            </div>
        </div>
    </div>




    <a href="#" class="btn btn-danger">Delete</a>

</div>






@endsection