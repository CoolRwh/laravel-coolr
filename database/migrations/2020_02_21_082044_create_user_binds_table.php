<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserBindsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_binds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('provider')->comment('第三方名称例：weixin|qq|weibo等');
            $table->string('nickname')->comment('第三方昵称');
            $table->string('openid')->comment('第三方唯一ID');
            $table->integer('user_id')->default("0")->comment('外键，关联users表');
            $table->string('avatar')->comment('第三方头像');
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
        Schema::dropIfExists('user_binds');
    }
}
