<?php
function zad1(){echo "ZWitaj w swiecie PHP!!!";}
function zad2(){
    $a=(int)readline();
    $b=(int)readline();
    echo $a*$b;
}
function zad3(){
    $a=pi();
    echo round(sqrt($a),2);
}
function zad4(){
    $line=(string)readline();
    $numbers=explode(" ",$line);
    printf("%f \n",(float)$numbers[0]+(float)$numbers[1]);
    printf("%f \n",(float)$numbers[0]-(float)$numbers[1]);
    printf("%f \n",(float)$numbers[0]*(float)$numbers[1]);
    printf("%f \n",(float)$numbers[0]/(float)$numbers[1]);
}
function zad5(){
    $line=(string)readline();
    $reversed=explode(" ",$line);
    echo "%".$reversed[1]." ".$reversed[0]."%$#";
}
function zad6(){
    $line=(string)readline();
    $numbers=explode(" ",$line);
    if(($numbers[0]>($numbers[1]+$numbers[2]))||
        ($numbers[1]>($numbers[2]+$numbers[0]))||
        ($numbers[2]>($numbers[0]+$numbers[1]))){
    echo "Bad";
    }else{echo "Good";}
}
function zad7(){
    $number=(int)readline();
    switch(true){
        case $number <=31:
            echo "Jan 31";
            break;
        case $number <=59:
            echo "Feb 28";
            break;
        case $number <=90:
            echo "Mar 31";
            break;
        case $number <=120:
            echo "Apr 30";
            break;
        case $number <=151:
            echo "May 31";
            break;
        case $number <=181:
            echo "Jun 30";
            break;
        case $number <=212:
            echo "Jul 31";
            break;
        case $number <=243:
            echo "Aug 31";
            break;
        case $number <=273:
            echo "Sep 30";
            break;
        case $number <=304:
            echo "Oct 31";
            break;
        case $number <=334:
            echo "Nov 30";
            break;
        case $number <=365:
            echo "Dec 31";
            break;
        default:
            echo "Wrong value!";
    }
}
function zad8(){
    $line=(string)readline();
    $numbers=explode(" ",$line);
    if($numbers[0]>=$numbers[1]&&$numbers[0]>=$numbers[2]){
        if($numbers[1]>=$numbers[2]){
        echo $numbers[0]." ".$numbers[1]." ".$numbers[2].PHP_EOL.$numbers[2]." ".$numbers[1]." ".$numbers[0];
        }
        else{
        echo $numbers[0]." ".$numbers[2]." ".$numbers[1].PHP_EOL.$numbers[1]." ".$numbers[2]." ".$numbers[0];
        }
    }elseif($numbers[1]>=$numbers[2]&&$numbers[1]>=$numbers[0]){
        if($numbers[2]>=$numbers[0]){
        echo $numbers[1]." ".$numbers[2]." ".$numbers[0].PHP_EOL.$numbers[0]." ".$numbers[2]." ".$numbers[1];
        }
        else{
        echo $numbers[1]." ".$numbers[0]." ".$numbers[2].PHP_EOL.$numbers[2]." ".$numbers[0]." ".$numbers[1];
        }
    }else{
        if($numbers[0]>$numbers[1]){
        echo $numbers[2]." ".$numbers[0]." ".$numbers[1].PHP_EOL.$numbers[1]." ".$numbers[0]." ".$numbers[2];
        }else
        {
        echo $numbers[2]." ".$numbers[1]." ".$numbers[0].PHP_EOL.$numbers[0]." ".$numbers[1]." ".$numbers[2];
        }
    }
}
function zad9(){
    $tab1=[];
    $tab2=[];                               //W tresci zadania powiedziane ze maja zostac stworzone dwie tablice
    $line1=(string)readline();              //i dopiero wtedy wczytane dane
    $numbers1=explode(" ",$line1);  //Dlatego tyle linijek to zajęło (nie wiem czy taki był zamysł, ale dobra
    $line2=(string)readline();              //rzecz żeby poćwiczyć :) )
    $numbers2=explode(" ",$line2);
    $tab1=array_merge($tab1,$numbers1);
    $tab2=array_merge($tab2,$numbers2);
    if(sizeof($tab1)!=sizeof($tab2)){
        var_dump($tab1);
        var_dump($tab2);
        echo "BLAD";
        return -1;
    }
    $sum=0;
    for($i=0;$i<sizeof($tab1);$i++){
    $sum+=$tab1[$i]*$tab2[$i];
    }
    echo $sum;
}
function zad10(){
    $a=(int)readline();
    for($i=1;$i<=$a;$i++){
        for($j=0;$j<$i;$j++){
            echo "*";
        }
        echo "\n";
    }
    for($i=$a;$i>=1;$i--){
        for($j=$i;$j>=1;$j--){
            echo "*";
        }
        echo "\n";
    }
    for($i=$a;$i>=1;$i--){
        for($j=$i;$j<$a;$j++){
        echo " ";
        }
        for($k=$i;$k>=1;$k--){
            echo "*";
        }
        echo "\n";
    }
    for($i=1;$i<=$a;$i++){
        for($j=$i;$j<$a;$j++){
            echo " ";
        }
        for($k=1;$k<=$i;$k++){
            echo "*";
        }
        echo "\n";
    }
}
function zad11(){
    $a=readline();
    $a=strtolower($a);
    $alphabet=range("a","z");
    $a=str_replace(" ","",$a);
    $a=str_split($a);
    $ad=array_diff($a,$alphabet);
    if(empty($ad)){
        echo "TRUE";
    }else
    {echo "FALSE";}
}
function zad12(){
    $line=(string)readline();
    $tr=explode(" ",$line);
    $a=6;
    $b=2;
    $array = array();
    if($tr[0]!=$a||$tr[1]!=$b){
    echo "BLAD1";
    return -1;
    }

        for($i=0;$i<$a;$i++){
            $line=(string)readline();
            $line=explode(" ",$line);
            if($b>count($line)){
                echo "BLAD2";
                return -1;
            }else
            for($j=0;$j<$b;$j++){
                $array[$i][$j]=$line[$j];
            }
        }
    for($i=0;$i<$b;$i++){
        for($j=0;$j<$a;$j++){
            echo $array[$j][$i]." ";
        }
        echo "\n";
    }

}

?>