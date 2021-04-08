<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFootballcampsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footballcamps', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('destination');
            $table->string('price');
            $table->string('thumbnail');
            $table->text('description');
            $table->date('begin_date');
            $table->date('end_date');
            $table->boolean('available');
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
        Schema::dropIfExists('footballcamps');
    }
}
