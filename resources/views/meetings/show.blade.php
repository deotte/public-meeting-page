@extends('layouts.app')

@section('content')
    <a href="/meetings">&lt; Back</a>

    <h1>{{$meeting->title}}</h1>

    <div>{{$meeting->description}}</div>
    <div>{{$meeting->location}}</div>
    <div>{{$meeting->start->format('Y M d @ H:i')}} - {{$meeting->end->format('Y M d @ H:i')}}</div>
    <div>{{ $meeting->agenda }}</div>

    <div class="meeting-form-wrapper">
      <div class="form">
        <form method="POST" action="/meetings/{{ $meeting->id }}">
          @csrf
          @method('PUT')

          <div class="field" id="meeting-agenda">
            <label for="email">Meeting Agenda</label>
            <textarea name="agenda" id="agenda"></textarea>
          </div>

          <div class="field">
            <input type="hidden" name="displayable" id="displayable" value="0"></input>
            <input type="checkbox" name="displayable" id="displayable" value="1"></input>
            <label for="displayable">Will the agenda be displayed on the meeting's public page?</label>
          </div>

          <div class="field">
            <button type="submit">Submit</button>
          </div>
        </form>
      </div>

    <a href="/meetings/{{$meeting->id}}/public">View Public Page</a>
@endsection
