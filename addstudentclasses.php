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
                <h2 class="text-uppercase">Welcome Admin!!</h2>
                <p><h5>Kindly enter your new classes name</h5></p>
                <br>
                <br>
                <br>
                
                <br>
                <br>
               
                <div class="form-field">
                    <h1><a href="Admindashboard.php" class="btn btn-primary btn-lg" id= "Homepagebtn"  role="button">Home page</a></h1>
                </div>
            </div>


            <!-- form content-->
            <form class="form-right" action="createstudentclasses.php" method="post" name="myForm" onsubmit="return(validate());">
                <h2 class="text-uppercase" style="color: black;">Add</h2>

                <!-- Class_id course_id-->
                
        
                <div class="mb-3"> <label>Student Id</label> <input type="text" name="student_id" id="student_id" class="input-field"> </div>

               

                    <!-- Register button-->
                    <div class="form-field"> <input type="submit" value="Register" class="Login" name="Register"> </div>
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