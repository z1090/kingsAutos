<div class="navbar">
    <div class="navbar__container">
        <nav class="navbar__nav" >
            <a class="navbar__link <?php if(basename($_SERVER['SCRIPT_NAME']) == 'index.php'){echo 'navbar__link--active'; }else { echo ''; } ?>" href="/">Home</a>
            <a class="navbar__link <?php if(basename($_SERVER['SCRIPT_NAME']) == 'services.php'){echo 'navbar__link--active'; }else { echo ''; } ?>" href="./services.php">Services</a>
            <a class="navbar__link <?php if(basename($_SERVER['SCRIPT_NAME']) == 'mot.php'){echo 'navbar__link--active'; }else { echo ''; } ?>" href="./mot.php">MOTs</a>
            <a class="navbar__link <?php if(basename($_SERVER['SCRIPT_NAME']) == 'contact.php'){echo 'navbar__link--active'; }else { echo ''; } ?>" href="./contact.php">Contact Us</a>
            <span class="navbar__spacer"></span>
        </nav>
        <figure class="navbar__logo" >
            <img class="navbar__logo-img" src="./assets/Kings_Autos_logo.svg" alt="Kings Auto Services">
        </figure>
    </div>
</div>