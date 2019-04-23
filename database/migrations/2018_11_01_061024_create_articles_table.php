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
            $table->integer('category_id')->default(0)->comment('所属分类id');
            $table->string('title')->default('')->comment('标题');
            $table->string('cover')->default('')->comment('封面图片');
            $table->mediumText('content')->comment('内容');
            $table->tinyInteger('status')->default(1)->comment('状态 启用：1 禁用：0');
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
