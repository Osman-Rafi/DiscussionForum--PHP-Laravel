@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">Dashboard</div>

        <div class="card-body">

            <div class="card">
                <div class="card-header float-left">
                    <b style="font-family: 'Comic Sans MS';font-size: large">{{strtoupper($post->user->name)}}</b>
                    <span class="float-right">
                                   <b>{{$post->created_at->diffForHumans()}}</b>
                            </span>
                </div>
                <div class="card text-center">
                    <div class="card-body">
                        <h2 class="card-title" style="font-family: Impact">{{strtoupper($post->title)}}</h2>
                        <p class="card-text"> {{$post->content}}</p>
                    </div>
                    <div class="card-footer text-muted">
                        {{--{{$item->replies->count()}}--}} Replies
                    </div>
                </div>

            </div>

        </div>

      {{--  @foreach($post->replies as $r)
            <div class="card">
                <div class="card-header float-left">
                    <b style="font-family: 'Comic Sans MS';font-size: large">{{strtoupper($r->user->name)}}</b>
                    <span class="float-right">
                                   <b>{{$r->created_at->diffForHumans()}}</b>
                            </span>
                </div>
                <div class="card text-center">
                    <div class="card-body">
                        <h2 class="card-title"
                            style="font-family: Impact">{{str_limit(strtoupper($r->content),30)}}</h2>
                        <p class="card-text"> {{$r->content}}</p>
                    </div>
                    <div class="card-footer text-muted">
                        LIKE
                    </div>
                </div>
            </div>
        @endforeach--}}

    </div>
@endsection