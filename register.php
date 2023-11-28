<?php
// $servername = "localhost";
// $username = "root";
// $password = "cookie";
// $database = "Project";
// $conn = mysqli_connect($servername,$username,$password,$database);
// if(!$conn)
// {
//     die(mysqli_connect_errno()."not connected");
// }
// else{
//     echo "connected";
// }

include 'partials/dbconnect.php';
$Showalert = false;
if($_SERVER['REQUEST_METHOD']=='POST'){
    $role= $_POST['trole'];
    $name = $_POST['tname'];
    $email = $_POST['temail'];
    $Uname = $_POST['tusername'];
    $passcode = $_POST['tpassword'];
    $Vpasscode = $_POST['vpassword'];

    // $exists = false;
    $ShowError = true;
    $existSql = "SELECT * FROM register WHERE Email = '$email'";
    $result = mysqli_query($conn,$existSql);
    $numExistRow = mysqli_num_rows($result);
    if($numExistRow > 0)
    {
        // $ShowError = false;
        echo "Email already exists.";
    }
    else{

        if (($passcode == $Vpasscode)) {
            
            // $sql = "CREATE TABLE register(roles text, Namee text, Email text, Uname text, Pass  text);";
            $sql = "INSERT INTO register VALUES('$role','$name','$email','$Uname', '$passcode');";
            $result = mysqli_query($conn,$sql);
            if($result)
            {
                $Showalert = true;
            }
            else{
                echo "Not done".mysqli_error($conn);
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>

    <style>
        *{
            margin: 0px;
        }
        .test{
            background-color: rgb(204, 0, 0);
            padding: 5px;
            border: 10px solid rgb(204, 0, 0);
            
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
        }

        h1{
            padding:10px;
        }

        
        .border{
            margin: 10px;
            padding:10px;
            border: 1px solid black;
            border-radius: 5px;
            text-align: center;
        }

        .padd{
            padding: 16px;
            font-size: 20px;
          
        }

        .botmar{
            margin-bottom: 16px;
        }

        button{
            width: 100%;
            background-color: rgb(204, 0, 0);
            border: none;
            color: white;
        }

        select{
            width: 100%;
        }

        input{
            width: 80%;
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
            <a class="MenuItem" href="file:///C:/Users/HP/Documents/HTML/rassu/home.html" onclick="closeSidebar()">Home</a>
            <a class="MenuItem" href="file:///C:/Users/HP/Documents/HTML/rassu/about.html" onclick="closeSidebar()">About us</a>
            <a class="MenuItem" href="#allCompany" onclick="closeSidebar()">All Company</a>
            <a class="MenuItem" href="#jobDetail" onclick="closeSidebar()">Job detail</a>
            <a class="MenuItem" href="file:///C:/Users/HP/Documents/HTML/rassu/login.html" onclick="closeSidebar()">Login</a>
            <a class="MenuItem" href="file:///C:/Users/HP/Documents/HTML/rassu/register.html" onclick="closeSidebar()">Register</a>
            <a class="MenuItem" href="file:///C:/Users/HP/Documents/HTML/rassu/feedback.html" onclick="closeSidebar()">Feedack</a> 
        </nav> 
    </div>

    <h1>Register</h1>

    <div class="border">

     <form action="register.php" method="post">
        <select  class="padd botmar" name="trole" id="trole" >
          <option value="Select Role">Select Role</option>
          <option value="Admin">Admin</option>
          <option value="Company">Company</option>
          <option value="Student">Student</option>
        </select> 
        <input  class="padd botmar" type="text" placeholder="Your Name" required name="tname" id="tname">
        <input  class="padd botmar" type="email" placeholder="email" required name="temail" id="temail" >
        <input  class="padd botmar" type="text" placeholder="Username" required name="tusername" id="tusername" >
        <input  class="padd botmar" type="password" placeholder="Password" required name="tpassword" id="tpassword" >
        <input  class="padd botmar" type="password" placeholder="Verify Password" required name="vpassword" id="vpassword">
        <!-- <p><button  class="padd" type="submit" >REGISTER</button></p> -->
        <input type="submit" value="submit"> 
        
        <?php
        if($Showalert)
        {
            echo '<h1>Registration Successful</h1>';
        }
        else
        {
            echo '<h1>Enter the same Password</h1>';
        }
        // if($ShowError)
        // {
        //     echo '<h1>Email already Exists</h1>';
        // }
        // else
        // {
        //     echo '<h1>Enter the same Password</h1>';
        // }
        ?>
      </form>

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