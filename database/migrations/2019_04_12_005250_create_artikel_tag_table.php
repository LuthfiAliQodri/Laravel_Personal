<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtikelTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_tags', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->integer('blog_id')->unsigned();
            $table->foreign('blog_id')->refrences('id')->on('blogs')->onDelete('cascade');
            
            $table->integer('tag_id')->unsigned();
            $table->foreign('tag_id')->refrences('id')->on('tags')->onDelete('cascade');

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
        Schema::dropIfExists('artikel_tag');
    }
}
