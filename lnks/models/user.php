<?php

use \Illuminate\Database\Eloquent\Model;

class User extends Model{

  public function bookmarks(){
    return $this->hasMany('Bookmark');
  }

  public function packs() {
    return $this->hasMany('Pack');
  }

  public function gravatar() {
    return "//gravatar.com/avatar/" . md5($this->email());
  }

}