<?php

use \Illuminate\Database\Eloquent\Model;
class Bookmark extends Model{

  public function user() {
    return $this->belongsTo('User');
  }

  public function tag() {
    return $this->belongsToMany('Tag');
  }

  public function favicon() {
    return "//www.google.com/s2/favicons?domain=" . $this->url();
  }
	public function() {
    
  }
}