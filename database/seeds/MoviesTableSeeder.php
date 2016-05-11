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
             'cover' => 'https://lh3.googleusercontent.com/k2GOVM5YffeUEY4RLHsEmFSHaYbHVJx9SD3tAE7j2eRP2X3nJQVdtkFbie8ofpz_o0BuqQ=s190',
             'purchase_link' => 'http://www.amazon.com/Ip-Man-Blu-ray-Donnie-Yen/dp/B01AU6P8XW/ref=sr_1_4?ie=UTF8&qid=1462983027&sr=8-4&keywords=ip+man',
         ]);

         DB::table('movies')->insert([
             'created_at' => Carbon\Carbon::now()->toDateTimeString(),
             'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
             'title' => 'The Shawshank Redemption',
             'director' => 'Frank Darabont',
             'released' => 1994,
             'cover' => 'https://lh3.googleusercontent.com/AyPO7r5G1Y0XRzquLf93Nx9inTZazHlAa45A8waoPDUs6nEKMXI8-lLtLNRaeodyxyr_bw=s190',
             'purchase_link' => 'http://www.amazon.com/Shawshank-Redemption-Blu-ray-Tim-Robbins/dp/B003ZHR6RK/ref=sr_1_2?ie=UTF8&qid=1462983144&sr=8-2&keywords=shawshank+redemption',
         ]);

         DB::table('movies')->insert([
             'created_at' => Carbon\Carbon::now()->toDateTimeString(),
             'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
             'title' => 'The 40-Year Old Virgin',
             'director' => 'Judd Apatow',
             'released' => 2005,
             'cover' => 'https://lh6.googleusercontent.com/ysfZK8agIrBM0t4wHN_5C0IeFXBhYiEk8uRZGfWkiOgUOTa1dY_jPF9x7T1U1K2NC7STlg=s190',
             'purchase_link' => 'http://www.amazon.com/40-Year-Old-Virgin-Blu-ray-Digital-Copy/dp/B004ZJZQ1A/ref=sr_1_1?ie=UTF8&qid=1462983266&sr=8-1&keywords=40+year+old+virgin+blu+ray',
         ]);
     }
}
