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
 
    $group_ids = validate($_POST['group_ids']);
   

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
    "SELECT  group_ids FROM groupmembers where group_ids = '$group_ids' "
);

// var_dump($check_email);
if (mysqli_num_rows($check_login) > 0) {
    echo "<script LANGUAGE='JavaScript'>
    window.alert('This group already exists');
    window.location.href='addstudygroupmembers.html';
    </script>";
} else {
    $sql = "INSERT INTO groupmembers(group_ids) Values('$group_ids')";
    $results = mysqli_query($conn, $sql);
    if ($results) {
        echo "<script LANGUAGE='JavaScript'>
        window.alert('You have successfully added a person);
        window.location.href=addstudygroupmembers.html';
        </script>";
    }
}

?>
 
 
    
</body>
</html>