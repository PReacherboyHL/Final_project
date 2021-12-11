<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .wrapper{
            color:rgb(104,7,7)
        }
        table tr td{
            color:rgb(104,7,7)
        }

        table tr td:last-child{
            width: 70px;
        }
    </style>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left" style= "color: black;">Classes</h2>
                        
                        

 
                        <form class=" pull-right" action="addclasses.html" method="post">
    
                            <button  class="btn btn-outline-success my-2 my-sm-0" type="submit" style= "padding: 12px;  background: #427285;
                                border-top-left-radius: 5px;
                                    border-bottom-right-radius: 5px;
                                    width: 130px;
                                    border: none;
                                    margin: 6px 0 50px 0px;
                                    cursor: pointer;
                                    color: #fff;
                                    font-weight: 700;
                                     font-size: 15px;" >Add new Classes</button>
                         </form>
</nav>
                    </div>
                    <?php
                    // Include config file
                    require_once 'dbconn.php';

                    // Attempt select query execution
                    $sql = 'SELECT * FROM class';
                    if ($result = mysqli_query($link, $sql)) {
                        if (mysqli_num_rows($result) > 0) {
                            echo '<table class="table table-bordered table-striped">';
                            echo '<thead>';
                            echo '<tr>';
                            echo '<th>Class_id</th>';
                            echo '<th>Coursename</th>';
                          
                            echo '</tr>';
                            echo '</thead>';
                            echo '<tbody>';
                            while ($row = mysqli_fetch_array($result)) {
                                echo '<tr>';
                                echo '<td>' . $row['Class_id'] . '</td>';
                                echo '<td>' . $row['Coursename'] . '</td>';
                               
                               

                                echo '<td>';

                                echo '<a href="updateclass.php?Class_id=' .
                                    $row['Class_id'] .
                                    '" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                echo '<a href="deleteclasses.php?Class_id=' .
                                    $row['Class_id'] .
                                    '" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                echo '</td>';
                                echo '</tr>';
                            }
                            echo '</tbody>';
                            echo '</table>';
                            // Free result set
                            mysqli_free_result($result);
                        } else {
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } else {
                        echo 'Oops! Something went wrong. Please try again later.';
                    }

                    // Close connection
                    mysqli_close($link);
                    ?>
                </div>
            </div>        
        </div>
    </div>
    <form class=" pull-right" action="Admindashboard.php" method="post">
    
    <button  class="btn btn-outline-success my-2 my-sm-0" type="submit" style= "padding: 12px;  background: #427285;
        border-top-left-radius: 5px;
            border-bottom-right-radius: 5px;
            width: 130px;
            border: none;
            margin: 6px 0 50px 0px;
            cursor: pointer;
            color: #fff;
            font-weight: 700;
             font-size: 15px;" >Back to admin</button>
 </form>
    
</body>
</html>