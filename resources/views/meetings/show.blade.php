@extends('layouts.app')

@section('content')
    <a href="/meetings">&lt; Back</a>

    <h1>{{$meeting->title}}</h1>

    <div>{{$meeting->description}}</div>
    <div>{{$meeting->location}}</div>
    <div>{{$meeting->start->format('Y M d @ H:i')}} - {{$meeting->end->format('Y M d @ H:i')}}</div>

    @if ($meeting->displayable)
      <div>{{ $meeting->agenda }}</div>
    @endif

    <a href="/meetings/{{$meeting->id}}/public">View Public Page</a>
    <!-- here is where a form allowing users to toggle on/off the public meeting page - you will need to handle that form inside of a controller -->
@endsection
