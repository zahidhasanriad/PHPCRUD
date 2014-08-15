<?php
    $student_Id = $_GET["student_Id"];

    //MySQL Database Connect 
    include '/CommonFeatures/database_connection.php';

    if(mysql_query("DELETE from students WHERE students_id=$student_Id"))
    {
    if(mysql_query("DELETE from assign_courses WHERE students_id=$student_Id"))
    {
        header('location: view_all_students.php?msg=delete');
    }
}

?>
