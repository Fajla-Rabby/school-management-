<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/all.min.css">
    <title>Student Data</title>
    <style>
        body {
            font-family: "Lato", sans-serif;
        }

        .sidenav {
            height: 100%;
            width: 189px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #1F2937;
            overflow-x: hidden;
            padding-top: 20px;
            margin-top: 54px;
        }

        .sidenav a {
            padding: 6px 8px 6px 10px;
            text-decoration: none;
            font-size: 18px;
            color: #818181;
            display: block;
        }

        .sidenav a:hover {
            color: #f1f1f1;
        }

        .main {
            margin-left: 160px;
            /* Same as the width of the sidenav */
            font-size: 28px;
            /* Increased text to enable scrolling */
            padding: 0px 10px;
        }

        @media screen and (max-height: 450px) {
            .sidenav {
                padding-top: 15px;
            }

            .sidenav a {
                font-size: 18px;
            }
        }
    </style>

</head>

<body>
    <!-- navbar -->
    <nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-800 sticky top-0">
        <div class="container flex flex-wrap justify-between items-center mx-auto">
            <a href="adminpanel.html" class="flex items-center">
                <img src="https://www.hbut.edu.cn/images/logo.png" class="mr-3 h-6 sm:h-9" alt="logo">
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">HBUT</span>
            </a>

            <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
                <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                    <li>
                        <p class="text-white "><i class="fa-regular fa-user"></i> Welcome: admin</p>
                        <!-- <a href="adminpanel.html"
                            class="block py-2 pr-4 pl-3 text-white bg-blue-700 rounded md:bg-transparent md:p-0 dark:text-white"
                            aria-current="page">Home</a> -->
                    </li>

                    <li>
                        <a href="logout.php" class="text-white">
                            <i class="fa-solid fa-arrow-right-from-bracket mr-1"></i>Log
                            Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- side navbar -->
    <div class="sidenav  ">
        <a href="adminpanel.html">
            <i class="fa-solid fa-gauge-high mr-1"></i>Dashboard</a>
        <a href="studentdata.php">
            <i class="fa-solid fa-users mr-1"></i>Manage Students</a>
        <a href="addstudent.html">
            <i class="fa-solid fa-user mr-1"></i>Add Student</a>
        <br>
        <p class="text-white pl-3">Time: <br><span class="" id='datetime'></span>.</p>
    </div>



    <main class="main">

        <div>
            <h1 class="text-3xl pl-3">
                <i class="fa-solid fa-users mr-1"></i>Manage Students
            </h1>
            <p style="color: #2563EB; text-align: center; font-size: 30px;font-family: 'Times New Roman', Times, serif;margin-top: 5px;margin-bottom:2px;">
               18lq Student's Data
            </p>
        
        <?php
        $DB_Connect= mysqli_connect("localhost","root","","addstudent");
       
        $query=mysqli_query($DB_Connect,"SELECT *FROM student ");
        echo'<table align="center" style="border: 2px solid black;
        border-collapse:collapse;">';
        echo "<tr>";
        echo '<th style="text-align:center; color: white;
        border: 2px solid #2563EB;
        border-collapse:none;padding: 8px; background-color: #2563EB;" >ID</th>';
            echo '<th style="text-align:center; color: white;
            border: 2px solid #2563EB;
            border-collapse:none;padding: 8px; background-color: #2563EB; ">First Name</th>';
            echo '<th style="text-align:center; color:white;
            border: 2px solid #2563EB;
            border-collapse:none;padding: 8px; background-color: #2563EB;">Last Name</th>';
            echo '<th style="text-align:center; color:white;
            border: 2px solid #2563EB;
            border-collapse:none;padding: 8px; background-color: #2563EB;">Gender</th>';
            echo '<th style="text-align:center; color:white;
            border: 2px solid #2563EB;
            border-collapse:none;padding: 8px; background-color: #2563EB;">Major</th>';
           
            echo '<th style="text-align:center; color:white;
            border: 2px solid #2563EB;
            border-collapse:none;padding: 8px; background-color: #2563EB;">E-Mail</th>';
             
        echo "</tr>";
        while($row=mysqli_fetch_array($query))
        {
            echo"<tr>";
            echo'<td style="text-align:center;
            border: 2px solid #000000;
            border-collapse:collapse;padding: 8px;background-color: #fcfcfc;color:black;">'.$row['ID']."</td>";                              
            echo'<td style="text-align:center;
            border: 2px solid #000000;
            border-collapse:collapse;padding: 8px;background-color:#ffffff;color:black;">'.$row['Fname']."</td>";
            echo'<td style="text-align:center;
            border: 2px solid #000000;
            border-collapse:collapse;padding: 8px;background-color:#ffffff;color:black;">'.$row['Lname']."</td>";
            echo'<td style="text-align:center;
            border: 2px solid #000000;
            border-collapse:collapse;padding: 8px;background-color:#ffffff;color:black;">'.$row['Gender']."</td>";
            echo'<td style="text-align:center;
            border: 2px solid #000000;
            border-collapse:collapse;padding: 8px;background-color:#ffffff;color:black;">'.$row['Major']."</td>";
           
            echo'<td style="text-align:center;
            border: 2px solid #000000;
            border-collapse:collapse;padding: 8px;background-color:#f5f5f5;color:black;">'.$row['Email']."</td>";
        }
        echo "</table>";
       
        mysqli_close($DB_Connect);
    ?>
    </main>


    <script>
        var dt = new Date();
        document.getElementById("datetime").innerHTML = dt.toLocaleTimeString(); </script>
</body>

</html>