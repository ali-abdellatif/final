<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMoviesTable extends Migration {

	public function up()
	{
		Schema::create('movies', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 191);
		});
	}

	public function down()
	{
		Schema::drop('movies');
	}
}