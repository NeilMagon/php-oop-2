<?php
    require_once __DIR__ . '/Models/Category.php';
    require_once __DIR__ . '/Models/ProductType.php';
    require_once __DIR__ . '/Models/Product.php';
    require_once __DIR__ . '/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Online per Animali</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <div class="container">
        <?php foreach ($products as $product) { ?>
            <div class="card">
                <img src="<?php echo $product->getImageUrl(); ?>" alt="<?php echo $product->getName(); ?>">
                <h2><?php echo $product->getName(); ?></h2>
                <p>Prezzo: <?php echo $product->getPrice(); ?>€</p>
                <p>Categoria: <?php echo $product->getCategory()->getIcon() . ' ' . $product->getCategory()->getName(); ?></p>
                <p>Tipo: <?php echo $product->getProductType()->getName(); ?></p>
            </div>
        <?php } ?>
    </div>
</body>
</html>
