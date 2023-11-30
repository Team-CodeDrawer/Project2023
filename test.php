<?php
$servername = "localhost";
$username = "root";
$password = "cookie";
$database = "images";
$conn = mysqli_connect($servername,$username,$password,$database);
if(!$conn)
{
    die(mysqli_connect_errno()."not connected");
}
else{
    echo "connected";
}
if($_SERVER['REQUEST_METHOD']=='POST'){
    $pic= $_FILES['imageInput'];
    $sql = "INSERT INTO photo values ('$pic');";
    $result = mysqli_query($conn,$sql);
    if($result)
    {
        echo "Successful";
    }
    else
    {
        echo "Failed".mysqli_error($conn);
    }
    // $row = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="test.php" method="post">
        <label for="imageInput">Select an image:</label>
        <input type="file" name="imageInput" id="imageInput" accept="image/*">
        <input type="submit" value="submit">
        
    </form>
        <?php
        $sql = "SELECT * from photo";
        $result = mysqli_query($conn,$sql);
        if($result)
        {
            echo "Successful2";
        }
        else
        {
            echo "Failed".mysqli_error($conn);
        }
        $row = mysqli_fetch_assoc($result);
        $image2 = $row['image'];
        // echo '<img src="'.$image2.'"alt="">';
        // echo "<img src='data:image;base64,". base64_encode($row["image"])";
        // echo "<img src='images/{$fetch['image']}' width='100px'>";
//         header("Content-type: image/jpeg");
// echo $image2;
// echo "<img src="data:image/jpeg;base64,<?php echo base64_encode( $image_data );
// echo 'img src=".'htmlspecialchars($row['filename'])'." width="175" height="200" />";


        // echo '<img src="$image2" alt="">';
        // echo "<td>" . "<img src=".$row['image'].' width=100px height="100px">' . "</td>";

    //     while ($row = mysqli_fetch_array($img)) {     
		
    //         echo "<img src='images/".$row['image']."' >";   
        
    //   } 

    // echo '<img src="data:image/jpeg;base64,'.base64_encode($image2).'" height="200" width="200"/>';

    // <img src="upload/<?=$row['image']?>" alt="">
    ?>

</body>
</html>