<?
include_once __DIR__ . '/models/Product.php';
include_once __DIR__ . '/models/Category.php';
$Dog = new Category('Dog');
$Cat = new Category('Cat');
$Friskee = new Product('Friskee', 12, 'www.', $Dog, 'cibo');
$felix = new Product('Felix', 6, 'www.', $Cat, 'cibo');
