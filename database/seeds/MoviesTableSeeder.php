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
         $director_id = \App\Director::where('last_name','=','Yip')->pluck('id')->first();
         DB::table('movies')->insert([
             'created_at' => Carbon\Carbon::now()->toDateTimeString(),
             'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
             'title' => 'Ip Man',
             #'director' => 'Wilson Yip',
             'director_id' => $director_id,
             'released' => 2008,
             'cover' => 'http://s32.postimg.org/4aoe0gv9h/ipman.jpg',
             'purchase_link' => 'http://www.amazon.com/Ip-Man-Blu-ray-Donnie-Yen/dp/B01AU6P8XW/ref=sr_1_4?ie=UTF8&qid=1462983027&sr=8-4&keywords=ip+man',
         ]);

         $director_id = \App\Director::where('last_name','=','Darabont')->pluck('id')->first();
         DB::table('movies')->insert([
             'created_at' => Carbon\Carbon::now()->toDateTimeString(),
             'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
             'title' => 'The Shawshank Redemption',
             #'director' => 'Frank Darabont',
             'director_id' => $director_id,
             'released' => 1994,
             'cover' => 'http://s32.postimg.org/dwdeqk9j9/shawshank.jpg',
             'purchase_link' => 'http://www.amazon.com/Shawshank-Redemption-Blu-ray-Tim-Robbins/dp/B003ZHR6RK/ref=sr_1_2?ie=UTF8&qid=1462983144&sr=8-2&keywords=shawshank+redemption',
         ]);

         $director_id = \App\Director::where('last_name','=','Apatow')->pluck('id')->first();
         DB::table('movies')->insert([
             'created_at' => Carbon\Carbon::now()->toDateTimeString(),
             'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
             'title' => 'The 40-Year Old Virgin',
             #'director' => 'Judd Apatow',
             'director_id' => $director_id,
             'released' => 2005,
             'cover' => 'http://s32.postimg.org/hale1e3b9/virgin.jpg',
             'purchase_link' => 'http://www.amazon.com/40-Year-Old-Virgin-Blu-ray-Digital-Copy/dp/B004ZJZQ1A/ref=sr_1_1?ie=UTF8&qid=1462983266&sr=8-1&keywords=40+year+old+virgin+blu+ray',
         ]);
     }
}
