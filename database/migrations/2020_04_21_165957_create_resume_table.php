<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResumeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resume', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->comment('姓名');
            $table->tinyInteger('sex')->comment('性别');
            $table->date('birthday')->comment('生日');
            $table->integer('high')->comment('身高');
            $table->tinyInteger('work_experience')->comment('工作经验');
            $table->string('political_outlook')->comment('政治面貌');
            $table->tinyInteger('marital_status')->comment('婚姻状况');
            $table->string('native_place')->comment('籍贯');
            $table->string('address')->comment('现所在地');
            $table->string('phone')->comment('电话');
            $table->string('email')->comment('邮箱');
            $table->string('introduce')->comment('自我评价');
            $table->tinyInteger('job_status')->comment('在职状态');
            $table->tinyInteger('educational_level')->comment('学历');
            $table->string('photo')->comment('头像');
            $table->json('job_intention')->comment('求职意向');
            $table->json('work_history')->comment('工作经历');
            $table->json('educational_background')->comment('教育背景');
            $table->json('language_ability')->comment('语言能力');
            $table->json('skill_expertise')->comment('技能专长');
            $table->json('product_history')->comment('项目经历');
            $table->json('certificate')->comment('证书');
            $table->json('other_information')->comment('其他信息');
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
        Schema::dropIfExists('resume');
    }
}
