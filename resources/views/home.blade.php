@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Home</div>

                    <div class="panel-body">
                        You are logged in!

                        @if($users->type == 0)
                            <p>you are logged as a lecturer</p>
                        @endif

                        <li>UID : {{$users->id}}</li>
                        <li>Name : {{ $users->name }}</li>
                        <li>Email : {{ $users->email }}</li>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
