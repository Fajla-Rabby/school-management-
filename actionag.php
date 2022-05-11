<?php
        if(isset($_REQUEST['Submit']))
        {
            $email=$_REQUEST['Email'];
            $pass=$_REQUEST['Password'];
            $db=mysqli_connect("localhost","root","","signup");
            $query=mysqli_query($db,"SELECT Email, pass FROM formdata WHERE Email='$email' AND pass='$pass' ");
            $row=mysqli_fetch_array($query);
            if($row==null)
            {
                echo '<script>alert("Invalid account")</script>';                  
                echo "</div>";
                
                require("index.html");
            }
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