<?php
session_start();
 ob_start();
    include 'dbconn.php'; // Using database connection file here
    ob_end_clean();
    $error=" ";
if(isset($_POST['Login']))//Check when the login button is clicked
{   
    $id = $_POST['Student_id'];
    $Pword = $_POST['Pword'];

    $check = mysqli_query($link,"SELECT * from `student` WHERE (`Student_id`='$id' AND `Pword`='$Pword') ");
    if(mysqli_num_rows($check)==1){

   
    //Store variables in session
    $_SESSION['Student_id']= $id;
    header("location:Studentdashboard.php"); // redirects to members view page
    exit;  
}
else{
    $error= "Invalid login details";
}

}
mysqli_close($link); // Close connection
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="sign-up_style.css">
    <script src="signupScript.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>


<body>
    <br>
    <br>
    <br>
    <br>
    <br>
    
    <div class="containerr" style="background-size: 100%;">
        <div class="wrapper">
           

            <!-- left side of the form-->
            <div class="form-left">
                <h2 class="text-uppercase">Welcome Student!!</h2>
                <p><h5>Kindly Login</h5></p>
                <br>
                <br>
                <br>
                
                <br>
                <br>
               
                <div class="form-field">
                    <h1><a href="index.php" class="btn btn-primary btn-lg" id= " Homepagebtn"  role="button">Home page</a></h1>
                </div>
            </div>


            <!-- form content-->
            <form class="form-right" action="Studentlogin.php" method="post" name="myForm" onsubmit="return(validate());">
                <h2 class="text-uppercase" style="color: black;">Login</h2>

                <!-- Class_id course_id-->
                
        
                <div class="mb-3"> <label>Student ID</label> <input type="text" name="Student_id" id="Student_id" class="input-field"> </div>

                <div class="mb-3"> <label>Password</label> <input type="Password" name="Pword" id="Pword" class="input-field"> </div>

                    <!-- Register button-->
                    <div class="form-field"> <input type="submit" value="Login" class="Login" name="Login"> </div>
            </form>
            </div>
        </div>
        <br>
    <br>
    <br>
    <br>
    <br>

        <!-- footer  -->
        <footer class="page-footer">
            <div class="container">
                <div class="row">

                    <!-- footer left-side-->
                    <div class="col-lg-8 col-md-8 col-sm-12">
                        <h6 class="text-uppercase font-weight-bold">Additional Information</h6>
                        <p>Learnandco</p>
                        <p>A place where knowledge and skils are acquired</p>
                    </div>

                    <!-- right-side -->
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <h6 class="text-uppercase font-weight-bold">Contact</h6>
                        <p>(E) info@Learnandco.com
                            <br/>1 Dam Avenue, Cantonmetn, E/R

                            <br/>+233 55 174 7839</p>
                    </div>
                    <div>

        </footer>
        </div>
</body>

</html>