<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Bootstrap Website</title>

    <link rel="stylesheet" media="screen" href="css/bootstrap.css">
    <link rel="stylesheet" media="screen" href="css/bootstrap.min.css">
    <link rel="stylesheet" media="screen" href="css/custom.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
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
                    <div class="form-group has-feedback">
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
        <div class="col-md-4">
            <ul class="nav nav-pills nav-stacked">
                <li><a href="index.html" class="active"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                <li><a href="add_student.html"><span class="glyphicon glyphicon-user"></span> Add Student</a></li>
                <li><a href="add_course.html"><span class="glyphicon glyphicon-book"></span> Add Course</a></li>
                <li><a href="assign_course_to_student.html"><span class="glyphicon glyphicon-chevron-up"></span> Assign Course to Student</a></li>
                <li><a href="students_list.html"><span class="glyphicon glyphicon-th-list"></span> List of Students</a></li>
                <li><a href="courses_list.html"><span class="glyphicon glyphicon-th-list"></span> List of Courses</a></li>
                <li><a href="edit_student.html"><span class="glyphicon glyphicon-edit"></span> Edit Student</a></li>
            </ul>
        </div>
        <div class="col-md-8">
            <div class="row">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Library</a></li>
                    <li class="active">Data</li>
                </ol>
            </div>
            <div class="row">
                <h1>List of Courses</h1>
            </div>
            <div class="row">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Code</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Laravel</td>
                        <td>L-003</td>
                        <td>
                            <a href="edit_course.html">Edit</a> |
                            <a href="delete_course.html">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Unity 3D</td>
                        <td>U-102</td>
                        <td>
                            <a href="edit_course.html">Edit</a> |
                            <a href="delete_course.html">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>ASP.net</td>
                        <td>A-400</td>
                        <td>
                            <a href="edit_course.html">Edit</a> |
                            <a href="delete_course.html">Delete</a>
                        </td>
                    </tr>
                    </tbody>
                </table>
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

</body>
</html>