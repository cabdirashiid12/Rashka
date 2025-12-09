<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome</title>
</head>
<body>
 <!-- <h1 style="color:blue; text-align:center"></h1>
<h1 style="font-size: 50px;"></h1> -->
<!-- <p style="font-size: 10x">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit, aut deserunt?
     Nulla, fugit dolores molestias <br>distinctio dicta error, iste
     ipsa assumenda nobis rerum sint ratione doloribus. Velit doloremque modi iusto.</p>  -->
<!-- form.html -->
  <!-- <form method="GET" action="index.php">
    Name: <input type="text" name="name">
    <input type="submit">
</form>   -->
<!-- 
<h1>Welcome to my page!</h1> -->
    <!-- <p>Today's date is: <?php echo date("Y-m-d"); ?></p> -->

    <!-- <style>
        h1{
            color:blue;
            text-align:center;
        }
        h2{
            color:green;
        
        }
        p{
            font-size:20px;
        }
    </style> -->
     
<?php


// echo"<h1>jamhuriya university &   technology</h1>";
// echo"<h2>About information</h2>";

// echo "<p>Jamhuriya University of Science and Technology (JUST) is private 
// institution and was officially <br>established in Mogadishu, Somalia, in 2011 by a
//  group of Somali scholars and Intellectuals<br> to fill the existing vacuum (in the quality) in
//   the higher education system in Somalia
//  by providing higher education of<br> international standards </p>";
// echo"<h2>contact information</h2>";

// echo "<p><b>Email</b>:info@jst.eduso</p>";
// echo "<p><b>phone</b>:+2552 617225775</p>";
// echo "<p><b>address</b>:digfeer street, hodan district</p>";
// echo "<p><b>webiste:</b> <a href='https://www.just.edu.so/'>visit website</p>"


  

// 1. Hello World

// echo "Hello, World!";


// 🔹 2. Variables and Data Type

// $name = "Alice";
// echo "Hello, " . $name . "!";

// 3. Conditional Statement

// $age = 25;
// if ($age >= 18) {
//     echo "You are an adult.";
// } else {
//     echo "You are a minor.";
// }



// 4. Loops

// for ($i = 1; $i <= 5; $i++) {
//     echo "Number: " . $i . "<br>";

// }


// 5. Functions

// function greet($name) {
//     return "Greetings, " . $name . "!";
// }

// echo greet("Bob");


// 🔹 6. Arrays
// $user = [
//     "name" => "Jane",
//     "email" => "jane@example.com"
// ];

// echo $user["email"];

// 7. Form Handling (GET method)

// $name = $_GET['name'];
// echo "Hello, $name!";

// 8. Connecting to MySQL


// $mysqli = new mysqli("localhost", "database");

// if ($mysqli->connect_error) {
//     die("Connection failed: " . $mysqli->connect_error);
// }

// echo "Connected successfully!";

// 9. JSON Encoding/Decoding

// $data = ["name" => "John", "age" => 30];
// $json = json_encode($data);
// echo $json; // {"name":"John","age":30}

// $decoded = json_decode($json, true);
// echo $decoded['name']; // John

// 1. Single-line Comments
// This is a single-line comment using double slashes
# This is also a single-line comment using a hash

// echo "Hello World!"; // This is a comment at the end of a line

// 2. Multi-line (Block) Comments
/*
This is a multi-line comment.
It can span multiple lines.
Useful for longer explanations.
*/

/*
This is a multi-line comment.
It can span multiple lines.
Useful for longer explanations.
*/

/*echo "Hello again!";*/


// 2. File Handling – Reading a File


// $filename = "sample.txt";

// if (file_exists($filename)) {
//     $contents = file_get_contents($filename);
//     echo nl2br($contents); // Print with line breaks
// } else {
//     echo "File not found.";
// }

// 3. File Handling – Writing to a File
// $data = "Hello from PHP!\n";
// file_put_contents("sample.txt", $data, FILE_APPEND); // Append mode
// echo "Data written to file.";

// 🔹 4. Using Sessions
// session_start(); // Start session

// $_SESSION['username'] = 'admin'; // Store session data
// echo "Session set. Username: " . $_SESSION['username'];

// 🔹 5. Cookies
// setcookie("user", "John", time() + (86400 * 7), "/"); // 7 days

// Access a cookie
// if (isset($_COOKIE["user"])) {
//     echo "Welcome back, " . $_COOKIE["user"];
// } else {
//     echo "Welcome, new visitor!";
// }

// 6. Object-Oriented PHP (OOP)
// class Car {
//     public $brand;

//     function __construct($brand) {
//         $this->brand = $brand;
//     }

//     function honk() {
//         return "Beep! I'm a " . $this->brand;
//     }
//   }

//  $myCar = new Car("Toyota");
//  echo $myCar->honk(); // Beep! I'm a Toyota


?> 
</body>
</html>