<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Courses List</title>

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
                <h1>List of Courses</h1>
                <br/>
                
            </div>
            <div class="row">
                
                           
                    
                   <?php

                   //MySQL Database Connect 
                   include '/CommonFeatures/database_connection.php';

            $query = mysql_query("SELECT * from courses Order by courses_id");

            echo "<table class='table table-hover'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th>COURSE ID</th>";
            echo "<th>COURSE CODE</th>";
            echo "<th>COURSE TITLE</th>";
            echo "<th>ACTION</th>";
            echo "</tr>";
            echo "</thead>";
            echo"<tbody>";
            
            while ($data = mysql_fetch_object($query)) {
                echo "<tr>";
                echo "<td>".$data->courses_id."</td>";
                echo "<td>".$data->courses_code."</td>";
                echo "<td>".$data->courses_name."</td>";
                echo"<td>"."<a href='edit_course.php'>Edit</a>"." | "."<a href='delete_course.php'>Delete</a>"."</td>";
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