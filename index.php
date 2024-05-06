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
              <h6 class="card-subtitle mb-2 text-muted"><?php echo $food->getCategory(); ?></h6>
              <p class="card-text"><?php echo $food->getPrice(); ?></p>
              <p class="card-text"><?php echo $food->getWeight(); ?></p>
              <p class="card-text"><?php echo $food->getExpirationDate(); ?></p>
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
              <h6 class="card-subtitle mb-2 text-muted"><?php echo $food->getCategory(); ?></h6>
              <p class="card-text"><?php echo $toy->getPrice(); ?></p>
              <p class="card-text"><?php echo $toy->getSize(); ?></p>
              <p class="card-text"><?php echo $toy->getMaterial(); ?></p>
              <p class="card-text"><?php echo $toy->getDiscount(); ?></p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

</body>

</html>

<style>
  .container {
    margin-top: 20px;
  }

  .card {
    margin-bottom: 20px;
  }

  h1 {
    text-align: center;
  }

  h2 {
    text-align: center;
    font-weight: 700;
    padding-bottom: 30px;
  }

  img {
    width: 100%;
    height: 200px;
    object-fit: cover;
  }

  .card-title {
    text-align: center;
  }

  .card-subtitle {
    text-align: center;
  }

  .card-text {
    text-align: center;
  }

  .card-body {
    text-align: center;
  }

  .row {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
  }

  body {
    background-color: yellow;
  }

  .card {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  }

  .card-title {
    font-size: 1.5rem;
    font-weight: 700;
  }

  .card-subtitle {
    font-size: 1rem;
    font-weight: 400;
  }

  .card-text {
    font-size: 1rem;
    font-weight: 400;
  }

  .card-body {
    padding: 20px;
  }

  .card-img-top {
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
  }

  .card-body {
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
  }

  .card:hover {
    transform: translateY(-5px);
    transition: 0.3s;
  }

  .card:hover .card-img-top {
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
  }

  .card:hover .card-body {
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
  }

  .card:hover .card-img-top {
    filter: brightness(0.8);
  }

  .card:hover .card-body {
    background-color: #f8f9fa;
  }

  .card:hover .card-title {
    color: #000;
  }

  .card:hover .card-subtitle {
    color: #000;
  }

  .card:hover .card-text {
    color: #000;
  }

  .card:hover .card-body {
    color: #000;
  }
</style>