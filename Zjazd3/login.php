<!DOCTYPE html>
<html lang="pl">
<head>
    <title>login</title>
</head>
<body>
<p>Hasło i login:123</p>
<form action="login.php" method="post">
    <input type="text" name="login" placeholder="login"><br><br>
    <input type="password" name="password" placeholder="password"><br><br>
    <input type="submit" value="login button">
</form>
<?php

if (isset($_COOKIE['count'])) {
    $counter = $_COOKIE['count'] + 1;
} else {
    $counter = 1;
}

setcookie('count',
    $counter,
    time() + (3600*24));



if (isset($_POST['login']) && isset($_POST['password']))
{
    if ($_POST['login'] == '123' && $_POST['password'] == '123'){
        header('Location: counters.php');
        session_start();
        if (!isset($_SESSION['count'])) {
            $_SESSION['count'] = 0;
        }
    }else
    {
        echo "wrong password";
    }
}


?>
</body>
</html>