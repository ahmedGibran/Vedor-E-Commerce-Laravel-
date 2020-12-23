
@extends('layouts.app')
@section('content')

    <div class="container" >
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Ticket</div>
                    <div class="card-body">
                        <div class="row">
                            @foreach($ticket as $tickets)

                                <div class="col-md-3">
                                    <div class="alert alert-primary"role="alert">
                                        <p>{{$tickets->customer->first_name}}</p>
                                        <p>{{$tickets->title}}</p>
                                        <p>{{$tickets->message}}</p>
                                        <p>{{$tickets->state}}</p>


                                    </div>
                                </div>

                            @endforeach

                        </div>
                        {{$ticket->links()}}

                    </div>
                </div>
                <h1 class="h1">Ahmed</h1>
            </div>
        </div>
    </div>
@endsection
