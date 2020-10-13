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

    <!-- here is where a form allowing users to toggle on/off the public meeting page - you will need to handle that form inside of a controller -->

    <h2>RSVPs</h2>
    @forelse ($rsvps as $rsvp)
      <div class="rsvp-wrapper">
        <p>{{ $rsvp->response }}</p>
        <p>{{ $rsvp->user->email }}</p>
      </div>
    @empty
      <div class="no-rsvps-wrapper">
        <p>No RSVP's yet.</p>
      </div>
    @endforelse
    <!-- here is where a list of emails with their RSVP status for this meeting will go -->
@endsection
