<?php

class Bookmark extends Eloquent{

  public function user() {
    $this->belongsTo('User');
  }

  public function pack() {
    $this->belongsTo('Pack');
  }

  public function tag() {
    $this->belongsToMany('Tag');
  }

  public function favicon() {
    return "//www.google.com/s2/favicons?domain=" . $this->url();
  }

}