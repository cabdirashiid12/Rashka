<?php

echo '
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Information</title>

<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f3f6fa;
    margin: 0;
    padding: 40px;
  }
  
  h1{
   font-size: 25px;
   button-top: 20px;
   text-align: center;
   color: black;
  }


  table {
    border-collapse: collapse;
    width: 80%;
    margin: auto;
    background-color: #fff;
    box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
    border-radius: 10px;
    overflow: hidden;
  }

  th {
    background-color: #b41e64ff;
    color: white;
    padding: 12px;
    text-align: center;
    font-size: 16px;
  }

  td {
    padding: 10px;
    text-align: center;
    font-size: 15px;
    color: #333;
  }

  tr:nth-child(even) {
    background-color: #f2f8ff;
  }

  tr:hover {
    background-color: #e0efff;
    transition: 0.3s;
  }
</style>
</head>

<body>
<caption ><h1>Student Information</h1></caption>
  <center>
  <table>
    <tr>
      <th>ID</th>
      <th>Full Name</th>
      <th>Class Name</th>
      <th>Student ID</th>
      <th>Course</th>
    </tr>
    <tr>
      <td>1</td>
      <td>Abdirashiid</td>
      <td>CA221</td>
      <td>C1220269</td>
      <td>Computer Science</td>
    </tr>
    <tr>
      <td>2</td>
      <td>Abdirashiid Abdiladhiif</td>
      <td>CA221</td>
      <td>C1220269</td>
      <td>Computer Science</td>
    </tr>
    <tr>
      <td>3</td>
      <td>Rashka</td>
      <td>CA221</td>
      <td>C1220269</td>
      <td>Computer Science</td>
    </tr>
    <tr>
      <td>4</td>
      <td>Dhiifow</td>
      <td>CA221</td>
      <td>C1220269</td>
      <td>Computer Science</td>
    </tr>
  </table>
  </center>
</body>
</html>
';
?>
