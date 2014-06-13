<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>lnks</title>
  <link rel="stylesheet" href="<?php echo stylesheet_path('css/app.min.css') ?>">
  <script type="text/javascript" src="<?php echo javascript_path('js/app.min.js') ?>"></script>
</head>
<body>
  <?php foreach($templates as $template): ?>
    <script type="text/x-handlebars" id="<?php echo $template->id() ?>">
      <?php echo $template->content() ?>
    </script>  
  <?php endforeach ?>
</body>
</html>
