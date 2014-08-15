
<?php



    //MySQL Database Connect 
    include '/CommonFeatures/database_connection.php';
    
    $course_Id = $_GET["course_Id"];

    mysql_query("DELETE from courses WHERE courses_id = $course_Id");
    
    $student_assign_courses_delete_query = mysql_query("SELECT * from assign_courses WHERE assign_courses.courses_id = $course_Id"); 
    
    
        if($student_assign_courses_delete_query)
	{
	
        mysql_query("DELETE from assign_courses WHERE assign_courses.courses_id = $course_Id");
          
        header('location: view_all_courses.php?msg=delete');
	
            
        }
    

?>
    
    
