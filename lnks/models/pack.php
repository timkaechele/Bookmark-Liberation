<?php

class Pack extends Eloquent{

  public function user(){
    $this->belongsTo('User');
  }

  public function bookmarks() {
    $this->hasMany('Bookmark');
  }

}