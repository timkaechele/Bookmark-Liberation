<?php

use Illuminate\Database\Capsule\Manager as Capsule;

# establish db connection
$capsule = new Capsule;
$capsule->addConnection(array(
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'lnks',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => ''
));

$capsule->bootEloquent();



# initialize an app instance
$app = new \Slim\Slim(array(
  'templates.path' => __DIR__ . '/views'
  ));


# require controllers in the right order
require __DIR__ . '/controllers/api/v1/packs_controller.php';
require __DIR__ . '/controllers/api/v1/subscriptions_controller.php';
require __DIR__ . '/controllers/api/v1/tags_controller.php';
require __DIR__ . '/controllers/api/v1/users_controller.php';
require __DIR__ . '/controllers/api/v1/bookmarks_controller.php';
require __DIR__ . '/controllers/home_controller.php';

$app->run();