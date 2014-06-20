<?php

require __DIR__ . '/vendor/autoload.php';


// ===============================================
// 
// Model Setup
// 
// ===============================================
class User extends Eloquent {
  public function bookmarks() {
    return $this->hasMany('Bookmark');
  }
}

class Bookmark extends Eloquent {
  public function user() {
    return $this->belongsTo('User');
  }
}

class Tag extends Eloquent {
  public function bookmark() {
    return $this->belongsToMany('Bookmark');
  }
}

// ===============================================
// 
// Helper Setup
// 
// ===============================================


// ===============================================
// 
// Routing Logic
// 
// ===============================================
$app = new \Slim\Slim();

$app->group('/api/v1', function() use($app) {
  
  // Bookmark API Section  
  $app->get('/bookmarks', function() use($app) {
    
  });
  $app->get('/bookmarks/:id', function($id) use($app) {
    
  });
  $app->put('/bookmarks/:id', function($id) use($app) {
    
  });
  $app->post('/bookmarks', function() use($app) {
    
  });
  $app->delete('/bookmarks/:id', function($id) use($app){
    
  });

  // Tag API Section
  $app->get('/tags', function() use($app) {
    
  });
  $app->get('/tags/:id', function($id) use($app) {
    
  });
  $app->put('/tags/:id', function($id) use($app) {
    
  });
  $app->post('/tags', function() use($app) {
    
  });
  $app->delete('/tags/:id', function($id) use($app){
    
  });
  

});

$app->get('/', function() use($app) {
  
});

$app->get('/s/:id', function($id) use($app){
  
});

// run the app
$app->run();