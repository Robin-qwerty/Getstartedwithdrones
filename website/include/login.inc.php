<div class="login">
    <h1>User Login</h1>
    <form action="php/login.php" method="post">
        <label for="email">Email *</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Password *</label>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Login">
    </form>
    <div class="register-container">
        <p>No account yet?</p>
        <a href="index.php?page=registration" class="register-button">Register</a>
    </div>
</div>
