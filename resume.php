<!DOCTYPE html>
<html lang="en">
<head>
    <title>Resume</title>
</head>
<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "cookie";
    $database = "CV";
    $conn = mysqli_connect($servername,$username,$password,$database);
    if(!$conn)
    {
        die(mysqli_connect_errno()."not connected");
    }
    else{
        echo "connected";
    }
    $sql = "SELECT * FROM PI;";
    $result = mysqli_query($conn,$sql);
    if($result)
    {
        echo "Successful";
    }
    else
    {
        echo "Failed".mysqli_error($conn);
    }
    $row = mysqli_fetch_assoc($result);
    $sname = $row['Sname'];
    $email = $row['Email'];
    $phone = $row['PhoneNo'];
    $address = $row['Address'];
    $dob = $row['DOB'];
    $gender = $row['Gender'];
    $nationality = $row['Nationality'];
    $language = $row['LanguageKnown'];

    ?>
    <h1 align="Center">RESUME</h1>
    <h2>Personal Information</h2>
    <hr  align="left" size="3px" noshade="5px">
    <img align="right" src="Image/Ashu.jpg" width="150px" height="170px" style="border-radius: 2%; padding-right: 5px;" alt="Mera Photo">
    
    <?php
    echo '<pre><p style="font-size: 17px;">
    <b>Name           :</b> ' .$sname.' <br>
    <b>Email          :</b> <a href=""> '.$email.' </a> <br>
    <b>Phone No.      :</b> '.$phone.' <br>
    <b>Address        :</b> '.$address.' <br>
    <b>Date of Birth  :</b> '.$dob.' <br>
    <b>Gender         :</b> '.$gender.' <br>
    <b>Nationality    :</b> '.$nationality.' <br>
    <b>Language Known :</b> '.$language.' <br>
    </p></pre>';

    ?>
    <h2>SKILLS</h2>
    <hr  align="left" size="3px" noshade="3px">
    <ul>
        <li>Leadership</li>
        <li>Quick Learner</li>
        <li>C language</li>
        <li>C++ language</li>
        <li>Front-end Developer</li>
    </ul>
    <h2>EDUCATION QUALIFICATION</h2>
    <hr  align="left" size="3px" noshade="3px">
    <table width="100%">
        <tr align="left">
            <th>Degree/Course</th>
            <th>Board</th>
            <th>Percentage/CGPA</th>
        </tr>
        <tr align="left">
            <td><b>Matriculation-2018</b><br>
            Saraswati Vidya Mandir <br> Munger, Bihar</td>
            <td>CBSE</td>
            <td>63%</td>  
        </tr>
        <tr align="left">
            <td><b>I.Sc(Intermediate of Science)-2020</b><br>
            R.D & D.J College <br> Munger, Bihar</td>
            <td>BSEB</td>
            <td>61%</td>
        </tr>
        <tr align="left">
            <td><b>BCA(Bachlore's of Computer Application)-Pursuing</b><br>
            Maharishi Markandeshwar University <br>
        Ambala, Haryana</td>
            <td>CBSE</td>
            <!-- <td>61%</td> -->
        </tr>
    </table>
    <h2>HOBBIES</h2>
    <hr  align="left" size="3px" noshade="3px">
    <ul>
        <li>Travelling</li>
        <li>Gaming</li>
        <li>Coding</li>
    </ul>
    <h2>Experience</h2>
    <hr  align="left" size="3px" noshade="3px">
    <ul>
        <li>Fresher</li>
    </ul>
    <h2>Strength</h2>
    <hr  align="left" size="3px" noshade="3px">
    <ul>
        <li>Believe in God</li>
    </ul>
    <h2>Declaration</h2>
    <hr  align="left" size="3px" noshade="3px">
    <h3>I hereby declare that all the above information is true to best of my knowledge.
    </h3>
    <h3 align="right">Ashutosh Kumar</h3>
</body>
</html>