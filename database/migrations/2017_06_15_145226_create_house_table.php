<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHouseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('house', function (Blueprint $table) {
            $table->increments('id')->comment('ハウスID');
            $table->string('description')->comment('説明')->nullable();
            $table->integer('room_type')->comment('客室タイプ')->nullable();
            $table->integer('max_persons')->comment('最大収容人数')->nullable();
            $table->string('breadth')->comment('広さ')->nullable();
            $table->integer('bedroom_quantity')->comment('寝室の数')->nullable();
            $table->integer('bed_cover_quantity')->comment('掛け布団の数')->nullable();
            $table->integer('bed_quantity')->comment('ベッドの数')->nullable();
            $table->integer('bedding_quantity')->comment('寝具の数')->nullable();
            $table->integer('bathroom_quantity')->comment('浴室の数')->nullable();
            $table->integer('toilet_quantity')->comment('トイレの数')->nullable();
            $table->dateTime('check_in')->comment('チェックイン')->nullable();
            $table->dateTime('check_out')->comment('チェックアウト')->nullable();
            $table->integer('min_stay')->comment('最低宿泊人数');
            $table->integer('max_stay')->comment('最大宿泊人数');

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
        //
    }
}
