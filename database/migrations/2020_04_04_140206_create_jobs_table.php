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
            $table->string('job_title')->comment('招聘标题');
            $table->string('department')->comment('招聘部门');
            $table->integer('number')->comment('招聘人数');
            $table->tinyInteger('education')->comment('学历要求1.不限2.初中及以下3.初中4.高中5.大专6.本科7.硕士8.博士9.研究生');
            $table->tinyInteger('work_experience')->comment('工作经验:1.不限2.应届毕业生皆可3.1年以下4.1~2年5.2~3年6.3~5年7.3年以上8.5年以上');
            $table->text('requirements')->comment('招聘要求');
            $table->tinyInteger('sex')->comment('性别要求:1.不限2.男3.女');
            $table->integer('min_age')->comment('最小年龄要求');
            $table->integer('max_age')->comment('最大年龄要求');
            $table->integer('manage_id')->comment('负责人');
            $table->integer('salary_above')->default(0)->comment('初始工资');
            $table->integer('salary_below')->default(0)->comment('结束工资');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->softDeletes();
        });
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
