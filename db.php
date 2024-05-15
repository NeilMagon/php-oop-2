<?php
    require_once __DIR__ . '/Models/Category.php';
    require_once __DIR__ . '/Models/ProductType.php';
    require_once __DIR__ . '/Models/Product.php';

    $categoryDog = new Category("Cani", "🐶");
    $categoryCat = new Category("Gatti", "🐱");

    $foodType = new ProductType("Cibo");
    $toyType = new ProductType("Gioco");
    $bedType = new ProductType("Cuccia");

    $product1 = new Product(1, "Cibo per Cani", 10.99, "https://example.com/dog_food.jpg", $categoryDog, $foodType);
    $product2 = new Product(2, "Cibo per Gatti", 5.99, "https://example.com/cat_toy.jpg", $categoryCat, $foodType);
        
    $product3 = new Product(3, "Pallina per Gatti", 3.99, "https://example.com/cat_ball.jpg", $categoryCat, $toyType);
    $product4 = new Product(4, "Osso per Cani", 5.99, "https://example.com/dog_bone.jpg", $categoryDog, $toyType);

    $product5 = new Product(5, "Cuccia per Cani", 29.99, "https://example.com/dog_bed.jpg", $categoryDog, $bedType);
    $product6 = new Product(6, "Cuccia per Gatti", 19.99, "https://example.com/cat_bed.jpg", $categoryCat, $bedType);

    $products = [
        $product1, 
        $product2, 
        $product3, 
        $product4, 
        $product5, 
        $product6
    ];
?>
