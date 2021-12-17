<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\UserData::factory()->count(10)->create()->each(function ($userData) {
            $userData->save();
        });
    }
}
