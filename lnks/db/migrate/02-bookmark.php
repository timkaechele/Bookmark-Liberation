<?php

use Illuminate\Database\Schema;

Schema::table('bookmarks', function($table)
{
  $table->increments('id');
  $table->foreign('user_id')->references('id')->on('users');
  $table->string('image_path');
  $table->string('title');
  $table->text('description');
  $table->text('note');
  $table->text('url');
  $table->boolean('public')->default(false);
  $table->timestamps();

});