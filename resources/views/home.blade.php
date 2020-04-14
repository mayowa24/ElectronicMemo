@extends('layouts.sender')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <h3>Welcome to FPA E-Memo System. this system uses School of Science and Computer Studies as the case study</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
