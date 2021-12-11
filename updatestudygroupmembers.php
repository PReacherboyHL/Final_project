<?php
// Include config file
require_once 'dbconn.php';

// Define variables and initialize with empty values
$member_id = $member_id2 = $member_id3 = $member_id4  = $member_id5 = ''
;
$member_id_err = $member_id2_err = $member_id3_err = $member_id4_err = $member_id5_err = 
    '';

// Processing form data when form is submitted
if (isset($_POST['group_ids']) && !empty($_POST['group_ids'])) {
    // Get hidden input value
    $group_ids = $_POST['group_ids'];

    // Validate firstname
   // Validate lastname
   $input_member_id = trim($_POST['member_id']);
   if (empty($input_member_id)) {
       $member_id_err = 'Please enter an id';
   } else {
       $member_id = $input_member_id;
   }
    // Validate lastname
    // Validate lastname
    $input_member_id2 = trim($_POST['member_id2']);
    if (empty($input_member_id2)) {
        $member_id2_err = 'Please enter an id';
    } else {
        $member_id2 = $input_member_id2;
    }

    // Validate address address
    $input_member_id3 = trim($_POST['member_id3']);
    if (empty($input_member_id3)) {
       $member_id3_err = 'Please enter an id';
    } else {
        $member_id3 = $input_member_id3;
    }

   

    // Validate gender
    $input_member_id4 = trim($_POST['member_id4']);
    if (empty($input_member_id4)) {
        $member_id4_err = 'Please enter an id';
    } else {
        $member_id4 = $input_member_id4;
    }

   

    // Validate club name
    $input_member_id5 = trim($_POST['member_id5']);
    if (empty($input_member_id5)) {
        $member_id5_err = 'Please enter an id';
    } else {
        $member_id5 = $input_member_id5;
    }

    // Check input errors before inserting in database
    if (
        empty($member_id_err) &&
        empty($member_id2_err) &&
        empty($member_id3_err) &&
        empty($member_id4_err) &&
        empty($member_id5_err) 
      
      ) {
        // Prepare an update statement
        $sql =
            'UPDATE groupmembers SET `member_id`=?,`member_id2`=?,`member_id3`=?,`member_id4`=?,`member_id5`=? WHERE `group_ids`=?';

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters

            // Set parameters
            $param_group_ids = $group_ids;
            $param_member_id = $member_id;
            $param_member_id2 = $member_id2;
            $param_member_id3 = $member_id3;
            $param_member_id4 = $member_id4;
            $param_member_id5 = $member_id5;
        
           

            mysqli_stmt_bind_param(
                $stmt,
                'iiiiii',
                $param_group_ids,
                $param_member_id,
                $param_member_id2,
                $param_member_id3,
                $param_member_id4,
                $param_member_id5
                
                
                
            );

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Records updated successfully. Redirect to landing page
                header('location: viewstudygroupmembers.php');
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
    if (isset($_GET['group_ids']) && !empty(trim($_GET['group_ids']))) {
        // Get URL parameter
        $group_ids = trim($_GET['group_ids']);

        // Prepare a select statement
        $sql = 'SELECT * FROM groupmembers WHERE group_ids = ?';
        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, 'i', $param_group_ids);

            // Set parameters
            $param_group_ids = $group_ids;

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                $result = mysqli_stmt_get_result($stmt);

                if (mysqli_num_rows($result) == 1) {
                    /* Fetch result row as an associative array. Since the result set
                     contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

                    // Retrieve individual field value
                    $group_ids= $row['group_ids'];
                    $member_id = $row['member_id'];
                    $member_id2 = $row['member_id2'];
                    $member_id3 = $row['member_id3'];
                    $member_id4 = $row['member_id4'];
                    $member_id5 = $row['member_id5'];
                    
                    
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
                        <input type="hidden" name="group_ids" value="<?php echo $_GET[
                        'group_ids'
                    ]; ?>">


                        <!-- Edit box for first name-->
                        <div class="form-group">
                            <label>Member id</label>
                            <input type="text" name="member_id" class="form-control 
                            <?php echo !empty($member_id_err)
                                ? 'is-invalid'
                                : ''; ?>" value="<?php echo $member_id; ?>">
                            <span class="invalid-feedback"><?php echo $member_id_err; ?></span>
                        </div>

                        <!-- Edit box for last name-->
                        <div class="form-group">
                            <label>Member id 2</label>
                            <input type="text" name="member_id2" class="form-control 
                            <?php echo !empty($member_id2_err)
                                ? 'is-invalid'
                                : ''; ?>" value="<?php echo $member_id2; ?>">
                            <span class="invalid-feedback"><?php echo $member_id2_err; ?></span>
                        </div>

                        <!-- Edit box for member_id3 last name-->
                        <div class="form-group">
                            <label>member_id3</label>
                            <input type="text" name="member_id3" class="form-control 
                            <?php echo !empty($member_id3_err)
                                ? 'is-invalid'
                                : ''; ?>" value="<?php echo $member_id3; ?>">
                            <span class="invalid-feedback"><?php echo $member_id3_err; ?></span>
                        </div>
                        
                        <!-- Edit Student ID -->
                        <div class="form-group">
                            <label>member_id4</label>
                            <input type="text" name="member_id4" class="form-control
                             <?php echo !empty($member_id4_err)
                                 ? 'is-invalid'
                                 : ''; ?>" value="<?php echo $member_id4; ?>">
                            <span class="invalid-feedback"><?php echo $member_id4_err; ?></span>
                        </div>


                        <div class="form-group">
                            <label>member_id5</label>
                            <input type="text" name="member_id5" class="form-control
                             <?php echo !empty($member_id5_err)
                                 ? 'is-invalid'
                                 : ''; ?>" value="<?php echo $member_id5; ?>">
                            <span class="invalid-feedback"><?php echo $member_id5_err; ?></span>
                        </div>


                       
        


                        
               


                        
                        
                        <input type="hidden" name="group_ids" value="<?php echo $group_ids; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
