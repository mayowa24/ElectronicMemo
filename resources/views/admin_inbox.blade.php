@extends('layouts.admin')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Admin Inbox</div>
                    <div class="card-body">

                        <table class="table">
                                <thead>
                                    <tr>
                                        <th>Sender_Id</th>
                                        <th>Date</th>
                                        <th>Title</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($messages as $message)
                                    <tr>
                                    <td>{{$message->user_id}}</td>
                                    <td><strong>{{$message->date_sent}}</strong></td>

                                    <td><a href="{{ route('read',['id'=>$message->id])}}"><strong>{{$message->message_title}}</strong></a></td>
                                    <td><a href="{{ route('delete',['id'=>$message->id])}}" class="btn btn-danger btn-md">Remove Memo</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                           </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
