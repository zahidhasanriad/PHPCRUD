<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Update Course</title>

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
                        
                        <h1>Edit Course</h1>
                        <br/>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-7 center-block">
                            
                            <form class="form-group" action="editing_course.php" method="post">
                                
                                <h3><label>Course Title: </label></h3>
                                  <select  name="courses_name" class="form-control">
                                   
                                      <?php
                          
                                      //MySQL Database Connect 
                                      include '/CommonFeatures/database_connection.php';
                            
                                      
                                      $query = "select courses_name from courses";
                            
                                      $result_courses_name = mysql_query($query);
            
                                      while($row = mysql_fetch_array($result_courses_name))
                                      {
                                        echo "<option>".$row['courses_name']."</option>";
                                      }
                                        
                                    mysql_close(mysql_connect('localhost','root',''));    
                                
                                    ?>
                                  </select>
                                  <br/>
                                
                                <h3> <label>Course New Code: </label> </h3>
                                <input class="form-control" type="text" name="courses_Code" placeholder="Edit Course Code">
                                <br/>
                            
                                <h3> <label>Course New Title: </label> </h3>
                                <input class="form-control" type="text" name="courses_Name" placeholder="Edit Course Title">
                                <br/>
                                
                                <input class="form-control btn btn-success" type="submit" value="Update Course">
                                
                            </form>
                            
                        </div>
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