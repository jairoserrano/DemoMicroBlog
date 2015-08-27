<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class MicropostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        DB::table('micropost')->insert([
            'title' => "titulo del primer mensaje",
            'body' => str_random(100),
            'created_at' => $faker->dateTime(),
            'updated_at' => $faker->dateTime(),
            'published_at' => $faker->dateTime(),

        ]);

        DB::table('micropost')->insert([
            'title' => 'titulo del segundo mensaje',
            'body' => str_random(100),
            'created_at' => $faker->dateTime(),
            'updated_at' => $faker->dateTime(),
            'published_at' => $faker->dateTime(),

        ]);

        DB::table('micropost')->insert([
            'title' => 'titulo del tercer mensaje',
            'body' => str_random(100),
            'created_at' => $faker->dateTime(),
            'updated_at' => $faker->dateTime(),
            'published_at' => $faker->dateTime(),

        ]);

    }
}
