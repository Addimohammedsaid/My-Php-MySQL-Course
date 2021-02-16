<?php
    if(isset($_GET['logout'])){
        setcookie("id", "", time() - 3600);
    }
?>


<header>
        <a class="logo" href="#">Social PHP</a>
        <nav >
            <ul>
                <li><a class="active" href="#">Accueil</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="./login.php?logout=true">se déconnecter</a></li>
            </ul>   
        </nav>
</header>