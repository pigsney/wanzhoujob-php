<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobResumeMapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_resume_maps', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('job_id')->nullable(false)->default(0)->comment('岗位id');
            $table->integer('resume_id')->nullable(false)->default(0)->comment('简历id');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->softDeletes();
        });
        \DB::statement("ALTER TABLE `job_resume_maps` comment '岗位-简历关系表'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_resume_maps');
    }
}
