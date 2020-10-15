@extends('layouts.app')

@section('content')
  <section class="public-show-section">
    <!-- <a href="/meetings">&lt; Back</a> -->
    <div class="public-meeting">
      <div class="public-heading">
        @auth
          <a href="/meetings/{{$meeting->id}}">{{ $meeting->title }}</a>
        @endauth

        @guest
          <h1>{{ $meeting->title }}</h1>
        @endguest
      </div>
      <div class="public-location-time">
        <p>{{ $meeting->location }}<p>
        <p>{{$meeting->start->format('M d @ h:i')}} - {{$meeting->end->format('M d @ h:i')}}</p>
      </div>
      <div class="public-description">
        <p>{{ $meeting->description }}</p>
      </div>
      <div class="public-agenda">
        <p>{{ $meeting->agenda }}</p>
      </div>
    </div>

    <div class="public-form-wrapper">
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

    <div class="rsvp-wrapper">
      <div class="rsvp-header">
        <h2>Current Attendees</h2>
      </div>
      <div class="rsvps">
        @forelse ($rsvps as $rsvp)
          <div class="attendees">
            <p>{{ $rsvp->email }}</p>
            <p>{{ $rsvp->response }}</p>
          </div>
        @empty
          <p>No RSVP's yet.</p>
        @endforelse
      </div>
    </div>
  </section>
@endsection
