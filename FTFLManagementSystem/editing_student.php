<html>
    <head>
        
        <title>Student Editing Conformation</title>
    </head>
    
    <body>
        
        <?php
        
                $student_name = $_POST['students_name'];
                
                //MySQL Database Connect 
                include '/CommonFeatures/database_connection.php';
                
                
                

                $student_query =mysql_query( "SELECT students_id from students where students_name = '$student_name'");
                
               
                $student_id = mysql_fetch_array($student_query);
                $student_id_selected = $student_id['students_id'];
        

                $query = mysql_query("SELECT * from students WHERE students_id=$student_id_selected");

               // $data = mysql_fetch_object($query);

                if(isset($_POST["student_Name"]) && isset($_POST["student_Email"])){
                $student_Name = $_POST["student_Name"];
                $student_Email = $_POST["student_Email"];

                $result = mysql_query("UPDATE students SET students_name='$student_Name',students_email='$student_Email'  WHERE students_id=$student_id_selected");
                //header('location: student_List.php?msg=edit');
                }
                
                if($result){
                    
                    echo 'Student Info Successfully Updated';   
                    
                }
                
                else {
                    echo 'Error!!!';
                }
                
        ?>
        
        <br/>
        <br/>
        <a href="edit_student.php">Back To Edit Student</a>
        
    </body>
    
</html>