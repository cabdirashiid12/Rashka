<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Associative Array
    $person = array(    
        "name" => "Mohamed Ali",
        "age" => 20,
        "address" => "hodan",
        "ID" => 12345
    );

    print_r($person);

    foreach($person as $key => $value){
        echo "<br>" . $key . ": " . $value;
        echo "<br>";
    }

    echo "<br>";

    echo "Name: " . $person['name'] . "<br>";
    echo "Age: " . $person['age'] . "<br>";
    echo "Address: " . $person['address'] . "<br>";
    echo "ID: " . $person['ID'] . "<br>";

    echo "<br>";


    // Multidimensional Array
    $employees = array(
        array(
            "name" => "Mohamed Ali",
            "age" => 20,
            "address" => "hodan",
            "ID" => 12345
        ),
        array(
            "name" => "Ayan Mohamed",
            "age" => 22,
            "address" => "hargeisa",
            "ID" => 67890
        ),
        array(
            "name" => "Hodan Abdi",
            "age" => 19,
            "address" => "mogadishu",
            "ID" => 11223
        )
    );

    print_r($employees);

    echo "<br>";

    foreach($employees as $employee){
        echo "<br>";
        foreach($employee as $key => $value){
            echo $key . ": " . $value . "<br>";
        }
        echo "<br>";

        

    
    }

    //Array Functions
    echo "Total Employees: " . count($employees) . "<br>";

    //accessing specific employee
    echo "Employee 2 Name: " . $employees[1]['name'] . "<br>";
    ?>
</body>
</html>