@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/images/0019.jpg" height="90px" class="rounded-circle">
        </div>
        <div class="col-9">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{$user->username}}</h1>
                <a href="/p/create">Add new post</a>
            </div>
            <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
            <div class="d-flex">
                <div class="pr-5"><strong>{{$user->posts->count()}}</strong> posts</div>
                <div class="pr-5"> <strong> 23k</strong> followers</div>
                <div class="pr-5"> <strong> 212</strong> followings</div>
            </div>
            <div class="pt-4 font-weight-bold">
                {{$user->profile->title?? 'no title'}}
            </div>
            <div>
                {{$user->profile->description ?? 'no des'}}
            </div>
            <div>
                <a href="#">{{$user->profile->url ?? 'n/a'}}</a>
            </div>
        </div>
    </div>
    <div class="row pt-4">
        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="/p/{{$post->id}}">
                    <img src="/storage/{{$post->image}}" class="w-100">
                </a>

            </div>
        @endforeach




    </div>
</div>
@endsection
