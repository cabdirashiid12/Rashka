<?php


// functions

function fruits($name="everyone"){
    echo " $name! <br>";
}

fruits("rashka");



function factorial($num){
    $result = 1;
    for($i=$num; $i >= 1; $i--){
        $result*=$i;
    }

    return "the factorial of $num is $result <br>";
}

echo factorial(5);
$out =factorial(6);

echo"<br>";

$num= [3,6,7,8,9,90];

function passArray($arr){
    echo "the passed Array:";

    for ($i=0; $i < count($arr); $i++) { 

        echo "$arr[$i], ";

        $arr[$i]++;
        # code...
    }

    return $arr;
}

echo "<br>";

$newArray= passArray($num);
echo "the new array";

echo implode (" ",$newArray);

function fact($num){
    $result=1;

    for ($i=$num; $i >=1; $i++) { 

        $result*=$i; 
    }

    echo "the factorial is $num is $result <br>";
    return $result;

}




?>

