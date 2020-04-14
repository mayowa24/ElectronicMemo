@extends('layouts.sender')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">New Memo</div>
                    <div class="card-body">
                        <form action="{{ route('comp_message.store')}}" method="POST">
                        @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="date">Date</label>
                                        <input type="date" name="date_sent" id="date_sent" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="reference_no">Reference NO:</label>
                                        <input type="text" name="reference_no" id="reference_no"placeholder="Reference Number" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="department">Recipent Department:</label>
                                        <select name="department" id="department" class="form-control">
                                        <option selected>Select Recipent Department</option>
                                        <option value="Math and Stat">Math and Stat</option>
                                        <option value="Computer Science">Computer Science</option>
                                        <option value="Glass and Ceramic">Glass and Ceramic</option>
                                        <option value="Food Technology">Food Technology</option>
                                        <option value="Science Laboratory">Science Laboratory</option>
                                        <option value="All Departments">All Departments</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <label for="message_title">Memo Title</label>
                            <input type="text" id="message_title" name="message_title" placeholder="Enter the Message Title" class="form-control">
                            <label for="message_body">Memo Body</label>
                            <textarea name="message_body" id="message_body" cols="40" rows="10"class="form-control"></textarea>
                            <br>
                            <div class="row">
                                <div class="col-md-2">
                                    <button type = "submit"class="btn btn-info btn-md form-control">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
