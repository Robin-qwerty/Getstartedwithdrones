<div class="navbar">
    <div class="menu-icon" id="menuIcon">&#9776;</div>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="questioning_system_test.html">Get started with drones quiz?</a></li>
            <li><a href="article_test.html">Articles</a></li>
            <li><a href="https://discord.gg/yKvbd7sEFR">Discord server</a></li>
        </ul>
    <div class="nav-logo">Your Logo</div>
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