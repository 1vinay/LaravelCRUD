<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMagazineNewspaperPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('magazine_newspaper', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('newspaper_id')->unsigned()->index();
			$table->foreign('newspaper_id')->references('id')->on('newspapers')->onDelete('cascade');
            
			$table->integer('magazine_id')->unsigned()->index();
			$table->foreign('magazine_id')->references('id')->on('magazines')->onDelete('cascade');
            
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
        Schema::dropIfExists('magazine_newspaper');
    }
}
