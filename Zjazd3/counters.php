
<?php
session_start();
if (!isset($_SESSION['count'])) {header('Location: login.php');}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <title>counters</title>
</head>
<body>
<p>End the session button</p>

<form action="counters.php" method="post">
    <input type="submit" name="logout" value="Wyloguj">
</form>

<?php

if (isset($_POST['logout'])) {
    session_destroy();
    header('Location: login.php');
    exit;
}

if (isset($_COOKIE['count'])) {
    $counter = $_COOKIE['count'] + 1;
} else {
    $counter = 1;
}

setcookie('count',
    $counter,
    time() + (3600*24));
if (isset($_SESSION['count'])) {
    $_SESSION['count']++;
}

echo 'Cookies:' . $counter;
echo 'Session:' . $_SESSION['count'];

?>
</body>
</html>