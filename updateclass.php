<?php
// Include config file
require_once 'dbconn.php';

// Define variables and initialize with empty values
$Coursename= ''
;
$Coursename_err = 
    '';

// Processing form data when form is submitted
if (isset($_POST['Class_id']) && !empty($_POST['Class_id'])) {
    // Get hidden input value
    $Class_id = $_POST['Class_id'];

    // Validate firstname
    $input_Coursename= trim($_POST['Coursename']);
    if (empty($input_Coursename)) {
        $Coursename_err = 'Please enter a Coursename';
    } elseif (
        !filter_var($input_Coursename, FILTER_VALIDATE_REGEXP, [
            'options' => ['regexp' => '/^[a-zA-Z\s]+$/'],
        ])
    ) {
        $Coursename_err = 'Please enter a first valid name.';
    } else {
        $Coursename= $input_Coursename;
    }

   

    // Check input errors before inserting in database
    if (
        empty($Coursename_err) 
      
      ) {
        // Prepare an update statement
        $sql =
            'UPDATE class SET `Coursename`=? WHERE `Class_id`=?';

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters

            // Set parameters
            $param_Coursename= $Coursename;
            $param_Class_id = $Class_id;
           

            mysqli_stmt_bind_param(
                $stmt,
                'si',
                $param_Coursename,
                $param_Class_id
                
                
            );

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Records updated successfully. Redirect to landing page
                header('location: viewclasses.php');
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
    if (isset($_GET['Class_id']) && !empty(trim($_GET['Class_id']))) {
        // Get URL parameter
        $Class_id = trim($_GET['Class_id']);

        // Prepare a select statement
        $sql = 'SELECT * FROM class WHERE Class_id = ?';
        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, 'i', $param_Class_id);

            // Set parameters
            $param_Class_id = $Class_id;

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                $result = mysqli_stmt_get_result($stmt);

                if (mysqli_num_rows($result) == 1) {
                    /* Fetch result row as an associative array. Since the result set
                     contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

                    // Retrieve individual field value
                    
                    $Coursename= $row['Coursename'];
                    $Class_id= $row['Class_id'];
                    
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
                        <input type="hidden" name="Class_id" value="<?php echo $_GET[
                        'Class_id'
                    ]; ?>">


                        <!-- Edit box for first name-->
                        <div class="form-group">
                            <label>Coursename</label>
                            <input type="text" name="Coursename" class="form-control 
                            <?php echo !empty($Coursename_err)
                                ? 'is-invalid'
                                : ''; ?>" value="<?php echo $Coursename; ?>">
                            <span class="invalid-feedback"><?php echo $Coursename_err; ?></span>
                        </div>

                        


                        

                        
                        
                        <input type="hidden" name="Class_id" value="<?php echo $Class_id; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
