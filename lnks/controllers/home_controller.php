<?php

/*================================
  Home Controller
================================*/


/*--------------------------------
  Home Index Action
--------------------------------*/
$app->get('/', function() use($app){
  $app->render('home/index.php');
});

