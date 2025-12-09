<!DOCTYPE html>
<html>
<head>
</head>
<body>

<h1>Name:Abdirashiid Abdiladhiif Ali </h1>
<h2>ID:C1220269</h2>

<h3>Question 1:</h3>

<?php
$numbers = [5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9];

echo "Array elements: " . implode(", ", $numbers) . "<br>";

$total = array_sum($numbers);
echo "Total of all elements = $total<br>";

$even_total = 0;
$odd_total = 0;
foreach ($numbers as $num) {
    if ($num % 2 == 0) $even_total += $num;
    else $odd_total += $num;
}
echo "Total of even elements = $even_total<br>";
echo "Total of odd elements = $odd_total<br>";

$min = min($numbers);
$max = max($numbers);

$min_pos = array_keys($numbers, $min);
$max_pos = array_keys($numbers, $max);

echo "Minimum element = $min at positions: " . implode(", ", $min_pos) . "<br>";
echo "Maximum element = $max at positions: " . implode(", ", $max_pos) . "<br>";
?>

<break>




<h3>Question 2:</h3>

<?php
$colors = [
    "Light" => ["Red" => "Light Red", "Green" => "Light Green", "Blue" => "Light Blue"],
    "Normal" => ["Red" => "Normal Red", "Green" => "Normal Green", "Blue" => "Normal Blue"],
    "Dark" => ["Red" => "Dark Red", "Green" => "Dark Green", "Blue" => "Dark Blue"]
];

echo "<table border='1' cellpadding='6'>";
echo "<tr><th></th><th>Red</th><th>Green</th><th>Blue</th></tr>";
foreach ($colors as $shade => $row) {
    echo "<tr><th>$shade</th>";
    foreach ($row as $val) {
        echo "<td>$val</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>

<break>

<h3>Question 3:</h3>

<?php
$matrix = [
    [2, -6, 8],
    [6, 1, 1],
    [7, 8, -6]
];

echo "<b>Matrix:</b><br>";
foreach ($matrix as $row) {
    echo implode(" ", $row) . "<br>";
}

// Total of all elements
$total = 0;
foreach ($matrix as $row) $total += array_sum($row);
echo "<br>Total of all elements = $total<br>";

// Totals of even/odd
$even_total = $odd_total = 0;
foreach ($matrix as $row) {
    foreach ($row as $val) {
        if ($val % 2 == 0) $even_total += $val;
        else $odd_total += $val;
    }
}
echo "Total even = $even_total<br>";
echo "Total odd = $odd_total<br>";

// Row totals
foreach ($matrix as $i => $row) {
    echo "Row " . ($i + 1) . " total = " . array_sum($row) . "<br>";
}

// Column totals
for ($col = 0; $col < count($matrix[0]); $col++) {
    $sum = 0;
    foreach ($matrix as $row) $sum += $row[$col];
    echo "Column " . ($col + 1) . " total = $sum<br>";
}

// Diagonals
$main_diag = $sec_diag = 0;
for ($i = 0; $i < count($matrix); $i++) {
    $main_diag += $matrix[$i][$i];
    $sec_diag += $matrix[$i][count($matrix) - $i - 1];
}
echo "Main diagonal total = $main_diag<br>";
echo "Secondary diagonal total = $sec_diag<br>";

// Min & Max
$flat = array_merge(...$matrix);
$min = min($flat);
$max = max($flat);
echo "Minimum = $min<br>";
echo "Maximum = $max<br>";
?>

<break>


<h3>Question 4:</h3>

<?php
$students = [
    "CA221" => [
        ["Name" => "Mohamed", "Phone" => "0648440403", "Address" => "Laba Dhagax, Wardhiigley"],
        ["Name" => "Ahmed Ali", "Phone" => "0647223201", "Address" => "Taleex, Hodan"]
    ],
    "CA223" => [
        ["Name" => "Ahmed Abdi Jama", "Phone" => "0646990276", "Address" => "Macmacanka, Dharkeynley"]
    ]
];

echo "<table border='1' cellpadding='6'>";
echo "<tr><th>Course</th><th>Name</th><th>Phone</th><th>Address</th></tr>";
foreach ($students as $course => $list) {
    foreach ($list as $s) {
        echo "<tr>
            <td>$course</td>
            <td>{$s['Name']}</td>
            <td>{$s['Phone']}</td>
            <td>{$s['Address']}</td>
        </tr>";
    }
}
echo "</table>";
?>

<break>


<h3>Question 5:</h3>

<?php
$transcript = [
    "Semester 1" => [
        ["Course" => "subject1", "CW1" => 9, "MidTerm" => 26, "CW2" => 10, "Final" => 40, "Total" => 85, "Status" => "Pass"],
        ["Course" => "subject2", "CW1" => 9, "MidTerm" => 26, "CW2" => 10, "Final" => 40, "Total" => 85, "Status" => "Pass"],
        ["Course" => "subject3", "CW1" => 9, "MidTerm" => 26, "CW2" => 10, "Final" => 40, "Total" => 85, "Status" => "Fail"]
    ],
    "Semester 2" => [
        ["Course" => "subject1", "CW1" => 9, "MidTerm" => 26, "CW2" => 10, "Final" => 40, "Total" => 85, "Status" => "Pass"],
        ["Course" => "subject2", "CW1" => 9, "MidTerm" => 26, "CW2" => 10, "Final" => 40, "Total" => 85, "Status" => "Pass"],
        ["Course" => "subject3", "CW1" => 9, "MidTerm" => 26, "CW2" => 10, "Final" => 40, "Total" => 85, "Status" => "Pass"]
    ]
];

echo "<table border='1' cellpadding='6'>";
echo "<tr><th>Semester</th><th>Course</th><th>CW1</th><th>MidTerm</th><th>CW2</th>
<th>Final</th><th>Total</th><th>Status</th></tr>";

foreach ($transcript as $semester => $courses) {
    foreach ($courses as $c) {
        echo "<tr>
            <td>$semester</td>
            <td>{$c['Course']}</td>
            <td>{$c['CW1']}</td>
            <td>{$c['MidTerm']}</td>
            <td>{$c['CW2']}</td>
            <td>{$c['Final']}</td>
            <td>{$c['Total']}</td>
            <td>{$c['Status']}</td>
        </tr>";
    }
}
echo "</table>";
?>
</body>
</html>