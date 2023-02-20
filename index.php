<?
require_once __DIR__ . '/models/Product.php';
require_once __DIR__ . '/models/Category.php';
require_once __DIR__ . '/models/Toy.php';
require_once __DIR__ . '/models/Food.php';
require_once __DIR__ . '/models/Basket.php';
$Dog = new Category('Dog');
$Cat = new Category('Cat');
$Friskee = new Food('Friskee', 12, 'www.', $Dog, 'meat', 30, 'food', 'Big');
$frisbee = new Toy('Blu Frisbee', 6, 'www.', $Dog, 'plastic', 'Toy', 'small');
$cuccia = new Basket('Cuccia Cane', 18, 'www.', $Dog, 'red',  'bed', 'medium');


echo $cuccia->InfoProduct();
