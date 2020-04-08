<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->comment('公司名称');
            $table->string('full_name')->comment('公司全称');
            $table->string('introduce')->comment('公司简介-介绍');
            $table->tinyInteger('nature')->comment('公司性质');
            $table->tinyInteger('scale')->comment('公司规模');
            $table->json('welfare')->comment('公司福利');
            $table->string('logo')->comment('公司logo图片');
            $table->string('url')->comment('公司url地址');
            $table->string('address')->comment('公司地址');
            $table->string('standby_address')->comment('公司备用名称');
            $table->integer('contacts')->comment('公司联系人');
            $table->string('phone')->comment('联系电话');
            $table->string('landline')->comment('座机');
            $table->string('email')->comment('邮箱地址');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company');
    }
}
