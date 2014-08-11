<!DOCTYPE html>

<html>

    <head>
        <title>Course Selection Entry</title>
    </head>
    
    
    <body>
    
        <form action="course_selection.php" method="POST">
        <fieldset>
            <legend>Course Selection</legend>
                <label>
                <span>Student Name</span>
                <input type="text" name="students_name"/>
                </label>
                <br/>
                <br/>
                
                <label>
                <span>Course Title</span>
                
                    <select multiple="multiple" name="courses_title[]">
                        
                        
                        
                            <?php
                          
                        
                            $connect = mysql_connect('localhost','root','');
                            $db = mysql_select_db('ftfl_3rd_batch',$connect);
                            $query = "select courses_title from courses";
                            
                            $result = mysql_query($query);
            
                            while($row = mysql_fetch_array($result))
                                {
                                    echo "<option>".$row['courses_title']."</option>";
                                }
                                        
                                mysql_close($connect);    
                                
                            ?>
                        
                    </select>
                
                </label>
                <br/>
                <br/>
            
              
  
                <label>
                <input type="submit" value="Submit"/>
                </label>
        </fieldset>
    </form>

    </body>

</html>