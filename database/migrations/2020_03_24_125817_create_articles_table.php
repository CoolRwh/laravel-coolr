<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title',50)->comment('文章标题');
            $table->string('titlepic')->comment('文章缩略图');
            $table->text('content')->comment('文章类容');
            $table->integer('sharenum')->default(0)->comment('被分享次数');
            $table->integer('type')->default(0)->comment('0：图文|1：视频');
            $table->integer('isopen')->default(1)->comment('隐私状态：1开放，0仅自己可见');
            $table->timestamps();
            $table->integer('user_id')->comment('文章作者');
            $table->integer('cate_id')->comment('栏目id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
