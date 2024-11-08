<?php
// UserModel.php - Handle user data (authentication, profile)
require_once '../app/config/database.php';

class UserModel {
    public function authenticate($username, $password) {
        $db = new Database();
        $stmt = $db->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
        $stmt->execute([':username' => $username, ':password' => password_hash($password, PASSWORD_DEFAULT)]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getUserById($userId) {
        $db = new Database();
        $stmt = $db->prepare("SELECT * FROM users WHERE id = :id");
        $stmt->execute([':id' => $userId]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function updateProfile($userId, $name, $email) {
        $db = new Database();
        $stmt = $db->prepare("UPDATE users SET name = :name, email = :email WHERE id = :id");
        return $stmt->execute([':name' => $name, ':email' => $email, ':id' => $userId]);
    }
}
?>
