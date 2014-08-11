<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSupUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sup_user', function(Blueprint $table)
		{
			$table->integer('sup_id')->unsigned()->index();
			$table->foreign('sup_id')->references('id')->on('sups')->onDelete('cascade');
			$table->integer('user_id')->unsigned()->index();
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('sup_user', function(Blueprint $table) {
			$table->dropForeign('sup_user_user_id_foreign');
			$table->dropForeign('sup_user_sup_id_foreign');
		});
		Schema::drop('sup_user');
	}

}
