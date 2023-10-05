<div class="registration">
    <h1>User Registration</h1>
    <form action="php/register.php" method="post" enctype="multipart/form-data">
        <label for="username">Username *</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="email">E-mail *</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Wachtwoord *</label>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Registreren">
        <div class="register-container">
            <p>Already have an account?</p>
            <a href="index.php?page=login" class="register-button">Login</a>
        </div>
    </form>
</div>