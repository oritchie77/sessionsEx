<?php

//unset($_COOKIE['desert']);
setcookie('desert', Null);
if(isset($_COOKIE['desert'])) {
    echo $_COOKIE['desert'];
} else {
    echo 'no cookies here!';
}


?>

<html>
<head>


</head>

<body>
<a href="pageTwo.php">back</a>
</body>
</html>
