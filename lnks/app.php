<?php

$app->group('/api/v1', function() use($app) {
  $app->group('/bookmarks', function() use($app) {
      
    $app->get('/', function() use ($app) {

    });
    $app->get('/:id', function($id) use($app) {
      $data = Array(
        'bookmark' => Array(
          'id'					=> 1,
          'title'				=> 'Dribbble',
          'description' => 'A designers nightmare',
          'note'			 	=> null,
          'url'				 	=> 'http://dribbble.com',
          'type'			 	=> 'link',
          'thumb_url'  	=> '//www.google.com/s2/favicons?domain=dribbble.com',
          'image_url'  	=> null,
          'video_url'	 	=> null,
          'public'     	=> false,
          'created_at' 	=> Time(),
          'updated_at' 	=> Time(),
        ),
        'user' => Array(
        	'username' => 'TimKaechele',
          'email'		 => 'TimKaechele@me.com',
					'gravatar' => ''
        )
      );
			# Configure Response
      $app->response->setStatus(200);
      $app->response->headers->set('Content-Type', 'application/json');
      $app->response->write(json_encode($data));
    });
	});
});