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
            $table->string('name')->nullable(false)->default("")->comment('公司名称');
            $table->string('full_name')->nullable(false)->default("")->comment('公司全称');
            $table->text('introduce')->nullable(false)->comment('公司简介-介绍');
            $table->tinyInteger('nature')->nullable(false)->default(0)->comment('公司性质');
            $table->tinyInteger('scale')->nullable(false)->default(0)->comment('公司规模');
            $table->json('welfare')->comment('公司福利');
            $table->json('logo')->nullable(true)->comment('公司logo图片');
            $table->string('url')->nullable(false)->default("")->comment('公司url地址');
            $table->string('address')->nullable(false)->default("")->comment('公司地址');
            $table->string('standby_address')->nullable(false)->default("")->comment('公司备用名称');
            $table->integer('contacts')->nullable(false)->default(0)->comment('公司联系人');
            $table->string('phone')->nullable(false)->default("")->comment('联系电话');
            $table->string('landline')->nullable(false)->default("")->comment('座机');
            $table->string('email')->nullable(false)->default("")->comment('邮箱地址');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
        \DB::statement("ALTER TABLE `company` comment '企业表'");
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
