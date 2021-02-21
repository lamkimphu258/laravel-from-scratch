<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    private const NUMBER_OF_USERS = 2;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()
            ->count(self::NUMBER_OF_USERS)
            ->create();
    }
}
