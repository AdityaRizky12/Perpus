<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class TransactionSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 20; $i++) {
            DB::table('transactions')->insert([
                'id' => $i,
                'member_id' => $faker->numberBetween(1, 20),
                'date_start' => $faker->dateTimeBetween('-1 year', 'now'),
                'date_end' => $faker->dateTimeBetween('now', '+1 year'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
