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

  public function scopePublic($query) {
		return $query->where('public', '=', true);
  }

  // query bookmarks by user without complex join 
	public function scopeUser($query, $user) {
    return $query->where('user_id', '=', $user->id);
  }
	
  public function favicon() {
    return "//www.google.com/s2/favicons?domain=" . $this->url();
  }
}

class Tag extends Eloquent {

  public function bookmark() {
    return $this->belongsToMany('Bookmark');
  }
	public function scopeUser($query, $user) {
    return $query->where('user_id', '=', $user->id);
  }
}

// ===============================================
// 
// Helper Setup
// 
// ===============================================
class HealthCheck {

  public static function run() {
    self::is_db_writable()
  }
	public static function is_db_writable(){
    // check if db is writable
  }
}


// ===============================================
// 
// Routing Logic
// 
// ===============================================
$app = new \Slim\Slim();

$app->hook('slim.before', function() use($app) {
	// run Healthcheck
});

$app->group('/api/v1', function() use($app) {
  
  // Bookmark API Section  
  $app->get('/bookmarks', function() use($app) {
    $bookmarks = Bookmark::all();
		$app->headers->set('Content-Type', 'application/json');
  });
  $app->get('/bookmarks/:id', function($id) use($app) {
		$bookmark = Bookmark::find($id);
  });
  $app->post('/bookmarks', function() use($app) {
		$bookmark;
  });
  $app->put('/bookmarks/:id', function($id) use($app) {
    $bookmark = Bookmark::find($id)
  });
  $app->delete('/bookmarks/:id', function($id) use($app){
    $bookmark = Bookmark::find($id);
  });

  // Tag API Section
  $app->get('/tags', function() use($app) {
    $tags = Tag::all();
    $app->response->setBody($tags);
  });
  $app->get('/tags/:id', function($id) use($app) {
    $tag = Tag::find($id);
  });
  $app->put('/tags/:id', function($id) use($app) {
    $tag = Tag::find($id);
    $app->response->setBody($tag);
    
  });
  $app->post('/tags', function() use($app) {
    $params = Array();
    $tag 		= new Tag();
    // if success
    $app->response->setStatus(201);
    $app->response->headers->set('Content-Type', 'application/json');
    $app->response->setBody($tag);
  });
  $app->delete('/tags/:id', function($id) use($app){
    $tag = Tag::find($id);
    $app->response->setStatus(204);
  });
  

});

// Homepage
$app->get('/', function() use($app) {
  $app->render('home.php');
});

// Public Bookmark
$app->get('/s/:id', function($id) use($app){
	$bookmark = Bookmark::public()->find($id);
  if($bookmark) {
    // redirect to url
  } else {
  	$app->notFound();  
  }
  
});

// run the app
$app->run();