
        
        <?php
        
                $course_name = $_POST['courses_name'];
                
                //MySQL Database Connect 
                include '/CommonFeatures/database_connection.php';
                
                
                

                $course_query =mysql_query( "SELECT courses_id from courses where courses_name = '$course_name'");
                
               
                $course_id = mysql_fetch_array($course_query);
                $course_id_selected = $course_id['courses_id'];
        

                $query = mysql_query("SELECT * from courses WHERE courses_id=$course_id_selected");

               // $data = mysql_fetch_object($query);

                if(isset($_POST["courses_Code"]) && isset($_POST["courses_Name"])){
                $courses_Code = $_POST["courses_Code"];
                $courses_Name = $_POST["courses_Name"];

                $result = mysql_query("UPDATE courses SET courses_code='$courses_Code',courses_Name='$courses_Name'  WHERE courses_id=$course_id_selected");
                //header('location: student_List.php?msg=edit');
                }
                
                if($result){
                    
                     header('location: edit_course.php?msg=Course Info Successfully Updated');   
                    
                }
                
                else {
                    echo 'Error!!!';
                }
                
        ?>
        
        