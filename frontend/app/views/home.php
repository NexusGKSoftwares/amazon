<?php
// home.php - HTML template for the home page
?>
<h1>Welcome to Our Shop</h1>
<div class="products">
    <?php foreach ($products as $product): ?>
        <div class="product-card">
            <img src="<?= $product['image_url'] ?>" alt="<?= $product['name'] ?>">
            <h3><?= $product['name'] ?></h3>
            <p><?= $product['description'] ?></p>
            <p>$<?= $product['price'] ?></p>
            <a href="/product/<?= $product['id'] ?>">View Product</a>
        </div>
    <?php endforeach; ?>
</div>
