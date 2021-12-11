<?php
// Include config file
require_once 'dbconn.php';

// Define variables and initialize with empty values
$Student_id1 = $Student_id2 = $Student_id3 = $Student_id4  = $Student_id5 = $Student_id6 = $Student_id7 = $Student_id8 =  $Student_id9 = $Student_id10 = $Student_id11 = $Student_id12  = ''
;
$Student_id1_err = $Student_id2_err = $Student_id3_err = $Student_id4_err = $Student_id5_err = $Student_id6_err = $Student_id7_err = $Student_id8_err = $Student_id9_err = $Student_id10_err = $Student_id11_err = $Student_id12_err =
    '';

// Processing form data when form is submitted
if (isset($_POST['Classid']) && !empty($_POST['Classid'])) {
    // Get hidden input value
    $Classid = $_POST['Classid'];

    // Validate firstname
    $input_Student_id1 = trim($_POST['Student_id1']);
    if (empty($input_Student_id1)) {
        $Student_id1_err = 'Please enter a class id.';
    } elseif (
        !filter_var($input_Student_id1, FILTER_VALIDATE_REGEXP, [
            'options' => ['regexp' => '/^[0-9]+$/'],
        ])
    ) {
        $Student_id1_err = 'Please enter a valid student_id.';
    } else {
        $Student_id1 = $input_Student_id1;
    }

    // Validate lastname
    $input_Student_id2 = trim($_POST['Student_id2']);
    if (empty($input_Student_id2)) {
        $Student_id2_err = 'Please enter a last name.';
    } elseif (
        !filter_var($input_Student_id2, FILTER_VALIDATE_REGEXP, [
            'options' => ['regexp' => '/^[0-9]+$/'],
        ])
    ) {
        $Student_id2_err = 'Please enter valid student id.';
    } else {
        $Student_id2 = $input_Student_id2;
    }

    // Validate address address
    $input_Student_id3 = trim($_POST['Student_id3']);
    if (empty($input_Student_id3)) {
        $address_err = 'Please enter valid student id.';
    } else {
        $Student_id3 = $input_Student_id3;
    }

   

    // Validate gender
    $input_Student_id4 = trim($_POST['Student_id4']);
    if (empty($input_Student_id4)) {
        $Student_id4_err = 'Please select your Student_id4.';
    } else {
        $Student_id4 = $input_Student_id4;
    }

    $input_Student_id5 = trim($_POST['Student_id5']);
    if (empty($input_Student_id5)) {
        $Student_id5_err = 'Please enter a last name.';
    } elseif (
        !filter_var($input_Student_id5, FILTER_VALIDATE_REGEXP, [
            'options' => ['regexp' => '/^[0-9]+$/'],
        ])
    ) {
        $Student_id5_err = 'Please enter valid student id.';
    } else {
        $Student_id5 = $input_Student_id2;
    }
 
    $input_Student_id6 = trim($_POST['Student_id6']);
    if (empty($input_Student_id6)) {
        $Student_id6_err = 'Please enter a last name.';
    } elseif (
        !filter_var($input_Student_id6, FILTER_VALIDATE_REGEXP, [
            'options' => ['regexp' => '/^[0-9]+$/'],
        ])
    ) {
        $Student_id6_err = 'Please enter valid student id.';
    } else {
        $Student_id6 = $input_Student_id2;
    }
    
    $input_Student_id7 = trim($_POST['Student_id7']);
    if (empty($input_Student_id7)) {
        $Student_id7_err = 'Please enter a last name.';
    } elseif (
        !filter_var($input_Student_id7, FILTER_VALIDATE_REGEXP, [
            'options' => ['regexp' => '/^[0-9]+$/'],
        ])
    ) {
        $Student_id7_err = 'Please enter valid student id.';
    } else {
        $Student_id7 = $input_Student_id2;
    }
    
    $input_Student_id8 = trim($_POST['Student_id8']);
    if (empty($input_Student_id8)) {
        $Student_id8_err = 'Please enter a last name.';
    } elseif (
        !filter_var($input_Student_id8, FILTER_VALIDATE_REGEXP, [
            'options' => ['regexp' => '/^[0-9]+$/'],
        ])
    ) {
        $Student_id8_err = 'Please enter valid student id.';
    } else {
        $Student_id8 = $input_Student_id8;
    }
    
    $input_Student_id9 = trim($_POST['Student_id9']);
    if (empty($input_Student_id9)) {
        $Student_id9_err = 'Please enter a class id.';
    } elseif (
        !filter_var($input_Student_id9, FILTER_VALIDATE_REGEXP, [
            'options' => ['regexp' => '/^[0-9]+$/'],
        ])
    ) {
        $Student_id9_err = 'Please enter a valid class_id.';
    } else {
        $Student_id9 = $input_Student_id1;
    }
   
    $input_Student_id10 = trim($_POST['Student_id10']);
    if (empty($input_Student_id10)) {
        $Student_id10_err = 'Please enter a class id.';
    } elseif (
        !filter_var($input_Student_id10, FILTER_VALIDATE_REGEXP, [
            'options' => ['regexp' => '/^[0-9]+$/'],
        ])
    ) {
        $Student_id10_err = 'Please enter a valid student_id.';
    } else {
        $Student_id10 = $input_Student_id10;
    }

    $input_Student_id11 = trim($_POST['Student_id11']);
    if (empty($input_Student_id11)) {
        $Student_id11_err = 'Please enter a class id.';
    } elseif (
        !filter_var($input_Student_id11, FILTER_VALIDATE_REGEXP, [
            'options' => ['regexp' => '/^[0-9]+$/'],
        ])
    ) {
        $Student_id11_err = 'Please enter a valid student_id.';
    } else {
        $Student_id11 = $input_Student_id11;
    }

    $input_Student_id12 = trim($_POST['Student_id12']);
    if (empty($input_Student_id12)) {
        $Student_id12_err = 'Please enter a class id.';
    } elseif (
        !filter_var($input_Student_id12, FILTER_VALIDATE_REGEXP, [
            'options' => ['regexp' => '/^[0-9]+$/'],
        ])
    ) {
        $Student_id12_err = 'Please enter a valid student_id.';
    } else {
        $Student_id12 = $input_Student_id12;
    }
    

    // Check input errors before inserting in database
    if (
        empty($Student_id1_err) &&
        empty($Student_id2_err) &&
        empty($Student_id3_err) &&
        empty($Student_id4_err) &&
        empty($Student_id5_err) &&
        empty($Student_id6_err) &&
        empty($Student_id7_err) &&
        empty($Student_id8_err) &&
        empty($Student_id9_err) &&
        empty($Student_id10_err) &&
        empty($Student_id11_err) &&
        empty($Student_id12_err) 
      
      ) {
        // Prepare an update statement
        $sql =
            'UPDATE classmembers SET `Student_id1`=?,`Student_id2`=?,`Student_id3`=?,`Student_id4`=?,  `Student_id5`=?,`Student_id6`=?,`Student_id7`=?,`Student_id8`=?, `Student_id9`=?,`Student_id10`=?,`Student_id11`=?,`Student_id12`=? WHERE `Classid`=?';

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters

            // Set parameters
            $param_Student_id1 = $Student_id1;
            $param_Student_id2 = $Student_id2;
            $param_Student_id3 = $Student_id3;
            $param_Student_id4 = $Student_id4;
            $param_Student_id5 = $Student_id5;
            $param_Student_id6 = $Student_id6;
            $param_Student_id7 = $Student_id7;
            $param_Student_id8 = $Student_id8;
            $param_Student_id9 = $Student_id9;
            $param_Student_id10 = $Student_id10;
            $param_Student_id11 = $Student_id11;
            $param_Student_id12 = $Student_id12;
            $param_Classid = $Classid;
           

            mysqli_stmt_bind_param(
                $stmt,
                'iiiiiiiiiiiii',
                $param_Student_id1,
                $param_Student_id2,
                $param_Student_id3,
                $param_Student_id4,
                $param_Student_id5,
                $param_Student_id6,
                $param_Student_id7,
                $param_Student_id8,
                $param_Student_id9,
                $param_Student_id10,
                $param_Student_id11,
                $param_Student_id12,
                $param_Classid
                
                
            );

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Records updated successfully. Redirect to landing page
                header('location: viewclassmembers.php');
                exit();
            } else {
                echo 'Oops! Something went wrong. Please try again later.';
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }

    // Close connection
    mysqli_close($link);
} else {
    // Check existence of id parameter before processing further
    if (isset($_GET['Classid']) && !empty(trim($_GET['Classid']))) {
        // Get URL parameter
        $Classid = trim($_GET['Classid']);

        // Prepare a select statement
        $sql = 'SELECT * FROM classmembers WHERE Classid = ?';
        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, 'i', $param_Classid);

            // Set parameters
            $param_Classid = $Classid;

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                $result = mysqli_stmt_get_result($stmt);

                if (mysqli_num_rows($result) == 1) {
                    /* Fetch result row as an associative array. Since the result set
                     contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

                    // Retrieve individual field value
                    
                    $Student_id1 = $row['Student_id1'];
                    $Student_id2 = $row['Student_id2'];
                    $Student_id3 = $row['Student_id3'];
                    $Student_id4 = $row['Student_id4'];
                    $Student_id5 = $row['Student_id5'];
                    $Student_id6 = $row['Student_id6'];
                    $Student_id7 = $row['Student_id7'];
                    $Student_id8 = $row['Student_id8'];
                    $Student_id9 = $row['Student_id9'];
                    $Student_id10 = $row['Student_id10'];
                    $Student_id11 = $row['Student_id11'];
                    $Student_id12 = $row['Student_id12'];
                    $Classid= $row['Classid'];
                    
                } else {
                    // URL doesn't contain valid id. Redirect to error page
                    header('location: error.php');
                    exit();
                }
            } else {
                echo 'Oops! Something went wrong. Please try again later.';
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);

        // Close connection
        mysqli_close($link);
    } else {
        // URL doesn't contain id parameter. Redirect to error page
        header('location: error.php');
        exit();
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Update Record</h2>
                    <p>Please edit the input values and submit to update group table.</p>
                    <form action="" method="POST">
                        <div class="form-group">
                        <input type="hidden" name="Classid" value="<?php echo $_GET[
                        'Classid'
                    ]; ?>">


                        <!-- Edit box for first student-->
                        <div class="form-group">
                            <label>Student_id1</label>
                            <input type="text" name="Student_id1" class="form-control 
                            <?php echo !empty($Student_id1_err)
                                ? 'is-invalid'
                                : ''; ?>" value="<?php echo $Student_id1; ?>">
                            <span class="invalid-feedback"><?php echo $Student_id1_err; ?></span>
                        </div>

                        <!-- Edit box for student-->
                        <div class="form-group">
                            <label>Student_id2</label>
                            <input type="text" name="Student_id2" class="form-control 
                            <?php echo !empty($Student_id2_err)
                                ? 'is-invalid'
                                : ''; ?>" value="<?php echo $Student_id2; ?>">
                            <span class="invalid-feedback"><?php echo $Student_id2_err; ?></span>
                        </div>

                        <!-- Edit box for Student -->
                        <div class="form-group">
                            <label>Student_id3</label>
                            <input type="text" name="Student_id3" class="form-control 
                            <?php echo !empty($Student_id3_err)
                                ? 'is-invalid'
                                : ''; ?>" value="<?php echo $Student_id3; ?>">
                            <span class="invalid-feedback"><?php echo $Student_id3_err; ?></span>
                        </div>
                        
                        <!-- Edit student ID -->
                        <div class="form-group">
                            <label>Student_id4</label>
                            <input type="text" name="Student_id4" class="form-control
                             <?php echo !empty($Student_id4_err)
                                 ? 'is-invalid'
                                 : ''; ?>" value="<?php echo $Student_id4; ?>">
                            <span class="invalid-feedback"><?php echo $Student_id4_err; ?></span>
                        </div> 


                        <!-- Edit box for first student-->
                        <div class="form-group">
                            <label>Student_id5</label>
                            <input type="text" name="Student_id5" class="form-control 
                            <?php echo !empty($Student_id5_err)
                                ? 'is-invalid'
                                : ''; ?>" value="<?php echo $Student_id5; ?>">
                            <span class="invalid-feedback"><?php echo $Student_id5_err; ?></span>
                        </div>

                        <!-- Edit box for student-->
                        <div class="form-group">
                            <label>Student_id6</label>
                            <input type="text" name="Student_id6" class="form-control 
                            <?php echo !empty($Student_id6_err)
                                ? 'is-invalid'
                                : ''; ?>" value="<?php echo $Student_id6; ?>">
                            <span class="invalid-feedback"><?php echo $Student_id6_err; ?></span>
                        </div>

                        <!-- Edit box for Student -->
                        <div class="form-group">
                            <label>Student_id7</label>
                            <input type="text" name="Student_id7" class="form-control 
                            <?php echo !empty($Student_id7_err)
                                ? 'is-invalid'
                                : ''; ?>" value="<?php echo $Student_id7; ?>">
                            <span class="invalid-feedback"><?php echo $Student_id7_err; ?></span>
                        </div>
                        
                        <!-- Edit student ID -->
                        <div class="form-group">
                            <label>Student_id8</label>
                            <input type="text" name="Student_id8" class="form-control
                             <?php echo !empty($Student_id8_err)
                                 ? 'is-invalid'
                                 : ''; ?>" value="<?php echo $Student_id8; ?>">
                            <span class="invalid-feedback"><?php echo $Student_id8_err; ?></span>
                        </div>

                        <div class="form-group">
                            <label>Student_id9</label>
                            <input type="text" name="Student_id9" class="form-control 
                            <?php echo !empty($Student_id9_err)
                                ? 'is-invalid'
                                : ''; ?>" value="<?php echo $Student_id9; ?>">
                            <span class="invalid-feedback"><?php echo $Student_id9_err; ?></span>
                        </div>

                        <div class="form-group">
                            <label>Student_id10</label>
                            <input type="text" name="Student_id10" class="form-control 
                            <?php echo !empty($Student_id10_err)
                                ? 'is-invalid'
                                : ''; ?>" value="<?php echo $Student_id10; ?>">
                            <span class="invalid-feedback"><?php echo $Student_id10_err; ?></span>
                        </div>

                        <div class="form-group">
                            <label>Student_id11</label>
                            <input type="text" name="Student_id11" class="form-control 
                            <?php echo !empty($Student_id11_err)
                                ? 'is-invalid'
                                : ''; ?>" value="<?php echo $Student_id11; ?>">
                            <span class="invalid-feedback"><?php echo $Student_id11_err; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Student_id12</label>
                            <input type="text" name="Student_id12" class="form-control 
                            <?php echo !empty($Student_id12_err)
                                ? 'is-invalid'
                                : ''; ?>" value="<?php echo $Student_id12; ?>">
                            <span class="invalid-feedback"><?php echo $Student_id12_err; ?></span>
                        </div>




                       


                    

                        
               


                        
                        
                        <input type="hidden" name="Classid" value="<?php echo $Classid; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
