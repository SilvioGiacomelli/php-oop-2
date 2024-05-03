<?php
require_once __DIR__ . '/model/Food.php';
require_once __DIR__ . '/model/Toys.php';
require_once __DIR__ . '/model/Products.php';
require_once __DIR__ . '/data/db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <title>Document</title>

</head>

<body>
  <div class="container">
    <h1>BOOLEAN PLANET</h1>
  </div>

  <div class="container">
    <h2>Foods</h2>
    <div class="row">
      <?php foreach ($foods as $food) : ?>
        <div class="col">
          <div class="card" style="width: 18rem;">
            <img src="<?php echo $food->getImg(); ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?php echo $food->getName(); ?></h5>
              <p class="card-text"><?php echo $food->getPrice(); ?></p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

  <div class="container">
    <h2>Toys</h2>
    <div class="row">
      <?php foreach ($toys as $toy) : ?>
        <div class="col">
          <div class="card" style="width: 18rem;">
            <img src="<?php echo $toy->getImg(); ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?php echo $toy->getName(); ?></h5>
              <p class="card-text"><?php echo $toy->getPrice(); ?></p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

</body>

</html>