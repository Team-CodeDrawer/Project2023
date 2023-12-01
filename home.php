<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

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
        
        .bgimg {
            background-position: center;
            background-size: cover;
            background-image: url("ABC.jpg");
            min-height: 75%;
            width: 100%;
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

    </style>
</head>

<body>
    <div class="test">

        <div  onclick="openSidebar()" style="color: white;">☰</div>

    </div>
    
    <div class="imgcont">
        <nav  style="display:none;z-index:2;width:40%;min-width:300px" id="mySidebar">

            <a class="MenuItem" href="javascript:void(0)">Close Menu</a>
            <a class="MenuItem" href="/PRMS/PROJECT2023/home.php">Home</a>
            <a class="MenuItem" href="/PRMS/PROJECT2023/about.php">About us</a>
            <a class="MenuItem" href="#allCompany">All Company</a>
            <a class="MenuItem" href="student.php">Student detail</a>
            <a class="MenuItem" href="/PRMS/PROJECT2023/login.php">Login</a>
            <a class="MenuItem" href="/PRMS/PROJECT2023/register.php">Register</a>
            <a class="MenuItem" href="/PRMS/PROJECT2023/feedback.php">Feedack</a>
        
        </nav>
        <img class="bgimg" src="mmdu.jpg" alt="Placement">
    </div>

    <br> <br>

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