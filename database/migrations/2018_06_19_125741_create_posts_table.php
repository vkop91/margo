<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up ()
    {
        Schema::create( 'blog.posts', function ( Blueprint $table ) {
            $table->increments( 'id' );
            $table->unsignedInteger( 'author_id' );
            $table->foreign( 'author_id' )->references( 'id' )->on( 'users' )->onDelete( 'cascade' );
            $table->string( 'title', 255 );
            $table->string( 'preview', 511 );
            $table->text( 'body' );
            $table->boolean( 'is_show' );
            $table->float( 'avg_rating' );
            $table->unsignedInteger( 'num_rates' );
            $table->timestamps();
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down ()
    {
        Schema::dropIfExists( 'blog.posts' );
    }
}
