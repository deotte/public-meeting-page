@extends('layouts.app')

@section('content')
    <div class="section-header">
      <h1>All Meetings</h1>
    </div>

    @foreach($meetings as $meeting)
      <div class="meeting-wrapper">
        <div class="meeting-header">
          <div class="meeting-header-title">
            <a href="/meetings/{{$meeting->id}}">{{ $meeting->title }}</a>
          </div>
          <div class="meeting-header-time">
            <p>{{ $meeting->start->format('M d @ h:i') }}</p>
          </div>
        </div>
        <div class="meeting-content">
          <p>{{ Str::limit($meeting-> description, $limit = 100, $end = '...') }}</p>
        </div>
      </div>
    @endforeach

    <!-- This would be a future feature. Pretend that these RSVP's are all tied to
    the current logged in user. -->
    <div class="section-header">
      <h1>Your Meetings</h1>
    </div>

    @foreach($user_meetings as $meeting)
      <div class="meeting-wrapper">
        <div class="meeting-header">
          <div class="meeting-header-title">
            <a href="/meetings/{{$meeting->id}}">{{ $meeting->title }}</a>
          </div>
          <div class="meeting-header-time">
            <p>{{ $meeting->start->format('M d @ h:i') }}</p>
          </div>
        </div>
        <div class="meeting-content">
          <p>{{ Str::limit($meeting-> description, $limit = 100, $end = '...') }}</p>
        </div>
      </div>
    @endforeach
@endsection
