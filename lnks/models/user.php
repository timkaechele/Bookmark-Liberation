<?php

class User extends Eloquent{

  public function bookmarks(){
    $this->hasMany('Bookmark');
  }

  public function packs() {
    $this->hasMany('Pack');
  }

  public function gravatar() {
    return "//gravatar.com/avatar/" . md5($this->email());
  }

}