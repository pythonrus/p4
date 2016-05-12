<?php

use Illuminate\Database\Seeder;

class DirectorsTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('directors')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'first_name' => 'Wilson',
        'last_name' => 'Yip',
        'birth_year' => 1963,
        'bio_url' => 'https://en.wikipedia.org/wiki/Wilson_Yip',
        ]);

        DB::table('directors')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'first_name' => 'Frank',
        'last_name' => 'Darabont',
        'birth_year' => 1959,
        'bio_url' => 'https://en.wikipedia.org/wiki/Frank_Darabont',
        ]);

        DB::table('directors')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'first_name' => 'Judd',
        'last_name' => 'Apatow',
        'birth_year' => 1967,
        'bio_url' => 'https://en.wikipedia.org/wiki/Judd_Apatow',
        ]);

    }
}
