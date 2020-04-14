@extends('layouts.sender')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Read</div>
                    <div class="card-body">
                        <div class="container">

                            <div class="container justify-content-center">
                            <img src="{{asset('img/logo1.png')}}" alt="">
                            <p class="container justify-content-center"><h2><strong>School of Science and Computer Studies (SSCS)</strong></h2></p>
                            <p><h3><strong>Federal Polytechnic Ado Ekiti</strong></h3></p>
                            <p><h2></strong>Internal memo</strong></h2></p>
                            </div>


                                <p><label for="date">Date Sent:</label><strong>{{$message->date_sent}}</strong></p>
                                <p><label for="">Reference Number:</label><strong>{{$message->reference_No}}</strong></p>
                                <p><label for="">Recipent Department:</label><strong>{{$message->department}}</strong></p>
                                <p><strong><label for="">Title:</label>{{$message->message_title}}</strong></p>
                                <p>{{$message->message_body}}</p>
                                <p><a href="#" class="btn btn-info btn-md">Forward</a>
                                <a href="#" class="btn btn-default btn-md">Edit</a></p>



                            </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
