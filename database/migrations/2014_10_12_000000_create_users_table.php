<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique();
            $table->string('password');
            $table->string('phone')->unique();
            $table->string('avatar');
            $table->string('ip');
            $table->string('address')->nullable();
            $table->string('status')->default('true');
            $table->string('introduction')->nullable()->comment('个人介绍');
            $table->integer('article_count')->default(0)->comment('文章');
            $table->integer('follow_count')->default(0)->comment('关注');
            $table->integer('fans')->default(0)->comment('粉丝');
            $table->integer('notification_count')->unsigned()->default(0)->comment('通知');
            $table->string('api_token',64)->unique();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
