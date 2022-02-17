<?php

require_once __DIR__ . '/database/databaseDiscs.php';
require_once __DIR__ . '/functions/utilities.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- ----FONTAWESOME---- -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- ---- CSS ---- -->
    <link rel="stylesheet" href="./css/style.css">
    </head>

    <header>
    <i class="fab fa-spotify"></i>
    <div class="filter">
      <?php filteredBy($discs, 'genre'); ?>
    </div>
  </header>

  <main>
    <?php foreach ($discs as $disc) { ?>
  <div class="disc-cover">
    <div>
      <?php foreach ($disc as $key => $value) { ?>
        <img src="<?php importFromApi ($key, $value, 'poster')?>" />
        <h2><?php importFromApi ($key, $value, 'title') ?></h2>
    </div>
        
    <div>
      <p><?php importFromApi ($key, $value, 'author') ?></p>
      <p><?php importFromApi ($key, $value, 'year') ?></p>
      <?php } ?>
    </div>
  </div>

      <?php } ?>
  </main>

<body>
    
</body>
</html>