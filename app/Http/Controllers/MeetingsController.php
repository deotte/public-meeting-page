<?php

namespace App\Http\Controllers;

use App\Models\Meeting;
use App\Models\Rsvp;

class MeetingsController extends Controller
{
    public function index()
    {
        $meetings = Meeting::take(3)->latest()->get();
        $user_meetings = Meeting::take(3)->oldest()->get();

        return view('meetings.index')->with(
          [
            'meetings' => $meetings,
            'user_meetings' => $user_meetings
          ]
        );
    }

    public function show(Meeting $meeting)
    {
        return view('meetings.show')->with(['meeting' => $meeting]);
    }

    public function public_show(Meeting $meeting)
    {
        return view('meetings.public_show')->with(
          [
            'meeting' => $meeting,
            'rsvps' => $meeting->rsvps
          ]
        );
    }

    public function update(Meeting $meeting)
    {
        $meeting->update(request()->validate([
          'agenda' => 'required',
          'displayable' => 'required',
        ]));

        return redirect()->route('meetings.public_show', ['meeting' => $meeting->id])
                         ->withSuccess(['Meeting successfully updated']);
    }
}
