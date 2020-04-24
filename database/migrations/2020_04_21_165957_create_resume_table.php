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
            $table->string('name')->nullable(false)->default("")->comment('姓名');
            $table->tinyInteger('sex')->nullable(false)->default(0)->comment('性别');
            $table->date('birthday')->nullable(false)->default(today()->toDateString())->comment('生日');
            $table->integer('high')->nullable(false)->default(0)->comment('身高');
            $table->tinyInteger('work_experience')->nullable(false)->default(0)->comment('工作经验');
            $table->string('political_outlook')->nullable(false)->default("")->comment('政治面貌');
            $table->tinyInteger('marital_status')->nullable(false)->default(0)->comment('婚姻状况');
            $table->string('native_place')->nullable(false)->default("")->comment('籍贯');
            $table->string('address')->nullable(false)->default("")->comment('现所在地');
            $table->string('phone')->nullable(false)->default(0)->comment('电话');
            $table->string('email')->nullable(false)->default("")->comment('邮箱');
            $table->string('introduce')->nullable(false)->default("")->comment('自我评价');
            $table->tinyInteger('job_status')->nullable(false)->default(0)->comment('在职状态');
            $table->tinyInteger('educational_level')->nullable(false)->default(0)->comment('学历');
            $table->json('photo')->comment('头像');
            $table->json('job_intention')->comment('求职意向');
            $table->json('work_history')->comment('工作经历');
            $table->tinyInteger('educational_type')->nullable(false)->default(0)->comment('教育背景/技能培训');
            $table->json('educational_background')->comment('教育背景');
            $table->json('language_ability')->comment('语言能力');
            $table->json('skill_expertise')->comment('技能专长');
            $table->json('project_history')->comment('项目经历');
            $table->json('certificate')->comment('证书');
            $table->json('other_information')->comment('其他信息');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
        \DB::statement("ALTER TABLE `resume` comment '简历表'");
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
