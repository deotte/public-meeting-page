@extends('layouts.app')

@section('content')
    <h1>Meetings</h1>

    @foreach($meetings as $meeting)
    <div>
        <a href="/meetings/{{$meeting->id}}">{{$meeting->title}}</a>
    </div>
    @endforeach
@endsection