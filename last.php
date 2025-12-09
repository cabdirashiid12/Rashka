<?php


$countries = array(
    "somalia" =>  array("capital" => "mogodishu"),
    "Kenya" =>    array("capital" => "Nairobi"),
    "adds" =>   array("capital" => "ethopia")
);




echo "<br>";



function Countries($country)
{
    $data = $GLOBALS["countries"];
    if (isset($data[$country])) {
        echo "the capital of the $country is: " . $data[$country]['capital'];
    }
}

echo Countries('somalia');

echo "<br>";

foreach ($countries as $capital => $faahfaahin) {
    echo "counteries: $capital - capital: " . $faahfaahin["capital"] . "<br>";
}


echo "<br>";














echo "<br>";

$numbers = array(100, 200, 300, 400, 500, 200);



function sumArrays($arrays)
{
    $iskudar = 0;
    for ($i = 0; $i < count($arrays); $i++) {
        $iskudar += $arrays[$i];
    }

    return $iskudar;
}

echo ("sum of the array elements are : " . sumArrays($numbers));






?>





