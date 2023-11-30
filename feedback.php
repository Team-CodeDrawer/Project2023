<?php
include 'partials/dbconnect.php';
$insertFeedback = false;
if($_SERVER['REQUEST_METHOD']=='POST'){
    $email = $_POST['email'];
    $description = $_POST['Feedback'];
    $Sql = "INSERT INTO feedback values('$email','$description');";
    $result = mysqli_query($conn,$Sql);
    if($result)
    {
        $insertFeedback = true;
    }
    else{
        echo "Not done".mysqli_error($conn);
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
        *{
            margin: 0px;
        }
        .test{
            background-color: rgb(204, 0, 0);
            padding: 5px;
            border: 10px solidr rgb(204, 0, 0);
            
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
        <?php
        
        if($insertFeedback)
        {
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Thanks For Your Feedback</strong>.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }

        ?>
    <h1>FEEDBACK</h1>

    <div class="border">

     <form action="feedback.php" method="post">

        <p><input  class="padd botmar" type="email" placeholder="email" required name="email"></p>
        <p><input  class="padd botmar" type="textarea" placeholder="Give Your Feedback Here" required name="Feedback"></p>
        <p><button  class="padd" type="submit" >Submit</button></p>
        
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