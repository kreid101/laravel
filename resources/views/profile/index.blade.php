@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row  " >
        <div class="col-3 p-5">
            <img src="https://s1.1zoom.ru/big3/146/USA_Parks_Mountains_Lake_509281.jpg"  class="rounded-circle" width="150px" height="150px">
        </div>
        <div class="col-9 pt-5 " >
            <div class="d-flex"><h1>{{$user->username}}</h1></div>
            <div class="d-flex"><a href="/p/create">add new post</a></div>
            <div class="d-flex">
                <div class="pr-5"><strong class="pr-1">{{$user->posts->count()}}</strong>posts</div>
                <div class="pr-5"><strong class="pr-1">200k</strong>followers</div>
                <div class="pr-5"><strong class="pr-1">45</strong>following</div>
            </div>
            <div class="pt-2"><h5>{{$user->profile->title}}</h5></div>
            <div>The Best Animals Pictures & Videos
                ©All rights belong to their respective owners.
                Tag @animals.co or #animalsco to be featured! 📧animalspromo@gmail
            </div>
        </div>
    </div>
    <div class="row">
        @foreach($user->posts as $post)
            <div class="col-4">
                <a href="/p/{{$post->id}}">
                    <img src="\storage\{{$post->image}}" class="w-100">
                </a>
            </div>
            @endforeach

        </div>
</div>
@endsection
