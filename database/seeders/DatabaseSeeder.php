<?php

namespace Database\Seeders;

use App\Models\Meeting;
use App\Models\User;
use Database\Factories\MeetingFactory;
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
        Meeting::factory(10)->create();
    }
}
