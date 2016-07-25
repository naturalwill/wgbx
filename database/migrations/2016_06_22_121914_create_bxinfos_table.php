<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBxinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bxinfos', function (Blueprint $table) {
            $table->increments('id');
            $table->char('stunum',11);
            $table->string('stuname',32);
            $table->char('phone',11);
            $table->char('phone2',6)->default('');
            $table->string('sushe',10);
            $table->char('fangjian',3);
            $table->char('port',1);
            $table->text('info');            
            $table->tinyInteger('status')->default(0);
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
        Schema::drop('bxinfos');
    }
}
