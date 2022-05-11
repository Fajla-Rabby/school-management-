<?php
            
                    $ID=$_REQUEST['ID'];                     
                    $Fname=$_REQUEST['Fname'];
                    $Lname=$_REQUEST['Lname'];
                    $Gender=$_REQUEST['Gender'];                    
                    $Birthday=$_REQUEST['Birthday'];
                    $Age=$_REQUEST['Age'];
                    $email=$_REQUEST['Email'];
                    $db=mysqli_connect("localhost","root","","addstudent");                                                                   
                    $sql="INSERT INTO student VALUES($ID,'$Fname','$Lname','$Gender','$Birthday',$Age,'$email')";
                    mysqli_query($db,$sql);                                                                                           
                    require("studentdata.php");                     
?>