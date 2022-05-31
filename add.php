<?php
            <!-- table for add student, backend codes -->
            <!-- inputing each row  -->
                    $ID=$_REQUEST['ID'];                     
                    $Fname=$_REQUEST['Fname'];
                    $Lname=$_REQUEST['Lname'];
                    $Gender=$_REQUEST['Gender'];                    
                    $Major=$_REQUEST['Major'];                    
                   
                    $email=$_REQUEST['Email'];
                    <!-- database connection  and sql query then redirected to student table-->
                    $db=mysqli_connect("localhost","root","","addstudent");                                                                   
                    $sql="INSERT INTO student VALUES($ID,'$Fname','$Lname','$Gender','$Major','$email')";
                    mysqli_query($db,$sql);                                                                                        
                    require("studentdata.php");                     
?>