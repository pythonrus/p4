<?php

use Illuminate\Database\Seeder;

class MovieTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {

         # First, create an array of all the movies we want to associate tags with
         # The *key* will be the movie title, and the *value* will be an array of tags.
         $movies =[
             'Ip Man' => ['action','biography','drama','historical','war'],
             'The Shawshank Redemption' => ['crime','drama','mystery'],
             'The 40-Year Old Virgin' => ['comedy','romance']
         ];

         # Now loop through the above array, creating a new pivot for each movie to tag
         foreach($movies as $title => $tags) {

             # First get the movie
             $movie = \App\Movie::where('title','like',$title)->first();

             # Now loop through each tag for this movie, adding the pivot
             foreach($tags as $tagName) {
                 $tag = \App\Tag::where('name','LIKE',$tagName)->first();

                 # Connect this tag to this movie
                 # Create a many to many entry
                 $movie->tags()->save($tag);
             }

         }
     }
}
