<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
         $data = ['action','adventure','animation','biography','comedy','crime','documentary','drama','family','fantasy','historical','horror','musical', 'mystery','romance','science fiction', 'war', 'western'];

         foreach($data as $tagName) {
             $tag = new \App\Tag();
             $tag->name = $tagName;
             $tag->save();
         }
     }
}
