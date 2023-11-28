<?php
session_start();
if (!isset($_SESSION['loggedin'])|| $_SESSION['loggedin']!=true) {
    header("location: login.php");
    exit;
}
echo  "Hello";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - <?php $_SESSION['temail']?></title>
</head>
<body>
    


    hello - <?php 
    $email = $_SESSION['temail'];
    echo $_SESSION['temail']
    ?>

    <?php
    include 'partials/dbconnect.php';
    $sql = "SELECT * from register where Email = '$email'";
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
    <h2>If You want to log out <a href="logout.php">click here</a>
</body>
</html>