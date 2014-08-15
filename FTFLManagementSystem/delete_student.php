
<?php

$student_Id = $_GET["student_Id"];

    //MySQL Database Connect 
    include '/CommonFeatures/database_connection.php';

    mysql_query("DELETE from students WHERE students_id = $student_Id");
    
    $student_assign_courses_delete_query = mysql_query("SELECT * from assign_courses WHERE assign_courses.students_id = $student_Id"); 
    
    
        if($student_assign_courses_delete_query)
	{
	
        mysql_query("DELETE from assign_courses WHERE assign_courses.students_id = $student_Id");
          
        header('location: view_all_students.php?msg=delete');
	
            
        }
    

?>
    
    
