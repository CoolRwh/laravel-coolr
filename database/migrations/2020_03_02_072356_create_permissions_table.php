<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('per_name')->comment('规则名称');
            $table->string('per_url')->comment('规则地址');
            $table->string('url')->comment('跳转地址url');
            $table->integer('pid')->default('0')->comment('所属规则|0:一级规则|默认一级');
            $table->integer('show')->default('0')->comment('是否设置为菜单|0:不显示|1:显示');
            $table->string('model')->comment('所属模型|Admin|WeiXin等');
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
        Schema::dropIfExists('permissions');
    }
}
