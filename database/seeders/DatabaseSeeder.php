<?php

namespace Database\Seeders;

use App\Models\Meeting;
use App\Models\User;
use App\Models\Rsvp;
use Database\Factories\MeetingFactory;
use Database\Factories\RsvpFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(1)->create();
        Meeting::factory(6)->create();
        Rsvp::factory(4)->create();
    }
}
