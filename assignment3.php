<?php

$transcript = [
    "Semester 1" => [
        ["Course" => "subject1", "CW1" => 9, "MidTerm" => 26, "CW2" => 10, "Final" => 40, "Total" => 85, "Status" => "Pass"],
        ["Course" => "subject2", "CW1" => 9, "MidTerm" => 26, "CW2" => 10, "Final" => 40, "Total" => 85, "Status" => "Pass"],
      
        ["Course" => "subject3", "CW1" => 9, "MidTerm" => 26, "CW2" => 10, "Final" => 40, "Total" => 55, "Status" => "pass",] 
    ],
    "Semester 2" => [
        ["Course" => "subject1", "CW1" => 9, "MidTerm" => 26, "CW2" => 10, "Final" => 40, "Total" => 85, "Status" => "Pass"],
      
        ["Course" => "subject2", "CW1" => 5, "MidTerm" => 20, "CW2" => 5, "Final" => 20, "Total" => 50, "Status" => "Marginal Pass"],
        ["Course" => "subject3", "CW1" => 9, "MidTerm" => 26, "CW2" => 10, "Final" => 40, "Total" => 45, "Status" => "fail"]
    ]
];


echo "<!DOCTYPE html>
<html>
<head>
    <title>Academic Transcript</title>
    <style>
        body { font-family: sans-serif; display: flex; justify-content: center; padding-top: 20px; }
        table { border-collapse: collapse; width: auto; box-shadow: 0 4px 8px rgba(0,0,0,0.1); }
        th, td { border: 1px solid #ddd; padding: 12px; text-align: center; }
        th { background-color: #f2f2f2; color: #333; }
        .highlight-yellow { background-color: #fffb9d; } /* Custom class for the yellow highlight */
    </style>
</head>
<body>";


echo "<table>";
echo "<tr><th>Semester</th><th>Course</th><th>CW1</th><th>MidTerm</th><th>CW2</th>
<th>Final</th><th>Total</th><th>Status</th></tr>";

foreach ($transcript as $semester => $courses) {
    foreach ($courses as $c) {
        $total = $c['Total'];
        $rowClass = "";
        
        // --- CONDITIONAL STYLING LOGIC ---
        // Check if the total score is greater than or equal to 50 AND less than or equal to 55
        if ($total >= 50 && $total <= 55) {
            $rowClass = " class='highlight-yellow'"; // Apply the CSS class
        }

        // Output the table row, applying the class if determined
        echo "<tr{$rowClass}>
            <td>$semester</td>
            <td>{$c['Course']}</td>
            <td>{$c['CW1']}</td>
            <td>{$c['MidTerm']}</td>
            <td>{$c['CW2']}</td>
            <td>{$c['Final']}</td>
            <td>{$total}</td>
            <td>{$c['Status']}</td>
        </tr>";
    }
}
echo "</table>";
echo "</body></html>";
?>
