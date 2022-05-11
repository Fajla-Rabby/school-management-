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
                echo '<div style="text-align: center;">';
                     echo '<p style="width:27%;display:inline-block;font-size:22px;background-color:#C81C07;text-align: center;color: black;margin-top:50px;height:50px; ">Invalid Account</P>';                  
                echo "</div>";
                
                require("signin.html");
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