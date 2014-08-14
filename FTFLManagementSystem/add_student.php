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
        include 'navigation_bar.php';
        ?>
    
        
        <div class="container">
            <?php
                    include 'dashboard_nav_bar.php';
            ?>

            <!--Thumbanil row-->
            <div class="row">
                
                 <?php 
                        include 'menu_bar.php';
                ?>
                
                <div class="col-md-8">
                    
                   
                    
                    <div class="row">
                        <h1>Student Registration Form</h1>
                        <br/>
                        
                    </div>
                    
                    <div class="row">
                        
                        <form class ="col-md-7" class="form-group form-block" action="#" method="">
                            
                            <h3><label>Student's Name</label></h3>
                            <input class="form-control" type="text" placeholder="Enter Your Name">
                            <br/>
                            
                            <h3><label>Student's Email</label></h3>
                            <input class="form-control" type="text" placeholder="Enter Your Email">
                            <br/>
                          
                            
                            <input class="form-control btn btn-success" type="submit" value="Add Student">
                        </form>
                        
                    </div>
                </div>
            </div>

        </div>
         
         <?php
            include 'footer.php';
        ?>
    
         
         
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/bootstrap.min.js"></script>
        
        <script src="https://code.jquery.com/jquery.js"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>


    </body>
</html>