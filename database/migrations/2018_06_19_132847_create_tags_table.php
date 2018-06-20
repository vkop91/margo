<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog.tags', function (Blueprint $table) {
            $table->increments('id');
            $table->string( 'name', 255 );
            $table->boolean( 'is_show' )->default( TRUE );
        });
        // ManyToMany relation
        Schema::create('blog.post_tag', function (Blueprint $table) {
            $table->unsignedInteger( 'post_id' );
            $table->foreign( 'post_id' )->references( 'id' )->on( 'blog.posts' )->onDelete( 'cascade' );
            $table->unsignedInteger( 'tag_id' );
            $table->foreign( 'tag_id' )->references( 'id' )->on( 'blog.tags' )->onDelete( 'cascade' );
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog.post_tag');
        Schema::dropIfExists('blog.tags');
    }
}
