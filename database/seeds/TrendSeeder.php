<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TrendSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('trends')->insert([
            'name' => $faker->title(),
            'used' => $faker->numberBetween(1,100),
            'created_at' => $faker->dateTime(),
            'updated_at' => $faker->dateTime(),

        ]);
        DB::table('trends')->insert([
            'name' => $faker->title(),
            'used' => $faker->numberBetween(1,100),
            'created_at' => $faker->dateTime(),
            'updated_at' => $faker->dateTime(),

        ]);
    }
}
