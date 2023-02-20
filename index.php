<?
require_once __DIR__ . '/models/Product.php';
require_once __DIR__ . '/models/Category.php';
require_once __DIR__ . '/models/Toy.php';
require_once __DIR__ . '/models/Food.php';
require_once __DIR__ . '/models/Basket.php';
$Dog = new Category('Dog');
$Cat = new Category('Cat');
$Friskee = new Food('Friskies', 12, "https://frescomarketonline.it/extimages/large/A0000377558_L.jpg", $Dog, 'meat', 30, 'food', 'Big');
$Felix = new Food('Felix', 5, "https://shop-cdn-m.mediazs.com/bilder/felix/party/mix/snack/per/gatti/6/800/52416_pla_felix_knabbermix_original_6.jpg", $Cat, 'fish', 5, 'food', 'small');
$frisbee = new Toy('Frisbee', 6, 'https://www.brekz.it/4417/dog-o-soar-frisbee-per-cane.jpg', $Dog, 'rubber', 'Toy', 'small');
$cuccia = new Basket('Cuccia Cane', 18, 'https://m.media-amazon.com/images/I/A1Hy-EwvScL._AC_SX425_.jpg', $Dog, 'brown',  'bed', 'medium');
$cut = new Basket('Tira Graffi', 18, 'https://cdn.manomano.com/images/images_products/3648093/P/20110876_1.jpg', $Cat, 'red', 'bed', 'big');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="style.css">
    <title>Shop</title>
</head>

<body>
    <div class="container">
        <div class="row d-flex flex-wrap">
            <div class="col-4 my-4">
                <div class="card">
                    <h1><?= $Friskee->name ?></h1>
                    <div class="cont-img">
                        <img src="<?= $Friskee->img ?>" style=" max-height:8rem;" alt="<?= $Friskee->name ?>">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Prodoct for:<?= $Friskee->category->animal ?></h5>
                        <p class="card-text">Price:<?= $Friskee->price ?>$</p>
                        <p>Product Type:<?= $Friskee->type ?></p>
                    </div>
                </div>
            </div>
            <div class="col-4 my-4">
                <div class="card">
                    <h1><?= $Felix->name ?></h1>
                    <div class="cont-img">
                        <img src="<?= $Felix->img ?>" style=" max-height:8rem;" alt="<?= $Felix->name ?>">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Prodoct for:<?= $Felix->category->animal ?></h5>
                        <p class="card-text">Price:<?= $Felix->price ?>$</p>
                        <p>Product Type:<?= $Felix->type ?></p>
                    </div>
                </div>
            </div>
            <div class="col-4 my-4">
                <div class="card">
                    <h1><?= $frisbee->name ?></h1>
                    <div class="cont-img">
                        <img src="<?= $frisbee->img ?>" style=" max-height:8rem;" alt="<?= $frisbee->name ?>">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Prodoct for:<?= $frisbee->category->animal ?></h5>
                        <p class="card-text">Price:<?= $frisbee->price ?>$</p>
                        <p>Product Type:<?= $frisbee->type ?></p>
                    </div>
                </div>
            </div>
            <div class="col-4 my-4">
                <div class="card">
                    <h1><?= $cuccia->name ?></h1>
                    <div class="cont-img">
                        <img src="<?= $cuccia->img ?>" style=" max-height:8rem;" alt="<?= $cuccia->name ?>">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Prodoct for:<?= $cuccia->category->animal ?></h5>
                        <p class="card-text">Price:<?= $cuccia->price ?>$</p>
                        <p>Product Type:<?= $cuccia->type ?></p>
                    </div>
                </div>
            </div>
            <div class="col-4 my-4">
                <div class="card">
                    <h1><?= $cut->name ?></h1>
                    <div class="cont-img">
                        <img src="<?= $cut->img ?>" style=" max-height:8rem;" alt="<?= $cut->name ?>">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Prodoct for:<?= $cut->category->animal ?></h5>
                        <p class="card-text">Price:<?= $cut->price ?>$</p>
                        <p>Product Type:<?= $cut->type ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>