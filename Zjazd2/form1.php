<html>
<body>

<h1 style="font-size:10vw"">
<?php
$select1 = $_GET["select1"];
$number1 = $_GET["number1"];
$number2 = $_GET["number2"];
if($select1=="Dodawanie"){echo $number1+$number2;}
if($select1=="Odejmowanie"){echo $number1-$number2;}
if($select1=="Mnożenie"){echo $number1*$number2;}
if($select1=="Dzielenie"){echo $number1/$number2;}
?>


</body>

</html>