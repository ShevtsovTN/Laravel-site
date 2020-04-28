<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('blog_id_en')->unique()->index();
            $table->unsignedInteger('blog_id_es')->unique()->index();
            $table->unsignedInteger('blog_id_ru')->unique()->index();
            $table->integer('comment_id');
            $table->foreign('blog_id_en')->references('id')->on('blogs_en')->onDelete('cascade');
            $table->foreign('blog_id_es')->references('id')->on('blogs_es')->onDelete('cascade');
            $table->foreign('blog_id_ru')->references('id')->on('blogs_ru')->onDelete('cascade');
            $table->text('title');
            $table->string('text', 300);
            $table->integer('like');
            $table->integer('dislike');
            $table->string('author');
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
        Schema::dropIfExists('comments');
    }
}
