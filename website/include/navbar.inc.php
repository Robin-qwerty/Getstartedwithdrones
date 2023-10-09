<div class="navbar">
    <div class="menu-icon" id="menuIcon">&#9776;</div>
        <ul>
            <li><a href="index.php?page=home">Home</a></li>
            <li><a href="index.php?page=articles">Articles</a></li>
            <li><a href="index.php?page=questioning_system">Get started with drones quiz</a></li>
            <li><a href="https://discord.gg/yKvbd7sEFR" target="_blank">Join the Discord server</a></li>
            <li><a href="index.php?page=login">Login</a></li>
        </ul>
    <div class="nav-logo">My cool logo here</div>
</div>
  
<script>
    // hamburger menu code
    const menuIcon = document.getElementById('menuIcon');
    const navbar = document.querySelector('.navbar');

    menuIcon.addEventListener('click', () => {
        navbar.classList.toggle('active');
        
        // Change menu icon based on active state
        if (navbar.classList.contains('active')) {
        menuIcon.innerHTML = '&#10005;'; // Close icon
        } else {
        menuIcon.innerHTML = '&#9776;'; // Hamburger icon
        }
    });
</script>