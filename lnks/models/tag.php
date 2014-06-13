<?php

use \Illuminate\Database\Eloquent\Model;
class Tag extends Model{

  public function bookmarks(){
    return $this->belongsToMany('Bookmark');
  }

  public function packs() {
    return $this->hasMany('Pack');
  }

}