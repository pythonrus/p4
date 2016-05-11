<?php

use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
         DB::table('movies')->insert([
             'created_at' => Carbon\Carbon::now()->toDateTimeString(),
             'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
             'title' => 'Ip Man',
             'director' => 'Wilson Yip',
             'released' => 2008,
             'cover' => 'http://covers.box.sk/newsimg/dvdmov/max1344284080-front-cover.jpg',
             'purchase_link' => 'http://www.amazon.com/Ip-Man-Blu-ray-Donnie-Yen/dp/B01AU6P8XW/ref=sr_1_4?ie=UTF8&qid=1462983027&sr=8-4&keywords=ip+man',
         ]);

         DB::table('movies')->insert([
             'created_at' => Carbon\Carbon::now()->toDateTimeString(),
             'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
             'title' => 'The Shawshank Redemption',
             'director' => 'Frank Darabont',
             'released' => 1994,
             'cover' => 'http://www.dvd-covers.org/d/27361-3/24Shawshank_Redemption_The_r1_cstm.jpg',
             'purchase_link' => 'http://www.amazon.com/Shawshank-Redemption-Blu-ray-Tim-Robbins/dp/B003ZHR6RK/ref=sr_1_2?ie=UTF8&qid=1462983144&sr=8-2&keywords=shawshank+redemption',
         ]);

         DB::table('movies')->insert([
             'created_at' => Carbon\Carbon::now()->toDateTimeString(),
             'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
             'title' => 'The 40-Year Old Virgin',
             'director' => 'Judd Apatow',
             'released' => 2005,
             'cover' => 'http://www.dvd-covers.org/d/83090-3/34940-Year-Old_Virgin_The.jpg',
             'purchase_link' => 'http://www.amazon.com/40-Year-Old-Virgin-Blu-ray-Digital-Copy/dp/B004ZJZQ1A/ref=sr_1_1?ie=UTF8&qid=1462983266&sr=8-1&keywords=40+year+old+virgin+blu+ray',
         ]);
     }
}
