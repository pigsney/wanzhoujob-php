<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobFairTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_fair', function (Blueprint $table) {
            $table->increments('id');
            $table->date('holding_time')->comment('举办时间');
            $table->string('title')->comment('招聘会标题');
            $table->string('host_unit')->comment('主办单位');
            $table->string('introduce')->comment('招聘会简介');
            $table->string('venue')->comment('举办地点');
            $table->string('telephone')->comment('联系电话');
            $table->tinyInteger('status')->default(1)->comment('状态:1.可预定2.暂停预定3.已预订4.结束');
            $table->string('image')->comment('招聘会图片');
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
        Schema::dropIfExists('job_fair');
    }
}
