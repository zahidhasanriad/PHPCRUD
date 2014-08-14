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
        
         <!-- Static navbar -->
    <div class="navbar navbar-default navbar-static-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Gorzon Solutions Pvt. Ltd.</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
              <li class="active"><a href="dashboard.php">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tracks <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">ITS</a></li>
                <li><a href="#">ITES</a></li>
                <li><a href="#">ITSS</a></li>
                <li><a href="#">MGT</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">jobs</li>
                <li><a href="#">FTFL</a></li>
                <li><a href="#">LICT</a></li>
              </ul>
            </li>
          </ul>
          
        </div><!--/.nav-collapse -->
      </div>
    </div> 
      
    
           
        <div class="container">
            <nav class="navbar navbar-default" role="navigation">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.html">Dashboard</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <form class="navbar-form navbar-right" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>

            <!--Thumbanil row-->
            <div class="row">
                <div class="col-md-4">
                    <ul class="nav nav-pills nav-stacked">
                        <li><a href="dashboard.php" class="active">Home</a></li>
                        <li><a href="add_student.php">Add Student</a></li>
                        <li><a href="add_course.php">Add Course</a></li>
                        <li><a href="edit_student.php">Edit Student</a></li>
                        <li><a href="edit_course.php">Edit Course</a></li>
                        <li><a href="assign_courses.php">Assign Courses To Student</a></li>
                        <li><a href="view_all_students.php">Students List</a></li>
                        <li><a href="view_all_courses.php">Courses List</a></li>
                       
                    </ul>
                </div>
                <div class="col-md-8">
                    
                    <!-- breadcrumb
                    
                    <div class="row">
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Library</a></li>
                            <li class="active">Data</li>
                        </ol>
                    </div>
                    
                    -->
                    
                    <div class="row">
                        <div class="col-md-4">
                        <div class="thumbnail">
                            <div class="caption">
                                <h3>3 New Students Registered</h3>
                                <p><a href="#" class="btn btn-primary" role="button">View All</a></p>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-4">
                            <div class="thumbnail">
                                <div class="caption">
                                    <h3>Total 12 Students Registered</h3>
                                    <p><a href="#" class="btn btn-primary" role="button">View All</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="thumbnail">
                                <div class="caption">
                                    <h3>5 Courses Available</h3>
                                    <p><a href="#" class="btn btn-primary" role="button">View All</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="thumbnail">
                                <div class="caption">
                                    <h3>2 New Courses available</h3>
                                    <p><a href="#" class="btn btn-primary" role="button">View All</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="thumbnail">
                                <div class="caption">
                                    <h3>5 Students have multiple courses</h3>
                                    <p><a href="#" class="btn btn-primary" role="button">View All</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <a href="add_student.html" class="btn btn-success btn-block" role="button">Add New Student</a>
                        </div>
                        <div class="col-md-6">
                            <a href="add_course.html" class="btn btn-success btn-block" role="button">Add new Course</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
         
        <!-- Site footer -->
    <div class="bottom" data-zahid="zahidul hasan" data-riad="riad" >
        <div class="container">
            
            <div class="col-md-4">
                <p><a href="#"><span class="glyphicon glyphicon-copyright-mark"></span></a> Gorzon Solutions Pvt. Ltd.</p>        
            </div>
            
            <div class="col-md-4">
                <p><a href="#"><span class="glyphicon glyphicon-globe"></span></a> www.gorzonsolutions.com </p>
               
            </div>
            
           

        </div>
    </div>
    
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/bootstrap.min.js"></script>
        
        <script src="https://code.jquery.com/jquery.js"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>

    </body>
</html>