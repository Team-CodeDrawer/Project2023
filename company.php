<?php
include 'partials/dbconnect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Details</title>

    <style>
        *{
            margin: 0px;
        }
        .container2{
            margin: 20px;
            /* padding-left: 100px; */
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

        p{
            padding:10px;
            font-size: 20px;
        }

        .border{
            margin: 10px;
            padding:10px;
            border: 1px solid black;
            border-radius: 5px;
        }

        table{
            margin: 20px;
        margin-left: 0px;
        border: 2px solid gray;
        width: 100%;
    }

    .gray{
        border:  2px solid gray;
    }

    .none{
        border:  none;
        
    }
  
    table,td{
        border-collapse: collapse;
    }

    .fit{
        width: 20%;
    }

    .pad{
        padding-left: 20px;
    
    }

   
    button{
        float: left;
        margin-right: 5px;
        background: rgb(118, 185, 240);
        color: white;
        width: 100px;
        height: 28px;
        border-radius: 8px;
        font-size: 15px;
        font-family: Georgia, 'Times New Roman', Times, serif;
        border-color: rgb(118, 185, 240) ;
        margin-bottom:5px;
      }

    </style>
</head>

<body>
<?php
    $sql = "SELECT * from company;";
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

        <div>
            <div class="container" >
              <h1>COMPANY DETAIL</h1>
              <?php
              while ($row = mysqli_fetch_assoc($result)) {
                $sname = $row['sname'];
                $email = $row['email'];
                $phone = $row['phone'];
                $address = $row['address'];
                echo '
            <div class="container2" >

                <table>
     
                <!--1-->
                <tr>
                    <td class="fit gray"  rowspan="5">
                        <img src="C:\Users\HP\Pictures\Saved Pictures\info.png" alt="'.$sname.'">
                    </td>
            
                    <td class="pad none"><p style="font-size: 30px;"><b>'.$sname.'</b></p></td>
                </tr>
            
                <tr>
                    <td class="pad none"><p>'.$address.'</p></td>
                </tr>
            
                <tr>
                    <td class="pad none"><p>Phone '.$phone.'</p></td>
                </tr>
            
                <tr>
                    <td class="pad none"><p>Email: '.$email.'</p></td>
                </tr>
            
                <tr>
                    <td class="pad none">  <button >DETAIL</button>
                          <button>APPLY</button>
                    </td>
                </tr>
            </table>
            </div>';
              }
            ?>
        </div>
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