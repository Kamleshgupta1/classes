@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="/home" class="btn btn-primary">Go back</a>
            <br><br>
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                   @if(count($posts) > 0)
                        @foreach($posts as $post)                
                                        <h3><a href="/posts/{{$post->id}}">{{$post->semarks}}</a></h3>
                            <br>
                        @endforeach
                        {{$posts->links()}}
                   @else
                    <p>No post yet.</p>
                   @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
