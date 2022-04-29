<?php
$name = 'Ollie Ritchie';
session_start();
$_SESSION['myName'] = $name;
$favDesert = 'Brownie';

setcookie('desert', $favDesert);


?>

<html>

<h1>page 1</h1>
<?= '<h1>' . $_SESSION['myName'] . '</h1>'; ?>
<a href="pageTwo.php">page 2</a>
</html>
