<?php if(!isset($pageTitle) || empty($pageTitle)){
  $pageTitle = 'defaultTitle';
}

if(!isset($pageImg) || empty($pageImg)){
  $pageImg = 'pexels-burak-the-weekender-735869.jpg';
} ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./styles/simple.css" />
    <link rel="stylesheet" href="./styles/custom.css" />
    <title><?php echo $pageTitle; ?></title>
  </head>
  <body>
    <header
      class="header-with-background"
      style="background-image: url('images/<?php echo $pageImg; ?>')"
    >
      <h1 style="color: black;">Culinary Cove</h1>
      <p style="color: black;">Your sanctuary for exceptional flavors</p>
      <nav>
        <a <?php if($pageTitle === 'Our Mission') : ?> class="active" <?php endif; ?> style="color: black;" href="our-mission.php">Our mission</a>
        <a <?php if($pageTitle === 'Ingredients') : ?> class="active" <?php endif; ?> style="color: black;" href="ingredients.php">Ingredients</a>
        <a <?php if($pageTitle === 'Menu') : ?> class="active" <?php endif; ?> style="color: black;" href="menu.php">Menu</a>
      </nav>
    </header>

    <main>