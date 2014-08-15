<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Update Student</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

       
        <link rel="stylesheet" media="screen" href="css/bootstrap.css">
        <link rel="stylesheet" media="screen" href="css/bootstrap.min.css"> 
      
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css">
        <link rel="stylesheet" media="screen" href="css/custom.css">
        
    </head>

    <body>
        
            
        <?php
        
            $student_name = $_POST['students_name'];
                
                //MySQL Database Connect 
                include '/CommonFeatures/database_connection.php';

                $student_query =mysql_query( "SELECT students_id from students where students_name = '$student_name'");
                
               
                $student_id = mysql_fetch_array($student_query);
                $student_id_selected = $student_id['students_id'];
        

                $query = mysql_query("SELECT * from students WHERE students_id=$student_id_selected");

                $data = mysql_fetch_object($query);

                if(isset($_POST["student_Name"]) && isset($_POST["student_Email"])){
                $student_Name = $_POST["student_Name"];
                $student_Email = $_POST["student_Email"];

                mysql_query("UPDATE students SET students_name='$student_Name',students_email='$student_Email'  WHERE students_id=$student_id_selected");
                //header('location: student_List.php?msg=edit');
                }
        ?>
        
        
        
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
                        
                        <h1>Edit Student</h1>
                        <br/>
                        
                    </div>
                    <div class="row">
                        
                        <form class ="col-md-7" class="form-group form-block" action="" method="post">
                            
                            <h3><label>Student Name: </label></h3>
                                  <select  name="students_name" class="form-control">
                                   
                                      <?php
                          
                                      //MySQL Database Connect 
                                      include '/CommonFeatures/database_connection.php';
                            
                                      
                                      $query = "select students_name from students";
                            
                                      $result_students_name = mysql_query($query);
            
                                      while($row = mysql_fetch_array($result_students_name))
                                      {
                                        echo "<option>".$row['students_name']."</option>";
                                      }
                                        
                                    mysql_close(mysql_connect('localhost','root',''));    
                                
                                    ?>
                                  </select>
                                  <br/>
                            
                            <h3><label>Student's New Name</label></h3>
                            <input class="form-control" type="text" name="student_Name" placeholder="Edit Student Name">
                            <br/>
                            
                            <h3><label>Student's New Email</label></h3>
                            <input class="form-control" type="text" name="student_Email" placeholder="Edit Student Email">
                            <br/>
                          
                            <input class="form-control btn btn-success" type="submit" value="Update Student">
                        </form>
                        
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