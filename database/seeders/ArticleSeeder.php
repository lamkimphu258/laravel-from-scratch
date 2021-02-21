<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    private const NUMBER_OF_ARTICLES = 10;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::factory()
            ->count(self::NUMBER_OF_ARTICLES)
            ->create();
    }
}
