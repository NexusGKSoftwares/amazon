<?php
// ProductModel.php - Handle product-related queries
require_once '../app/config/database.php';

class ProductModel {
    public function getAllProducts() {
        $db = new Database();
        $stmt = $db->prepare("SELECT * FROM products");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getProductById($productId) {
        $db = new Database();
        $stmt = $db->prepare("SELECT * FROM products WHERE id = :id");
        $stmt->execute([':id' => $productId]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function searchProducts($query) {
        $db = new Database();
        $stmt = $db->prepare("SELECT * FROM products WHERE name LIKE :query");
        $stmt->execute([':query' => '%' . $query . '%']);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
