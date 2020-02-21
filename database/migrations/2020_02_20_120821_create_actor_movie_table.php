<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateActorMovieTable extends Migration {

	public function up()
	{
		Schema::create('actor_movie', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('actor_id');
			$table->integer('movie_id');
		});
	}

	public function down()
	{
		Schema::drop('actor_movie');
	}
}