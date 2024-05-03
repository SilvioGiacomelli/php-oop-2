<?php
require __DIR__ . '/model/Products.php';
require __DIR__ . '/model/Food.php';
require __DIR__ . '/model/Toy.php';

$products = [
  new Food('Croccantini', 10, 'https://www.petpassion.tv/wp-content/uploads/2021/06/croccantini-per-cani.jpg', 'Cani', '1kg', '2023-12-31'),
  new Food('Scatolette', 5, 'https://www.petpassion.tv/wp-content/uploads/2021/06/croccantini-per-cani.jpg', 'Cani', '100g', '2023-12-31'),
  new Toy('Pallina', 3, 'https://www.petpassion.tv/wp-content/uploads/2021/06/croccantini-per-cani.jpg', 'Cani', 'small', 'plastic'),
  new Toy('Osso', 5, 'https://www.petpassion.tv/wp-content/uploads/2021/06/croccantini-per-cani.jpg', 'Cani', 'medium', 'rubber'),
  new Food('Croccantini', 10, 'https://www.petpassion.tv/wp-content/uploads/2021/06/croccantini-per-cani.jpg', 'Gatti', '1kg', '2023-12-31'),
  new Food('Scatolette', 5, 'https://www.petpassion.tv/wp-content/uploads/2021/06/croccantini-per-cani.jpg', 'Gatti', '100g', '2023-12-31'),
  new Toy('Pallina', 3, 'https://www.petpassion.tv/wp-content/uploads/2021/06/croccantini-per-cani.jpg', 'Gatti', 'small', 'plastic'),
  new Toy('Osso', 5, 'https://www.petpassion.tv/wp-content/uploads/2021/06/croccantini-per-cani.jpg', 'Gatti', 'medium', 'rubber'),
];
