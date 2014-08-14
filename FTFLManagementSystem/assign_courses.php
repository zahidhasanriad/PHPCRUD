<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Assign Courses To Student</title>

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
                        <a class="navbar-brand" href="dashboard.php">Dashboard</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <form class="navbar-form navbar-right" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search">
                                <i class="glyphicon glyphicon-search form-control-feedback"></i>
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>

            <!--Thumbanil row-->
            <div class="row">
                
                 <?php 
                        include 'menu_bar.php';
                ?>
                
                <div class="col-md-8">
                    
                    
                    <div class="row">
                        
                        <h1>Assign Courses to Student</h1>
                        <br/>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-7">
                              <form class="form-group-lg" action="" method="">
                                  
                                  <h3><label>Student Selection: </label></h3>
                                  <select  name="name" class="form-control">
                                   
                                      <option>Tahsin Abrar</option>
                                      <option>Towfiqur Rahman</option>
                                      <option>Iftekhar Alam</option>
                                  </select>
                                  <br/>
                                  
                                  <h3><label>Courses Selection: </label></h3>
                                  <select name="course" class="form-control" multiple="multiple">
                                      <option value="Laravel">Laravel</option>
                                      <option value="Asp.net">Asp.net</option>
                                      <option value="Unity 3D">Unity 3D</option>
                                  </select>
                                  <br/>
                                  
                                    <input class="form-control btn btn-success" type="submit" value="Assign Course">
                              </form>
                        </div>
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