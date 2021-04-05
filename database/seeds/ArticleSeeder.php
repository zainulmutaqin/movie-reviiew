<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('en_US');
        $title=[
            ['Captain America The First Avenger', 'Knives Out', 'Searching', 'Coco', 'Identity', 'Iron Man', 'Onwards']
        ];
        $category=[
            ['1', '2', '2','3', '2', '1', '3']
        ];
        $banner=[
            ['a.jpg', 'b.jpg', 'c.jpg','d.jpg', 'e.jpg', 'f.jpg', 'g.jpg']
        ];
        for($i = 0; $i < 7; $i++){

          DB::table('articles')->insert([
              'title' => $title[0][$i],
              'slug' => str_slug($title[0][$i]),
              'category_id' => $category[0][$i],
              'content' => $faker->paragraph($nbSentences = 100, $variableNbSentences = true),
              'banner' => $banner[0][$i],
              'created_at' => $faker->dateTime($max = 'now'),
              'updated_at' => Carbon::now()
          ]);

      }
    }
}
