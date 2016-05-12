<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovieTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('movie_tag', function (Blueprint $table) {

             $table->increments('id');
             $table->timestamps();

             # `movie_id` and `tag_id` will be foreign keys, so they have to be unsigned
             #  Note how the field names here correspond to the tables they will connect...
             # `movie_id` will reference the `movies table` and `tag_id` will reference the `tags` table.
             $table->integer('movie_id')->unsigned();
             $table->integer('tag_id')->unsigned();

             # Make foreign keys
             $table->foreign('movie_id')->references('id')->on('movies');
             $table->foreign('tag_id')->references('id')->on('tags');
         });
     }

     public function down()
     {
         Schema::drop('movie_tag');
     }
}
