<?php

use \Illuminate\Database\Eloquent\Model;
class Pack extends Model{

  public function user(){
    return $this->belongsTo('User');
  }

  public function bookmarks() {
    return $this->hasMany('Bookmark');
  }

}