<?php

use Illuminate\Database\Seeder;
use App\Author;
use Faker\Generator as Faker;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      $authors = Author::all();
      for ($i = 0; $i < 10 ; $i++) {
        
        $newAuthor = new Author();

        $newAuthor->name = $faker->firstName();
        $newAuthor->lastname = $faker->lastName();
        $newAuthor->date_of_birth = $faker->dateTimeBetween("-50 years", "now", null);

        $newAuthor->save();
      }
    }
}
