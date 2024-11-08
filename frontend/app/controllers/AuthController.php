<?php
// AuthController.php - Handle login, registration, and logout
require_once '../app/models/UserModel.php';

class AuthController {
    public function showLogin() {
        require_once '../app/views/login.php';  // Show login page
    }

    public function showRegister() {
        require_once '../app/views/register.php';  // Show register page
    }

    public function login($username, $password) {
        $userModel = new UserModel();
        $user = $userModel->authenticate($username, $password);
        if ($user) {
            $_SESSION['user'] = $user;  // Store user in session
            header('Location: /home');
        } else {
            echo 'Invalid credentials';
        }
    }

    public function logout() {
        session_destroy();  // Destroy session on logout
        header('Location: /login');
    }
}
?>
