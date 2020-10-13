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

    <div class="form-wrapper">
      <div class="header">
        <h2>RSVP</h2>
        <p>Please RSVP by this date to be counted for free food</p>
      </div>
      <div class="form">
        <form method="POST" action="/rsvps">
          @csrf

          <div class="field">
            <label for="email">Your Email</label>
            <input type="text" name="email" id="email"></input>
          </div>

          <div class="field">
            <label for="name">Your Name</label>
            <input type="text" name="name" id="name"></input>
          </div>

          <div class="field">
            <input type="radio" id="response-1" name="response" value="yes">
            <label for="response-1">Yes</label>
            
            <input type="radio" id="response-2" name="response" value="no">
            <label for="response-2">No</label>

            <input type="radio" id="response-3" name="response" value="maybe">
            <label for="response-3">Maybe</label>
          </div>

          <input type="hidden" value="{{$meeting->id}}" name="meeting_id"></input>

          <div class="field">
            <button type="submit">Submit</button>
          </div>
        </form>
      </div>
    </div>

    <h2>Current Attendees</h2>
    @forelse ($rsvps as $rsvp)
      <div class="rsvp-wrapper">
        <p>{{ $rsvp->response }}</p>
        <p>{{ $rsvp->email }}</p>
      </div>
    @empty
      <div class="no-rsvps-wrapper">
        <p>No RSVP's yet.</p>
      </div>
    @endforelse
@endsection
