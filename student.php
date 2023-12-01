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
        .container{
            border: 3px solid black;
            width: 70%;
            margin: auto;
            background-color: #ffb3b3;
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
    </style>
</head>
<body>
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
</body>
</html>