<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog.images', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger( 'post_id' );
            $table->foreign( 'post_id' )->references( 'id' )->on( 'blog.posts' )->onDelete( 'cascade' );
            $table->string( 'filename', 255 );
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog.images');
    }
}
