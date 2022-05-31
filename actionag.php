<?php
        <!-- isset is a function that will take request as read operation from database check as per the  email passowrd are correct or not from the submit button -->
        if(isset($_REQUEST['Submit']))
        {
            $email=$_REQUEST['Email'];
            $pass=$_REQUEST['Password'];
            <!-- connect to database  -->
            $db=mysqli_connect("localhost","root","","signup");
            <!-- sql query to check if the inputed email and pass are correct or not -->
            $query=mysqli_query($db,"SELECT Email, pass FROM formdata WHERE Email='$email' AND pass='$pass' ");
            <!-- fetch data thorugh query  -->
            $row=mysqli_fetch_array($query);
            <!-- check if the data are invalid or not  -->
            if($row==null)
            {
                echo '<script>alert("Invalid account")</script>';                  
                echo "</div>";
                
                require("index.html");
            }
            <!-- if email pass are correct then a season will be started  -->
            else{
            $email1=$row['Email'];
            $pass2=$row['pass'];
            //print_r ($row);
           if($email1==$email && $pass2==$pass)
            {
                session_start();
                 require("adminpanel.html");
                 
            }
             
        }
        }
    ?>