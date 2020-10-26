<?php
function sumofDigits($a){
$sum=0;
while($a!=0){
    $rem=$a%10;
    $sum+=$rem;
    $a/=10;
}
return $sum;
}
function checkEvenorOdd($a){
    if($a%2==0)
       return "even";
    else
       return "odd";
}

function checkPrimeAndprint($a){
    for($i=2;$i<=$a;$i++){
        $temp=true;
        for($j=2;$j*$j<=$i;$j++){
            if($i%$j==0){
                $temp=false;
            }
        }
        if($temp){
            echo("$i ");
        }
    }
}

function tableOfNumber($num){
    for($i=1;$i<=10;$i++){
        echo($i*$num." ");
    }
    echo("<br>");
}

function factorial($num){
    if($num==0)
       return 1;
    return $num*factorial($num-1);
}


function armastrongNumber($num){
    $temp=$num;
    $sum=0;
    while($num!=0){
        $rem=$num%10;
        $sum+=$rem*$rem*$rem;
        $num/=10;
    }

    if($temp==$sum){
        return "an armastrong number";
    }else{
        return "not an armastrong number";
    }
}

function palindrome($num){
    $sum=0;
    $temp=$num;

    while($num!=0){
        $ansrem=$num%10;
        $sum=$sum*10+$rem;
        $num/=10;
    }

    if($temp==$sum){
        return "Palindrome number";
    }else{
        return "not a palindrome numbner";
    }
}


$palin=palindrome(121);
echo("$palin<br>");
$armast=armastrongNumber(407);
echo($armast);
$fact=factorial(5);
echo($fact);
echo("<br>");

tableOfNumber(5);

checkPrimeAndprint(100);
echo("<br>");

$ans=sumofDigits(12784);
echo("$ans<br>");

$ans2=checkEvenorOdd(123);
echo ("$ans2<br>");
?>