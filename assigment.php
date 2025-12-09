<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment</title>
</head>
<body>
  <style>
   
    table {
      border-collapse: collapse;
      width: 60%;
      margin: 40px auto;
      text-align: center;
      font-family: Arial, sans-serif;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    td{
        width: 60px;
        height: 60px;
        font-sze: 18px;
        boder: 1px;
        font-weight: 500px
    
    }


    .blue {
      background-color: #8bb4e0ff;
      color: white;
      font-weight: bold;
    }
    .green{
         background-color: #13b620ff;
      color: white;
      font-weight: bold;
    }
    .orange{
         background-color: #e68129ff;
      color: white;
      font-weight: bold;
    }

    h1 {
      text-align: center;
      font-family: Arial, sans-serif;
      color: #333;
    }
  </style>

 <table >
    <?php
      $count = 1;
      for ($a = 1; $a <= 10; $a++) {
        echo "<tr>";
        for ($b = 1; $b <= 10; $b++) {
          if($count % 3 == 0 && $count % 5 == 0){
            echo "<td class='orange'>$count</td>";

          }elseif($count % 5 == 0){
            echo "<td class='green'>$count</td>";

          }elseif ($count % 3 == 0) {
            echo "<td class='blue'>$count</td>";
          }

           else {
            echo "<td>$count</td>";
          }
          $count++;
        }
        echo "</tr>";
      }
    ?>
  </table>
    
</body>
</html>