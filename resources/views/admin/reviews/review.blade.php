@extends('layouts.app')
@section('content')

    <div class="container" >
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Review</div>
                    <div class="card-body">
                        <div class="row">
                            @foreach($review as $reviews)

                                <div class="col-md-3">
                                    <div class="alert alert-primary"role="alert">
                                        <p>{{$reviews->customer->first_name}}</p>
                                        <p>{{$reviews->stars}}</p>
                                        <p>{{$reviews->review}}</p>
                                        <p>{{$reviews->created_at}}</p>

                                    </div>
                                </div>

                            @endforeach

                        </div>
                        {{$review->links()}}

                    </div>
                </div>
                <h1 class="h1">Ahmed</h1>
            </div>
        </div>
    </div>
@endsection
