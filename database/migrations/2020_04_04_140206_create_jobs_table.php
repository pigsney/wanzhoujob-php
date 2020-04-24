<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            $table->increments('id');
            $table->string('job_title')->nullable(false)->default("")->comment('招聘标题');
            $table->string('department')->nullable(false)->default("")->comment('招聘部门');
            $table->integer('number')->nullable(false)->default(0)->comment('招聘人数');
            $table->tinyInteger('education')->nullable(false)->default(0)->comment('学历要求');
            $table->tinyInteger('work_experience')->nullable(false)->default(0)->comment('工作经验');
            $table->text('requirements')->comment('招聘要求');
            $table->tinyInteger('sex')->nullable(false)->default(0)->comment('性别要求');
            $table->integer('min_age')->nullable(false)->default(0)->comment('最小年龄要求');
            $table->integer('max_age')->nullable(false)->default(0)->comment('最大年龄要求');
            $table->integer('manage_id')->nullable(false)->default(0)->comment('负责人');
            $table->integer('salary_above')->nullable(false)->default(0)->comment('初始工资');
            $table->integer('salary_below')->nullable(false)->default(0)->comment('结束工资');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->softDeletes();
        });
        \DB::statement("ALTER TABLE `jobs` comment '岗位表'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
