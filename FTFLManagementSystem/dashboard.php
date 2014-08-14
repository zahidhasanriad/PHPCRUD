<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        

        <title>Dashboard of FTFL Management System</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css">
    
        <link rel="stylesheet" href="css/custom.css">
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
                        <div class="col-md-4">
                        <div class="thumbnail">
                            <div class="caption">
                                <h3><span class="badge">1</span> New Students Registered</h3>
                                <p><a href="#" class="btn btn-primary" role="button">View All</a></p>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-4">
                            <div class="thumbnail">
                                <div class="caption">
                                    <h3><span class="badge">3</span> Students Registered</h3>
                                    <p><a href="#" class="btn btn-primary" role="button">View All</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="thumbnail">
                                <div class="caption">
                                    <h3><span class="badge">3</span> Courses Available</h3>
                                    <p><a href="#" class="btn btn-primary" role="button">View All</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="thumbnail">
                                <div class="caption">
                                    <h3><span class="badge">2</span> New Courses available</h3>
                                    <p><a href="#" class="btn btn-primary" role="button">View All</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="thumbnail">
                                <div class="caption">
                                    <h3><span class="badge">2</span> Students have multiple courses</h3>
                                    <p><a href="#" class="btn btn-primary" role="button">View All</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <a href="add_student.php" class="btn btn-success btn-block" role="button"><span class="glyphicon glyphicon-plus"></span> Add New Student</a>
                        </div>
                        <div class="col-md-6">
                            <a href="add_course.php" class="btn btn-success btn-block" role="button"><span class="glyphicon glyphicon-plus"></span> Add new Course</a>
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