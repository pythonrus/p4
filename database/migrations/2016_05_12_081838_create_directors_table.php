<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDirectorsTable extends Migration
{

    public function up()
    {
        Schema::create('directors', function (Blueprint $table) {

            $table->increments('id');
            $table->timestamps();

            # The rest of the fields...
            $table->string('first_name');
            $table->string('last_name');
            $table->integer('birth_year');
            $table->string('bio_url');
        });
    }

    public function down()
    {
        Schema::drop('directors');
    }
}
