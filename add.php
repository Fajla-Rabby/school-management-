<?php
            // table for add student, backend codes 
            // input data for each row through REQUEST  
                    $ID=$_REQUEST['ID'];                     
                    $Fname=$_REQUEST['Fname'];
                    $Lname=$_REQUEST['Lname'];
                    $Gender=$_REQUEST['Gender'];                    
                    $Major=$_REQUEST['Major'];                    
                    $email=$_REQUEST['Email'];

                    //database connection
                    $db=mysqli_connect("localhost","root","","addstudent");                                                                 //insert student to table through sql query   
                    $sql="INSERT INTO student VALUES($ID,'$Fname','$Lname','$Gender','$Major','$email')";
                    mysqli_query($db,$sql);                                                               //then redirected to student table page                           
                    require("studentdata.php");                     
?>