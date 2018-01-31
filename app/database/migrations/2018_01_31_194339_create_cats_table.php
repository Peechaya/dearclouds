<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	 public function up()
  {
 	 Schema::create('cats', function($table)
 	 {
 		 $table->increments('id');
 		 $table->integer('user_id');
 		 $table->string('title', 255);
 		 $table->string('tags', 255);
 		 $table->longText('content');
 		 $table->string('photo', 255);
 		 $table->string('url', 255);
 		 $table->string('category', 255);
 		 $table->timestamps();
 		 $table->softDeletes();
 	 });
  }

  /**
 	* Reverse the migrations.
 	*
 	* @return void
 	*/
  public function down()
  {
 	 Schema::drop('cats');
  }

}
