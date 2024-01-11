@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Alle posts</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    @foreach($posts as $post)
                    <h3>{{$post->title}}</h3>
                    <p>{{$post->message}}</p>
                    <small>gepost door {{$post->user->name}} op {{$post->created_at->format('Y/m/d \o\m H:i')}}</small>
                    <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
