<?php
session_start();
if (!isset($_SESSION['loggedin'])|| $_SESSION['loggedin']!=true) {
    header("location: login.php");
    exit;
}
echo  "Hello";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - <?php $_SESSION['temail']?></title>
</head>
<body>
    hello - <?php $_SESSION['temail']?>
</body>
</html>