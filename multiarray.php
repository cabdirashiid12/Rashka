<?php

$students = array(
    array("name" => "Mohamed Ali", "age" => 20, "grade" => "A"),
    array("name" => "Ayan Mohamed", "age" => 22, "grade" => "B"),
    array("name" => "Hodan Abdi", "age" => 19, "grade" => "A"),
    array("name" => "Abdiwahab Yusuf", "age" => 21, "grade" => "C")
);
foreach($students as $student){
    echo "Name: " . $student['name'] . "<br>";
    echo "Age: " . $student['age'] . "<br>";
    echo "Grade: " . $student['grade'] . "<br>";
    echo "<br>";
}

echo "<br>";





echo "<table border='1'>";

foreach($students as $student){
    echo "<tr>";
    echo "<td>" . $student['name'] . "</td>";
    echo "<td>" . $student['age'] . "</td>";
    echo "<td>" . $student['grade'] . "</td>";
    echo "</tr>";
}

echo "</table>";

echo "<br>";


//array functions

$numbers = array(5, 2, 9, 1, 7,100,-6);
sort($numbers);
echo "br";
echo "Sorted Numbers: ";
echo "<br>";
 print_r($numbers);
echo "<br>";
foreach($numbers as $number){
    echo $number . " ";

    echo "<br>";
   
}
echo "<br>";

echo "Max: " .max($numbers) . "<br>";
echo "<br>";
echo "Min: " .min($numbers) . "<br>";

echo "<br>";

//3 dimensional array
$info = array(
    "students" => array(
        array("name" => "Mohamed Ali", "age" => 20, "grade" => "A"),
        array("name" => "Ayan Mohamed", "age" => 22, "grade" => "B")
    ),
    "teachers" => array(
        array("name" => "Hodan Abdi", "subject" => "Math"),
        array("name" => "Abdiwahab Yusuf", "subject" => "Science")
    ),

    "employee" => array(
        array("name" => "Hodan Abdi", "department" => "IT"),
    
    )
);
echo "<br>";

echo "Students Information: <br>";

foreach($info['students'] as $student){
    echo "Name: " . $student['name'] . "<br>";
    echo "Age: " . $student['age'] . "<br>";
    echo "Grade: " . $student['grade'] . "<br>";
    echo "<br>";
}

echo "Teachers Information: <br>";

foreach($info['teachers'] as $teacher){
    echo "Name: " . $teacher['name'] . "<br>";
    echo "Subject: " . $teacher['subject'] . "<br>";
    echo "<br>";
}

echo "<br>";

echo "employee Information: <br>";

foreach($info['employee'] as $employee){
    echo "Name: " . $employee['name'] . "<br>";
    echo "deparment: " . $employee['department'] . "<br>";
    echo "<br>";
}


?>