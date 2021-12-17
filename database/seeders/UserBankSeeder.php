<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserBankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\UserBank::factory()->count(10)->create()->each(function ($userBank) {
            $userBank->save();
        });
    }
}
