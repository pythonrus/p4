<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectDirectorsAndMovies extends Migration
{
    public function up()
    {
        Schema::table('movies', function (Blueprint $table) {

            # Add a new INT field called `director_id` that has to be unsigned (i.e. positive)
            $table->integer('director_id')->unsigned();

            # This field `director_id` is a foreign key that connects to the `id` field in the `directors` table
            $table->foreign('director_id')->references('id')->on('directors');

        });
    }

    public function down()
    {
        Schema::table('movies', function (Blueprint $table) {

            # ref: http://laravel.com/docs/migrations#dropping-indexes
            # combine tablename + fk field name + the word "foreign"
            $table->dropForeign('movies_director_id_foreign');

            $table->dropColumn('director_id');
        });
    }
}
