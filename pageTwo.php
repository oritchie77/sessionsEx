<?php
session_start();

$favDesert = $_COOKIE['desert'];
?>

<html>

<h1>page 2</h1>
<?= '<h1>' . $_SESSION['myName'] . '</h1>'; ?>

<?= '<P> my Fav desert is: ' . $favDesert . '</P>' ?>

<a href="pageThree.php" >Clear Cookies</a>
</html>