<?php
// Include config file
require_once 'dbconn.php';

// Define variables and initialize with empty values
$fname = $lname = $email = $tel  = $Pword = ''
;
$fname_err = $lname_err = $email_err = $tel_err = $Pword_err = 
    '';

// Processing form data when form is submitted
if (isset($_POST['Student_id']) && !empty($_POST['Student_id'])) {
    // Get hidden input value
    $Student_id = $_POST['Student_id'];

    // Validate firstname
    $input_fname = trim($_POST['Fname']);
    if (empty($input_fname)) {
        $fname_err = 'Please enter a first name.';
    } elseif (
        !filter_var($input_fname, FILTER_VALIDATE_REGEXP, [
            'options' => ['regexp' => '/^[a-zA-Z\s]+$/'],
        ])
    ) {
        $fname_err = 'Please enter a first valid name.';
    } else {
        $fname = $input_fname;
    }

    // Validate lastname
    $input_lname = trim($_POST['Lname']);
    if (empty($input_lname)) {
        $lname_err = 'Please enter a last name.';
    } elseif (
        !filter_var($input_lname, FILTER_VALIDATE_REGEXP, [
            'options' => ['regexp' => '/^[a-zA-Z\s]+$/'],
        ])
    ) {
        $lname_err = 'Please enter a valid last name.';
    } else {
        $lname = $input_lname;
    }

    // Validate address address
    $input_email = trim($_POST['email']);
    if (empty($input_email)) {
        $address_err = 'Please enter an email address.';
    } else {
        $email = $input_email;
    }

   

    // Validate gender
    $input_tel = trim($_POST['tel']);
    if (empty($input_tel)) {
        $tel_err = 'Please select your tel.';
    } else {
        $tel = $input_tel;
    }

   

    // Validate club name
    $input_Pword = trim($_POST['Pword']);
    if (empty($input_Pword)) {
        $Pword_err = 'Please select a password';
    } else {
        $Pword = $input_Pword;
    }

    // Check input errors before inserting in database
    if (
        empty($fname_err) &&
        empty($lname_err) &&
        empty($email_err) &&
        empty($tel_err) &&
        empty($Pword_err) 
      
      ) {
        // Prepare an update statement
        $sql =
            'UPDATE student SET `Fname`=?,`Lname`=?,`email`=?,`tel`=?,`Pword`=? WHERE `Student_id`=?';

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters

            // Set parameters
            $param_fname = $fname;
            $param_lname = $lname;
            $param_email = $email;
            $param_tel = $tel;
            $param_Pword = $Pword;
            $param_Student_id = $Student_id;
           

            mysqli_stmt_bind_param(
                $stmt,
                'sssisi',
                $param_fname,
                $param_lname,
                $param_email,
                $param_tel,
                $param_Pword,
                $param_Student_id
                
                
            );

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Records updated successfully. Redirect to landing page
                header('location: view.php');
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
    if (isset($_GET['Student_id']) && !empty(trim($_GET['Student_id']))) {
        // Get URL parameter
        $Student_id = trim($_GET['Student_id']);

        // Prepare a select statement
        $sql = 'SELECT * FROM student WHERE Student_id = ?';
        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, 'i', $param_Student_id);

            // Set parameters
            $param_Student_id = $Student_id;

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                $result = mysqli_stmt_get_result($stmt);

                if (mysqli_num_rows($result) == 1) {
                    /* Fetch result row as an associative array. Since the result set
                     contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

                    // Retrieve individual field value
                    
                    $fname = $row['Fname'];
                    $lname = $row['Lname'];
                    $email = $row['email'];
                    $tel = $row['tel'];
                    $Pword = $row['Pword'];
                    $Student_id= $row['Student_id'];
                    
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
                        <input type="hidden" name="Student_id" value="<?php echo $_GET[
                        'Student_id'
                    ]; ?>">


                        <!-- Edit box for first name-->
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="Fname" class="form-control 
                            <?php echo !empty($fname_err)
                                ? 'is-invalid'
                                : ''; ?>" value="<?php echo $fname; ?>">
                            <span class="invalid-feedback"><?php echo $fname_err; ?></span>
                        </div>

                        <!-- Edit box for last name-->
                        <div class="form-group">
                            <label>last Name</label>
                            <input type="text" name="Lname" class="form-control 
                            <?php echo !empty($lname_err)
                                ? 'is-invalid'
                                : ''; ?>" value="<?php echo $lname; ?>">
                            <span class="invalid-feedback"><?php echo $lname_err; ?></span>
                        </div>

                        <!-- Edit box for email last name-->
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control 
                            <?php echo !empty($email_err)
                                ? 'is-invalid'
                                : ''; ?>" value="<?php echo $email; ?>">
                            <span class="invalid-feedback"><?php echo $email_err; ?></span>
                        </div>
                        
                        <!-- Edit Student ID -->
                        <div class="form-group">
                            <label>tel</label>
                            <input type="tel" name="tel" class="form-control
                             <?php echo !empty($tel_err)
                                 ? 'is-invalid'
                                 : ''; ?>" value="<?php echo $tel; ?>">
                            <span class="invalid-feedback"><?php echo $tel_err; ?></span>
                        </div>


                       


                        <!-- Edit box for class-->
                        <div class="form-group">
                            <div class="row">
                        <div class="col-sm-6 mb-3"> <label>Password</label> <br><input type="text" name="Pword" id="Pword" class="input-field"> </div>
                            </div>
                            <?php echo !empty($Pword_err)
                                ? 'is-invalid'
                                : ''; ?>
                            <span class="invalid-feedback"><?php echo $Pword_err; ?></span>
                        </div>


                        
               


                        
                        
                        <input type="hidden" name="Student_id" value="<?php echo $Student_id; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
