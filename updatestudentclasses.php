<?php
// Include config file
require_once 'dbconn.php';

// Define variables and initialize with empty values
$class_id1 = $class_id2 = $class_id3 = $class_id4  = ''
;
$class_id1_err = $class_id2_err = $class_id3_err = $class_id4_err = 
    '';

// Processing form data when form is submitted
if (isset($_POST['student_id']) && !empty($_POST['student_id'])) {
    // Get hidden input value
    $student_id = $_POST['student_id'];

    // Validate firstname
    $input_class_id1 = trim($_POST['class_id1']);
    if (empty($input_class_id1)) {
        $class_id1_err = 'Please enter a class id.';
    } elseif (
        !filter_var($input_class_id1, FILTER_VALIDATE_REGEXP, [
            'options' => ['regexp' => '/^[0-9]+$/'],
        ])
    ) {
        $class_id1_err = 'Please enter a valid class_id.';
    } else {
        $class_id1 = $input_class_id1;
    }

    // Validate lastname
    $input_class_id2 = trim($_POST['class_id2']);
    if (empty($input_class_id2)) {
        $class_id2_err = 'Please enter a last name.';
    } elseif (
        !filter_var($input_class_id2, FILTER_VALIDATE_REGEXP, [
            'options' => ['regexp' => '/^[0-9]+$/'],
        ])
    ) {
        $class_id2_err = 'Please enter a valid class id.';
    } else {
        $class_id2 = $input_class_id2;
    }

    // Validate address address
    $input_class_id3 = trim($_POST['class_id3']);
    if (empty($input_class_id3)) {
        $address_err = 'Please enter a valid class id.';
    } else {
        $class_id3 = $input_class_id3;
    }

   

    // Validate gender
    $input_class_id4 = trim($_POST['class_id4']);
    if (empty($input_class_id4)) {
        $class_id4_err = 'Please select your class_id.';
    } else {
        $class_id4 = $input_class_id4;
    }

   

    // Check input errors before inserting in database
    if (
        empty($class_id1_err) &&
        empty($class_id2_err) &&
        empty($class_id3_err) &&
        empty($class_id4_err) 
      
      
      ) {
        // Prepare an update statement
        $sql =
            'UPDATE studentclasses SET `class_id1`=?,`class_id2`=?,`class_id3`=?,`class_id4`=? WHERE `student_id`=?';

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters

            // Set parameters
            $param_class_id1 = $class_id1;
            $param_class_id2 = $class_id2;
            $param_class_id3 = $class_id3;
            $param_class_id4 = $class_id4;
            $param_student_id = $student_id;
           

            mysqli_stmt_bind_param(
                $stmt,
                'iiiii',
                $param_class_id1,
                $param_class_id2,
                $param_class_id3,
                $param_class_id4,
                $param_student_id
                
                
            );

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Records updated successfully. Redirect to landing page
                header('location: viewstudentclasses.php');
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
    if (isset($_GET['student_id']) && !empty(trim($_GET['student_id']))) {
        // Get URL parameter
        $student_id = trim($_GET['student_id']);

        // Prepare a select statement
        $sql = 'SELECT * FROM studentclasses WHERE student_id = ?';
        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, 'i', $param_student_id);

            // Set parameters
            $param_student_id = $student_id;

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                $result = mysqli_stmt_get_result($stmt);

                if (mysqli_num_rows($result) == 1) {
                    /* Fetch result row as an associative array. Since the result set
                     contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

                    // Retrieve individual field value
                    
                    $class_id1 = $row['class_id1'];
                    $class_id2 = $row['class_id2'];
                    $class_id3 = $row['class_id3'];
                    $class_id4 = $row['class_id4'];
                    $student_id= $row['student_id'];
                    
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
                        <input type="hidden" name="student_id" value="<?php echo $_GET[
                        'student_id'
                    ]; ?>">


                        <!-- Edit box for first name-->
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="class_id1" class="form-control 
                            <?php echo !empty($class_id1_err)
                                ? 'is-invalid'
                                : ''; ?>" value="<?php echo $class_id1; ?>">
                            <span class="invalid-feedback"><?php echo $class_id1_err; ?></span>
                        </div>

                        <!-- Edit box for last name-->
                        <div class="form-group">
                            <label>last Name</label>
                            <input type="text" name="class_id2" class="form-control 
                            <?php echo !empty($class_id2_err)
                                ? 'is-invalid'
                                : ''; ?>" value="<?php echo $class_id2; ?>">
                            <span class="invalid-feedback"><?php echo $class_id2_err; ?></span>
                        </div>

                        <!-- Edit box for class_id3 last name-->
                        <div class="form-group">
                            <label>class_id3</label>
                            <input type="text" name="class_id3" class="form-control 
                            <?php echo !empty($class_id3_err)
                                ? 'is-invalid'
                                : ''; ?>" value="<?php echo $class_id3; ?>">
                            <span class="invalid-feedback"><?php echo $class_id3_err; ?></span>
                        </div>
                        
                        <!-- Edit student ID -->
                        <div class="form-group">
                            <label>class_id4</label>
                            <input type="text" name="class_id4" class="form-control
                             <?php echo !empty($class_id4_err)
                                 ? 'is-invalid'
                                 : ''; ?>" value="<?php echo $class_id4; ?>">
                            <span class="invalid-feedback"><?php echo $class_id4_err; ?></span>
                        </div>


                       


                    

                        
               


                        
                        
                        <input type="hidden" name="student_id" value="<?php echo $student_id; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
