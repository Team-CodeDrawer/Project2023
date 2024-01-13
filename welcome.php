<?php
session_start();
if (!isset($_SESSION['loggedin'])|| $_SESSION['loggedin']!=true) {
    header("location: login.php");
    exit;
}
//echo  "Hello";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - <?php $_SESSION['temail']?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
         .test{
            background-color: rgb(204, 0, 0);
            padding: 5px;
            border: 10px solidr rgb(204, 0, 0);
            position: fixed;
            width:100%;
            padding: 5px;
            font-size: 25px;
        }

        .MenuItem{
            color: black;
            background-color: white;
            display: block;
            text-decoration: none;
            font-size: x-large;
            padding: 20px;
            border-bottom: 2px solid black;
        }

        .imgcont{
            display: flex;
        }
        
      

        .links{
            width: 30%;
            float: left;
            margin-right: 1%;
            margin-left: 1%;
            color: gray;
            justify-content: center;
            padding-top: 10px;
            padding-bottom: 10px;
            padding-left: 10px;
            font-size:20px;
        }

        .tables, td ,th{
            /* border:2px solid gray; */
            width:50%;
            text-align:left;
            font-size:20px;
            padding:20px;
            border-collapse;
        } 

        .out{
            text-decoration:none;
            color:white;
            font-size:20px;
        }

        .logout{
            background-color:rgb(204, 0, 0);
            padding:10px;
            color:white;
            width:fit-content;
            margin-left:40px;
            border-radius:5px;
        }
    </style>

</head>
<body>


<div class="test">

<div  onclick="openSidebar()" style="color: white;">☰</div>

</div>

<div class="imgcont">
<nav  style="display:none;z-index:2;width:40%;min-width:300px" id="mySidebar">

    <a class="MenuItem" href="javascript:void(0)" onclick="closeSidebar()">Close Menu</a>
    <a class="MenuItem" href="/PRMS/PROJECT2023/PROJECT2023/home.php">Home</a>
    <a class="MenuItem" href="/PRMS/PROJECT2023/PROJECT2023/about.php">About us</a>
    <a class="MenuItem" href="/PRMS/PROJECT2023/PROJECT2023/company.php">All Company</a>
    <a class="MenuItem" href="/PRMS/PROJECT2023/PROJECT2023/student.php">Student detail</a>
    <a class="MenuItem" href="/PRMS/PROJECT2023/PROJECT2023/login.php">Login</a>
    <a class="MenuItem" href="/PRMS/PROJECT2023/PROJECT2023/register.php">Register</a>
    <a class="MenuItem" href="/PRMS/PROJECT2023/PROJECT2023/feedback.php">Feedack</a>

</nav>
    </div>

    

    <?php 

    $email = $_SESSION['temail'];
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Congrats!! '.$_SESSION['temail'].'</strong> Login Successful.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    ?>

    <?php
    include 'partials/dbconnect.php';
    $sql = "SELECT * from register where Email = '$email'";
    $result = mysqli_query($conn,$sql);
    if($result)
    {
        // echo "Successful";
    }
    else
    {
        echo "Failed".mysqli_error($conn);
    }
    $row = mysqli_fetch_assoc($result);
    $uname = $row['Uname'];
    $email = $row['Email'];
    $role = $row['roles'];
?>


    <div>
        <?php
    echo '<div class="tables">
    <table>
    <tr>
    <th>Username</th>
    <td>'.$uname.'</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>'.$email.'</td>
            </tr>
            <tr>
                <th>Role</th>
                <td>'.$role.'</td>
            </tr>
        </table>
    </div>';

    ?>
    </div>
    <div class="logout">
    <a class="out" href="logout.php">LOG OUT</a>
    </div>

    <br> <br>
     <hr>
     
    <div class="links">
       <p>
        
        Contact:+91 1234567890 <br>
        email: abcd@gmail.com <br>
        address:MMDU Mullana, Haryana <br>
        <a href="https://www.mmumullana.org/">www.mmumullana.org</a>
      </p>
   </div>
    
    <div class="links">
        <p>
            <img src="linkedin.svg" alt="linkedin"><br>
            Follow us on linkedin <br>
            <a href="https://in.linkedin.com/school/maharishi-markandeshwar-university-mullana/">MMDUlinkedin</a>
        </p>
    </div>
    
    <div class="links">
        <p> 
            <img src="twitter.svg" alt="twitter"><br>
            Follow us on twitter <br>
            <a href="https://twitter.com/mmumullana?lang=en">twitter.com/mmumullana</a>
        </p>
    </div>

    
    <script>
         function openSidebar() {
      document.getElementById("mySidebar").style.display = "block";
    }
     
    function closeSidebar() {
      document.getElementById("mySidebar").style.display = "none";
    }
    </script>


</body>
</html>