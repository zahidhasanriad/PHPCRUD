<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Student Profile</title>

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
                <h1>Student Profile</h1>
                <br/>
            </div>
            
                <div class="row">
                    <form class="form-group form-inline" action="" method="">
                            <div class="row">
                                <div class="col-md-4">
                                    <br/><h4><label><b>Name: </b></label><br/></h4>
                                    <br/><h4><label><b>Email Address: </b></label><br/></h4>
                                    
                                </div>
                                <div class="col-md-8">
                                    
                                    <?php
                                        
                                        $student_Id = $_GET["student_Id"];
                                                    
                                        //MySQL Database Connect 
                                        include '/CommonFeatures/database_connection.php';
                                    
                                        
                                        $query = mysql_query("SELECT * from students WHERE students_id = $student_Id");
                                        
                                       // $students_id = $_GET["student_id"];
                                        
                                       // $query=mysql_query("SELECT students_name, students_email from students WHERE students_id='$students_id'");
                                    
                                        if($data = mysql_fetch_object($query)){
                                        
                                        echo "<hr><label><b>".$data->students_name."</b></label></h4>";
                                        echo "<hr><label><b>".$data->students_email."</b></label><br/></h4>";
                                        echo "<a href='edit_student.php' class='btn btn-primary' role='button'><span class='glyphicon glyphicon-edit'></span> Edit</a>";
                                        echo "<a href='delete_single_student.php?student_Id=".$data->students_id."' class='btn btn-danger' role='button'><span class='glyphicon glyphicon-remove'></span> Delete</a>";
                                        
                                        }
                                        
                                    ?>
    
                                    
                                </div>
                            </div>
                           
                           
                           
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