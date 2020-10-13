<?php

namespace App\Http\Controllers;

use App\Models\Meeting;

class MeetingsController extends Controller
{
    public function index()
    {
        $meetings = Meeting::all();

        return view('meetings.index')->with(['meetings' => $meetings]);
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
}
