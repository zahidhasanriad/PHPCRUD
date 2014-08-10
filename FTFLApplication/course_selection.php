<!doctype html>
<html>

    <head>
        <title>Course Selection Output</title>
    
    </head>

    <body>
    
        <div>
            <?php
               
                $name = $_REQUEST['students_name'];
                

                $connect = mysql_connect('localhost','root','');
                $db = mysql_select_db('ftfl_3rd_batch',$connect);


                $course_selection_student_name_entry_query = "select * from courses";
                $student_name_result = mysql_query($course_selection_student_name_entry_query );
                
                
                if($student_name_result)
                {
                    echo "HAVE FUN";
                }
            ?>
        </div>

    </body>

</html>