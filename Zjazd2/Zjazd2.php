<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Form1</h1>
<form action="form1.php" method="get">
<input type="number" name="number1">
<br>
<input type="number" name="number2">
    <select name="select1">
        <option>Dodawanie</option>
        <option>Odejmowanie</option>
        <option>Mnożenie</option>
        <option>Dzielenie</option>
    </select>
    <input type="submit">
</form>
<h1>Form2</h1>
<form action="Zjazd2.php" method="post">

    <input type="text" placeholder="Imie" required name="fname"><br><br>
    <input type="text" placeholder="Nazwisko" required name="sname"><br><br>
    <input type="text" placeholder="Adres" required name="adress"><br><br>
    <input type="email" placeholder="E-mail" required name="mail"><br><br>
    Przyjazd
    <input type="date" placeholder="Data" required name="date1"><br><br>
    Odjazd
    <input type="date" placeholder="Data" required name="date2"><br><br>
    Ilosc osob
    <select name="people">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
    </select><br><br>
    Czy potrzebne jest łóżeczko dla dzieci?
    <input type="radio" required name="isBaby">Tak<input type="radio" name="isBaby">Nie<br><br>
    Czy masz weźmiesz ze sobą zwierzątko?
    <input type="radio" required name="isAnimal">Tak<input type="radio" name="isAnimal">Nie<br><br>
    <h3>Udogodnienia</h3>
    <input type="checkbox" name="ashtray">Popielniczka<br>
    <input type="checkbox" name="balcony">Balkon<br>
    <input type="checkbox" name="microwave">Mikrofala<br>
    <input type="checkbox" name="iron">Zelazko<br>
    <input type="submit" name="submit">
</form>
<?php

if (isset($_POST['fname'])) {
    echo '<h1>Dane z formularza</h1>';
    echo '<p>Imię: ' . $_POST['fname'] . '</p>';
    echo '<p>Nazwisko: ' . $_POST['sname'] . '</p>';
    echo '<p>E-mail: ' . $_POST['mail'] . '</p>';
    echo '<p>Adres: ' . $_POST['adress'] . '</p>';
    echo '<p>Data: ' . $_POST['date1'] . ' do ' . $_POST['date2'] . '</p>';
    echo '<p>Ilość osób: ' . $_POST['people'] . '</p>';
}
?>
</body>
</html>