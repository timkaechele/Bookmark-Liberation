<?php

class Tag extends Eloquent{

  public function bookmarks(){
    $this->belongsToMany('Bookmark');
  }

  public function packs() {
    $this->hasMany('Pack');
  }

}