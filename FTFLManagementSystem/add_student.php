<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Student Registration</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

       
        <link rel="stylesheet" media="screen" href="css/bootstrap.css">
        <link rel="stylesheet" media="screen" href="css/bootstrap.min.css"> 
      
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css">
        <link rel="stylesheet" media="screen" href="css/custom.css">
        
    </head>

    <body>
        
        
        
        <?php
        
            //MySQL Database Connect 
            include '/CommonFeatures/database_connection.php';
        
            

            
            
            if(isset($_POST["students_Name"])){
                if(isset($_POST["students_Email"])){
                    
                     $students_Name = $_POST["students_Name"];
                     $students_Email = $_POST["students_Email"];
                
                

                mysql_query("INSERT into students (students_name,students_email) values ('$students_Name','$students_Email')");
                
                // header('location: view_All_Students.php?msg=add');
                }
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
                        <h1>Student Registration Form</h1>
                        <br/>
                        
                    </div>
                    
                    <div class="row">
                        
                        <form class ="col-md-7" class="form-group form-block" action="#" method="post">
                            
                            <h3><label>Student's Name</label></h3>
                            <input class="form-control" type="text" name="students_Name" placeholder="Enter Your Name">
                            <br/>
                            
                            <h3><label>Student's Email</label></h3>
                            <input class="form-control" type="text" name="students_Email" placeholder="Enter Your Email">
                            <br/>
                          
                            
                            <input class="form-control btn btn-success" type="submit" name="" value="Add Student">
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