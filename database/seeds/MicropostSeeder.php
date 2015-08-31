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

        DB::table('microposts')->insert([
            'title' => "titulo del primer mensaje",
            'body' => $faker->paragraph(),
            'created_at' => $faker->dateTime(),
            'updated_at' => $faker->dateTime(),
            'published_at' => $faker->dateTime(),
            'user_id' => 1,

        ]);

        DB::table('microposts')->insert([
            'title' => 'titulo del segundo mensaje',
            'body' => $faker->paragraph(),
            'created_at' => $faker->dateTime(),
            'updated_at' => $faker->dateTime(),
            'published_at' => $faker->dateTime(),
            'user_id' => 1,

        ]);

        DB::table('microposts')->insert([
            'title' => 'titulo del tercer mensaje',
            'body' => $faker->paragraph().' '.$faker->paragraph(),
            'created_at' => $faker->dateTime(),
            'updated_at' => $faker->dateTime(),
            'published_at' => $faker->dateTime(),
            'user_id' => 2,

        ]);

    }
}
