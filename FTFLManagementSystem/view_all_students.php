<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Students List</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

       
        <link rel="stylesheet" media="screen" href="css/bootstrap.css">
        <link rel="stylesheet" media="screen" href="css/bootstrap.min.css"> 
      
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css">
        <link rel="stylesheet" media="screen" href="css/custom.css">
</head>

<body>
    
    
        <?php
            include '/CommonFeatures/navigation_bar.php';
        ?>
    
    
    
<div class="container">
            <?php
                    include '/CommonFeatures/dashboard_nav_bar.php';
            ?>

    <!--Thumbanil row-->
    <div class="row">
        
                <?php 
                        include '/CommonFeatures/menu_bar.php';
                ?>
                
        <div class="col-md-8">
                      
            
            <div class="row">
                <h1>List of Students</h1>
                <br/>
            </div>
            <div class="row">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Tahsin Abrar</td>
                        <td>tahsinabrar@gmail.com</td>
                        
                        <td>
                            <a href="student_details.php">Details</a> |
                            <a href="edit_student.php">Edit</a> |
                            <a href="delete_student.php">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Towfiqur Rahman</td>
                        <td>towfiqurrahman@gmail.com</td>
                        
                        <td>
                            <a href="student_details.php">Details</a> |
                            <a href="edit_student.php">Edit</a> |
                            <a href="delete_student.php">Delete</a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
    
       
         <?php
            include '/CommonFeatures/footer.php';
        ?>
    
    
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="https://code.jquery.com/jquery.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>

</body>
</html>