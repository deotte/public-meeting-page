<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Rsvp;

class Meeting extends Model
{
    use HasFactory;

    protected $dates = ['start', 'end'];

    protected $fillable = ['agenda', 'displayable'];

    public function rsvps()
    {
      return $this->hasMany(Rsvp::class);
    }
}
