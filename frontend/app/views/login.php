<?php
// login.php - HTML template for login page
?>
<form action="/login" method="POST">
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Login</button>
</form>
<a href="/register">Don't have an account? Register here</a>
