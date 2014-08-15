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
                  
                   <?php
                   
                    

                   //MySQL Database Connect 
                   include '/CommonFeatures/database_connection.php';

            $query = mysql_query("SELECT * from students Order by students_id");

            echo "<table class='table table-hover'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th>STUDENT ID</th>";
            echo "<th>STUDENT NAME</th>";
            echo "<th>STUDENT EMAIL</th>";
            echo "<th>ACTION</th>";
            echo "</tr>";
            echo "</thead>";
            echo"<tbody>";
            
            while ($data = mysql_fetch_object($query)) {
                
                echo "<tr>";
                echo "<td>".$data->students_id."</td>";
                echo "<td>".$data->students_name."</td>";
                echo "<td>".$data->students_email."</td>";
                echo"<td>"."<a href='student_details.php?student_Id=".$data->students_id."'>Details</a>"." | "."<a href='edit_student.php'>Edit</a>"." | "."<a href='delete_student.php'>Delete</a>"."</td>";
                echo "</tr>";
                
                
            }
            echo"</tbody>";
            echo "</table>";
                
                  

            ?>     
                        
                
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