<?php

# This is the bootstrap file
# it loads all dependencies

# initialize an app instance
$app = new \Slim\Slim(array(
  'templates.path' => __DIR__ . '/views'
  ));


# require controllers in the right order
require __DIR__ . '/app.php';

$app->run();