<body>
<header>
    <nav>
        <ul>
            <li><a href="index.php?page=accueil">Accueil</a></li>
            <li><a href="index.php?page=produits">Produits</a></li>
            <li><a href="index.php?page=inscription">Inscription</a></li>
            <?php
            if (isset($_SESSION['login']) && $_SESSION['login'] == 1) {
                echo "<li><a href=\"index.php?page=logout\">Logout</a></li>";
            }

            else {
                echo "<li><a href=\"index.php?page=login\">Login</a></li>";
            }
            ?>
            <li><a href="index.php?page=contact">Contact</a></li>
            <?php
            if(isset($_SESSION['admin']) && $_SESSION['admin'] == 1) {
                echo "<li><a href=\"index.php?page=ajouterproduit\">Ajouter un produit</a></li>";
            }
            else {
                echo "<li><a href=\"index.php?page=logout\">Logout</a></li>";
            }
            ?>
        </ul>
    </nav>
</header>
<main>