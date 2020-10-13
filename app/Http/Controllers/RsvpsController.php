<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Rsvp;

class RsvpsController extends Controller
{
    public function store()
    {
        Rsvp::create(request()->validate([
          'name' => 'required',
          'email' => 'required',
          'response' => 'required',
          'meeting_id' => 'required'
        ]));

        $meeting_id = request('meeting_id');

        return redirect()->route('meetings.public_show', ['meeting' => $meeting_id])
                         ->withSuccess(['Thank you for responding!']);
    }
}
