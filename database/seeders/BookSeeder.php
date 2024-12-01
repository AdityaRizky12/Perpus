<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use App\Models\Book;
use Illuminate\Database\Seeder;


class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        
        for ($i=0; $i < 20; $i++) {
            $catalog = new Book;

            $catalog->isbn = $faker->randomNumber(9);
            $catalog->title = $faker->name;
            $catalog->year = rand(2010,2024);

            $catalog->publisher_id = rand(1,20);
            $catalog->author_id = rand(1,20);
            $catalog->catalog_id = rand(1,4);

            $catalog->qty = rand(10,20);
            $catalog->price = rand(10000,20000);

            $catalog->save();
        }
    }
}