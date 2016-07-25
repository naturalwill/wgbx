<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNetstatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('netstatuses', function (Blueprint $table) {
            $table->increments('id');
            $table->text('info'); 
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
        Schema::drop('netstatuses');
    }
}
