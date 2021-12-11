<?php

if (isset($_POST['Register'])) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // getting user input and validating
    $fname = validate($_POST['fname']);
    $lname = validate($_POST['lname']);
    $email = validate($_POST['email']);
    $number = validate($_POST['number']);
    
    $Pword = validate($_POST['Pword']);
   

    //print_r($_POST);
} ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>   
<body>
<?php
require 'database_credentials.php';
// connect to database
$conn = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);

//checking if a student has alreeady rigestered and inserting user input to database
$check_login = mysqli_query(
    $conn,
    "SELECT  Fname, Lname, email, tel, Pword FROM student where Fname = '$fname'  AND Lname = '$lname'   AND email = '$email' AND tel= '$number' And Pword =' $Pword '"
);

// var_dump($check_email);
if (mysqli_num_rows($check_login) > 0) {
    echo "<script LANGUAGE='JavaScript'>
    window.alert('You are already a member of the school');
    window.location.href='addperson.html';
    </script>";
} else {
    $sql = "INSERT INTO student(fname, lname, email, tel, Pword) Values('$fname','$lname','$email','$number','$Pword')";
   
    $results = mysqli_query($conn, $sql);
    if ($results) {
        echo "<script LANGUAGE='JavaScript'>
        window.alert('You have successfully added a person);
        window.location.href=view.php;
        </script>";
    }
}

?>
 
 
    
</body>
</html>