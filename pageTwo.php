<?php
session_start();
?>

<html>

<h1>page 2</h1>
<?= '<h1>' . $_SESSION['myName'] . '</h1>'; ?>
</html>