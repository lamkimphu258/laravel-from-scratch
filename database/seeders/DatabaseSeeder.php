<?php

namespace Database\Seeders;

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
        $this->call(UserSeeder::class);
        $this->command->info('User seeder finished');
        $this->call(ArticleSeeder::class);
        $this->command->info('Article seeder finished');
        $this->call(TagSeeder::class);
        $this->command->info('Tag seeder finished');
    }
}
