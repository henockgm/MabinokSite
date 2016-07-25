<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForiegnKeysToCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		//
		Schema::table('comments', function ($table) {
    	    $table->integer('post_id')->unsigned()->after('id');
    	    $table->foreign('post_id')->references('id')->on('posts');
    	    $table->integer('user_id')->unsigned()->after('post_id');


    		// $table->foreign('user_id')->references('id')->on('users');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		//
		Schema::table('comments', function($table) {
			// $table->dropForeign(['user_id']);
			$table->dropColumn('user_id');
			$table->dropForeign(['post_id']);
		});
	}

}
