<?php
include 'partials/dbconnect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0px;
        }
        .container{
            /* border: 3px solid black; */
            width: 70%;
            margin: auto;
            /* background-color: rgb(204, 0, 0); */
            /* background-color: #ffb3b3; */
        }
        table,th,td{
            border: 2px solid black;
            border-collapse: collapse;
        }
        table{
            margin: auto;
            margin-top: 10px;
            margin-bottom: 10px;
            width: 50%;
            background-color: white;
        }
        th,td{
            padding: 10px;
        }
        .test{
            background-color: rgb(204, 0, 0);
            padding: 5px;
            border: 10px solidr rgb(204, 0, 0);
            position: fixed;
            width:100%;
            padding: 5px;
            font-size: 25px;
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

<?php
    $sql = "SELECT * from student;";
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
    // while($row = mysqli_fetch_assoc($result)){
        // $email = $row['email'];
        // $phone = $row['phone'];
        // $address = $row['address'];
        // }
        ?>
    <div class="container">
        <h1 align="center">Student details</h1>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            $sname = $row['sname'];
            $email = $row['email'];
            $phone = $row['phone'];
            $address = $row['address'];
        
        echo '<table>
        <tr>
            <th>Name:</th>
            <td>'.$sname.'</td>
        </tr>
        <tr>
            <th>Email:</th>
            <td>'.$email.'</td>
        </tr>
        <tr>
            <th>Phone:</th>
            <td>'.$phone.'</td>
        </tr>
        <tr>
            <th>Address:</th>
            <td>'.$address.'</td>
        </tr>
    </table>';
}
        ?>
    </div>
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