            <?php

                $student_name = $_POST['students_name'];
                
                //MySQL Database Connect 
                include '/CommonFeatures/database_connection.php';

                $student_query =mysql_query( "SELECT students_id from students where students_name = '$student_name'");
                
               
                $student_id = mysql_fetch_array($student_query);
                $student_id_selected = $student_id['students_id'];
                
                
                
                foreach ($_REQUEST['courses_name'] as $assign_course_name){
                $course_query =  mysql_query("SELECT courses_id from courses where courses_name = '$assign_course_name' ");
                
                $course_id = mysql_fetch_array($course_query);
                
                $course_id_selected = $course_id['courses_id'];

                mysql_query("INSERT into `assign_courses` (students_id,courses_id) values ('$student_id_selected','$course_id_selected')");
                
                
                
                }
                
                
                ?>
            