<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyJobMapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_job_maps', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_id');
            $table->integer('job_id')->unique()->nullable(false)->default(0)->comment('岗位id');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->softDeletes();
        });
        \DB::statement("ALTER TABLE `company_job_maps` comment '企业—岗位关系表'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company_job_maps');
    }
}
