<?php

use Illuminate\Database\Seeder;

//includo il MODEL
use App\Comic;
use App\Author;

//includo il faker generator
use Faker\Generator as Faker;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i = 0; $i < 30; $i++) {

        $author = Author::inRandomOrder()->first();
        //creo subito oggetto di tipo Comic(MODEl)
        $newComic = new Comic;

        //popolo le colonne ad ogni ciclo
        $newComic->author_id = $author->id;
        $newComic->title = $faker->text(30);
        $newComic->number = $faker->numberBetween(1, 300);
        $newComic->edition = $faker->company();
        $newComic->pages = $faker->numberBetween(30, 200);
        $newComic->author = $faker->name();
        $newComic->year = $faker->year();
        $newComic->poster = $faker->imageUrl(150, 200);
        $newComic->price = $faker->randomFloat(2, 1, 9999);
        $newComic->reading = rand(0, 2) == 1 ? "rtl" : "ltr";
        $newComic->description = $faker->text(200);

        //salvo l'oggetto
        $newComic->save();
      }
    }
}
