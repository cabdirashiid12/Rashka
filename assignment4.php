<?php
// Handle form submit
$fullName = $_POST['fullname'] ?? "";
$password = $_POST['password'] ?? "";
$gender = $_POST['gender'] ?? "";
$faculties = $_POST['faculties'] ?? [];
$city = $_POST['city'] ?? "";
$languages = $_POST['languages'] ?? [];

// Upload Single File
if(isset($_FILES['document'])){
    $docName = $_FILES['document']['name'];
    move_uploaded_file($_FILES['document']['tmp_name'], "Uploads/".$docName);
}

// Check if file exists before saving (photo)
if(isset($_FILES['photo'])){
    $photoName = $_FILES['photo']['name'];
    if(file_exists("Uploads/".$photoName)){
        echo "<p style='color:red;'>Photo already exists!</p>";
    } else {
        move_uploaded_file($_FILES['photo']['tmp_name'], "Uploads/".$photoName);
    }
}

// Validate only jpg/pdf
if(isset($_FILES['fileCheck'])){
    $allowed = ['jpg','jpeg','pdf'];
    $ext = pathinfo($_FILES['fileCheck']['name'], PATHINFO_EXTENSION);
    
    if(in_array(strtolower($ext), $allowed)){
        move_uploaded_file($_FILES['fileCheck']['tmp_name'], "Uploads/".$_FILES['fileCheck']['name']);
        echo "Valid file uploaded!<br>";
    } else {
        echo "<p style='color:red;'>Only JPG or PDF allowed!</p>";
    }
}

// Upload Multiple Files
if(isset($_FILES['myFiles'])){
    foreach($_FILES['myFiles']['name'] as $key => $file){
        move_uploaded_file($_FILES['myFiles']['tmp_name'][$key], "Uploads/".$file);
        echo "$file uploaded successfully<br>";
    }
}

// Final validation
if(isset($_POST['submitFinal'])){
    if(!empty($_POST['box']) && !empty($_POST['drop']) && !empty($_FILES['fileFinal']['name'])){
        echo "<p style='color:green;'>Form submitted successfully ✅</p>";
    } else {
        echo "<p style='color:red;'>Please fill all fields ❗</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<body>
<h2>Chapter 6 PHP Form Assignment</h2>

<form method="post" enctype="multipart/form-data">
    
    <!-- Full Name & Password -->
    <label>Full Name:</label><br>
    <input type="text" name="fullname"><br><br>
    
    <label>Password:</label><br>
    <input type="password" name="password"><br><br>
    
    <!-- Gender Radio -->
    <b>Gender:</b><br>
    <input type="radio" name="gender" value="male"> Male<br>
    <input type="radio" name="gender" value="female"> Female<br><br>
    
    <!-- Checkbox Faculties -->
    <b>Faculties:</b><br>
    <input type="checkbox" name="faculties[]" value="IT"> IT
    <input type="checkbox" name="faculties[]" value="Business"> Business
    <input type="checkbox" name="faculties[]" value="Engineering"> Engineering<br><br>

    <!-- Dropdown City -->
    <b>Select City:</b><br>
    <select name="city">
        <option>Mogadishu</option>
        <option>Hargeisa</option>
        <option>Garowe</option>
        <option>Kismayo</option>
    </select><br><br>

    <!-- Listbox Languages -->
    <b>Select Languages:</b><br>
    <select name="languages[]" multiple size="4">
        <option>English</option>
        <option>Somali</option>
        <option>Arabic</option>
        <option>Turkish</option>
    </select><br><br>

    <!-- Upload -->
    Upload Document: <input type="file" name="document"><br><br>
    
    Upload Photo (check exists): <input type="file" name="photo"><br><br>

    Only JPG/PDF: <input type="file" name="fileCheck"><br><br>

    Upload Multiple Files: <input type="file" name="myFiles[]" multiple><br><br>

    <button type="submit">Submit</button>
</form>

<hr>

<!-- ✅ Final Validation Form -->
<form method="post" enctype="multipart/form-data">
<input type="text" name="box" placeholder="Enter text"><br><br>

<select name="drop">
<option value="">Select City</option>
<option value="Mogadishu">Mogadishu</option>
<option value="Garowe">Garowe</option>
</select><br><br>

<input type="file" name="fileFinal"><br><br>

<button type="submit" name="submitFinal">Final Submit</button>
</form>

<?php
// Display outputs
if($_SERVER['REQUEST_METHOD']=="POST"){
    echo "<hr><h3>Form Output:</h3>";
    echo "Full Name: $fullName <br>";
    echo "Password: $password <br>";
    echo "Gender: $gender <br>";
    echo "Faculties: ". implode(", ", $faculties) ."<br>";
    echo "City: $city <br>";
    
    echo "Languages:<br>";
    foreach($languages as $lang) echo "$lang<br>";
}
?>
</body>
</html>
