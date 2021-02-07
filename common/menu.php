<nav>
    <ul>
        <li><a href="index.php">Accueil</a></li>

<?php for ($i = 1; $i <= 10; $i++) {
    echo "<li><a href='exo" . $i . ".php'>Exercice " . $i . "</a></li>";
}
?>
    </ul>
</nav>
