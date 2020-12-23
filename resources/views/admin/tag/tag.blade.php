@extends('layouts.app')
@section('content')

    <div class="container" >
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Tag</div>
                    <div class="card-body">
                        <div class="row">
                            @foreach($tag as $tags)

                                <div class="col-md-3">
                                    <div class="alert alert-primary"role="alert">
                                        <p>{{$tags->tag}}</p>

                                    </div>
                                </div>

                            @endforeach

                        </div>
                        {{$tag->links()}}

                    </div>
                </div>
                <h1 class="h1">Ahmed</h1>
            </div>
        </div>
    </div>
@endsection
