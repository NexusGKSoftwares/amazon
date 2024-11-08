<?php
// ProductController.php - Fetch and display products, handle search and filters
require_once '../app/models/ProductModel.php';

class ProductController {
    public function showHome() {
        $productModel = new ProductModel();
        $products = $productModel->getAllProducts();  // Fetch all products
        require_once '../app/views/home.php';  // Show home page with products
    }

    public function showProduct($productId) {
        $productModel = new ProductModel();
        $product = $productModel->getProductById($productId);  // Fetch product details
        require_once '../app/views/product_details.php';  // Show product details page
    }

    public function searchProducts($query) {
        $productModel = new ProductModel();
        $products = $productModel->searchProducts($query);  // Search products
        require_once '../app/views/search.php';  // Show search results page
    }
}
?>
