<?php
$name = 'Ollie Ritchie';
session_start();
$_SESSION['myName'] = $name


?>



<h1>page 1</h1>
<?= '<h1>' . $_SESSION['myName'] . '</h1>'; ?>

<!--<a href="pageTwo.php">Page 2</a>-->

