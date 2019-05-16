<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gags', function (Blueprint $table) {
            $table->string('id', 12);
            $table->string('text', 50);
            $table->string('yomi', 50);
            $table->string('author_id', 15);
            $table->string('final_editor_id', 15)->nullable();
            $table->timestamps();
            $table->primary('id');
            $table->foreign('author_id')->references('id')->on('users');
            $table->foreign('final_editor_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gags');
    }
}
