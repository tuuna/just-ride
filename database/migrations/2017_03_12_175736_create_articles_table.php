<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('author');
            $table->text('content');
            $table->string('pic',60)->default('/images/default.png');
            $table->integer('click_count')->default(1);
            $table->integer('favor_count')->default(0);
            $table->integer('user_id')->default(0)->comment('user_id为0时是管理员生成的文章');
            $table->integer('cate_id')->unsigned();
            $table->string('is_hidden',8)->default('F');
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
        Schema::dropIfExists('articles');
    }
}
