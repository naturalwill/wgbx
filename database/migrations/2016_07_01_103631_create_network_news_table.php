<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNetworkNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('network_news', function (Blueprint $table) {
            $table->increments('id');
            $table->string('subject');
            $table->string('playtype');
            $table->text('msg'); 
			$table->integer ( 'created_at' )->nullable ();
			$table->integer ( 'updated_at' )->nullable ();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('network_news');
    }
}
