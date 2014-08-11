<!doctype html>
<html>

    <head>
        <title>Course Selection Output</title>
    
    </head>

    <body>
    
        <div>
           
             <?php

                $student_name = $_REQUEST['students_name'];
                
                $course_title = $_REQUEST['courses_title'];

                mysql_connect('localhost','root','');
                mysql_select_db('ftfl_3rd_batch');


                
                mysql_query("INSERT into students(students_name) values ('$student_name')");


                $student_query= mysql_query("SELECT students_id from students where students_name = '$student_name'");
                $student_id = mysql_fetch_object($student_query);

                $course_query = mysql_query("SELECT courses_id from courses where courses_title = '$course_title'");
                $course_id = mysql_fetch_object($course_query);

                $input_student_id = $student_id->students_id;
                $input_course_id = $course_id->courses_id;

                $data = mysql_query("INSERT into `student's_courses` (students_id,courses_id) values ('$input_student_id','$input_course_id')");

                //var_dump($data);

                if ($data)
                {
                echo "Data inserted";
                }	
                else
                {
                echo "Error";
                }

                ?>
            
        </div>

    </body>

</html>