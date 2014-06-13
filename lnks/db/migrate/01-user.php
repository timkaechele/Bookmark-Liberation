<?php
use Illuminate\Database\Schema;

Schema::table('users', function($table)
{
  $table->increments('id');
  $table->string('username');
  $table->string('password');
  $table->string('email');
  $table->timestamps();
});