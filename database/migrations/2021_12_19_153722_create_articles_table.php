<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table -> string('name');
            $table -> string('link');
            $table -> string('description');
            $table -> text('tags');
            $table -> text('text');
            $table -> text('category');
            $table -> string('foto');
            $table -> integer('visible');
            $table -> integer('popular');
            $table -> timestamp('date_old_comment');
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
