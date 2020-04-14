@extends('layouts.sender')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Inbox</div>
                    <div class="card-body">
                        <div class="container">
                           <table class="table">
                                <thead>
                                    <tr>
                                        <th>Sender_id</th>
                                        <th>Date</th>
                                        <th>Title</th>
                                        <th>Time Delivered</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($messages as $message)
                                <tr>
                                <td>{{$message->user_id}}</td>

                                <td><strong>{{$message->date_sent}}</strong></td>

                                <td><a href="{{ route('read',['id'=>$message->id])}}"><strong>{{$message->message_title}}</strong></a></td>
                                <td>{{$message->created_at}}</td>
                                </tr>
                                @endforeach
                                <p>{{$messages->links()}}</p>
<!--
                            @foreach($messages as $message)
                                <tr>
                                <p><label for="date">Date Sent:</label><strong>{{$message->date_sent}}</strong></p>
                                <p><label for="">Reference Number:</label><strong>{{$message->reference_No}}</strong></p>
                                <p><label for="">Recipent Department:</label><strong>{{$message->department}}</strong></p>
                                <p><strong><label for="">Title:</label>{{$message->message_title}}</strong></p>
                                <p>{{$message->message_body}}</p>
                                <p><a href="#" class="btn btn-info btn-md">Forward</a>
                                <a href="#" class="btn btn-default btn-md">Edit</a></p>
                                </tr>
                            @endforeach -->
                                </tbody>
                           </table>
                            </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
