<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    private const NUMBER_OF_TAGS = 5;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::factory()
            ->count(self::NUMBER_OF_TAGS)
            ->create();

        $allTags = Tag::all();
        foreach($allTags as $tag) {
            $tag->articles()->attach(Article::all()->random(2));
        }
    }
}
