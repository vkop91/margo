<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog.comments', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger( 'author_id' );
            $table->foreign( 'author_id' )->references( 'id' )->on( 'users' )->onDelete( 'cascade' );
            $table->unsignedInteger( 'post_id' );
            $table->foreign( 'post_id' )->references( 'id' )->on( 'blog.posts' )->onDelete( 'cascade' );
            $table->unsignedInteger( 'parent_id' )->nullable( TRUE );
            $table->string( 'caption', 255 );
            $table->text( 'text' );
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
        Schema::dropIfExists('blog.comments');
    }
}
