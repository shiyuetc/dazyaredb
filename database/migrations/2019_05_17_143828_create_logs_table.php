<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id', 15);
            $table->string('gag_id', 12);
            $table->string('command')->comment('create:作成, update:更新, delete:削除');
            $table->string('befoer_text', 50)->comment('作成時/更新前/削除前の値');
            $table->string('befoer_yomi', 50)->comment('作成時/更新前/削除前の値');
            $table->string('after_text', 50)->comment('更新後の値');
            $table->string('after_yomi', 50)->comment('更新後の値');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logs');
    }
}
