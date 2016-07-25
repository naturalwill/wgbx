<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBxsushesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('bxsushes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sushe',10);
        });
        DB::table('bxsushes')->insert([
			['sushe' => '东莞1栋'],
			['sushe' => '东莞2栋'],
			['sushe' => '东莞3栋'],
			['sushe' => '东莞4栋'],
			['sushe' => '东莞5栋'],
			['sushe' => '东莞6栋'],
			['sushe' => '东莞7栋'],
			['sushe' => '东莞8栋'],
			['sushe' => '东莞9栋'],
			['sushe' => '东莞10栋'],
			['sushe' => '东莞11栋'],
			['sushe' => '东莞12栋'],
			['sushe' => '东莞13栋'],
			['sushe' => '东莞14栋'],
			['sushe' => '东莞15栋'],
			['sushe' => '东莞留1'],
			['sushe' => '东莞留2'],
			['sushe' => '湛江1栋'],
			['sushe' => '湛江2栋'],
			['sushe' => '湛江医务楼'],
			['sushe' => '东莞16栋'],
			['sushe' => '湛江3栋'],
			['sushe' => '湛江4栋'],
			['sushe' => '湛江5栋'],
			['sushe' => '湛江6栋'],
			['sushe' => '湛江7栋'],
			['sushe' => '湛江8栋'],
        ]);
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('bxsushes');
    }
}
