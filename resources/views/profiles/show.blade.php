@extends('layouts.master')

@section('content')  
<style>
    img {
        max-width: 100%;
        max-height: 100%;
    }
    .image-container {
        overflow-x: scroll;
        overflow-y: hidden;
        white-space: nowrap;
    }
</style>
    <div class="container is-max-widescreen">
       <div class="columns">
           <div class="column is-one-third">
                <img class="is-inline-block image w-100" src="{{ asset('storage/' . $u->filename) }}">
           </div>
           <div class="column">
               <h2>{{$userProfileInfo->name}}, {{$userProfileInfo->age}}</h2>
           </div>
       </div>
    </div>
    <div class="container" style="background-color: red">
        <h1>Profile for {{ $user->name }}</h1>
        <div class="image-container" style="height: 400px;background-color:blue;">
            @foreach($userPhotos as $u)
                {{-- <div class="" --}}
                <img class="is-inline-block image h-100" src="{{ asset('storage/' . $u->filename) }}">
            @endforeach
            <img class="is-inline-block image h-100" src="{{ asset('storage/' . $u->filename) }}">
            <img class="is-inline-block image h-100" src="{{ asset('storage/' . $u->filename) }}">
            <img class="is-inline-block image h-100" src="{{ asset('storage/' . $u->filename) }}">

        </div>
        <ul>
            <li>{{$userProfileInfo->age}}
            <li>{{$userProfileInfo->location}}
            <li>{{$userProfileInfo->bio}}
        </ul>
        <ul>
            @if($userProfileInfo->twitter) [mail icon] {{ '@' . $userProfileInfo->twitter }} @endif
            @if($userProfileInfo->discord) [mail icon] {{ '@' . $userProfileInfo->discord }} @endif
            @if($userProfileInfo->tumblr) [mail icon] {{ '@' . $userProfileInfo->tumblr }} @endif
            @if($userProfileInfo->email) [mail icon] {{ '@' . $userProfileInfo->email }} @endif

        </ul>
        @foreach($userFandomTags as $f)
            <h5>{{ $f }}</h5>
        @endforeach
    </div>

    <a class="button" href="/browse">Get your matches</a>

@endsection