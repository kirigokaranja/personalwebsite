<html>
<head>
    <script src="dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
    <style>body{background-image: url("img/portfolio/2.jpg")}</style>

</head>
<body>
<?php

include ('connect.php');

date_default_timezone_set("Africa/Nairobi");
$date = date("Y/m/d h:i:sa");


$sql = "INSERT INTO `Emails`( `Date`) VALUES ('$date')";


$name= $_POST['name'];
$email = $_POST['email'];
$sub = $_POST['subject'];
$message = $_POST['message'];
//echo $name;

$to = "sharonkirigo@gmail.com";
$subject = $sub;
$txt = $message;
$headers = $email ."Babes its  from your website". "\r\n";
mail($to,$subject,$txt,$headers);
$result = mysqli_query($db, $sql);


if ($result){
?>
<script>
    swal({
        title: "Success",
        text: "Message sent successfully!",
        type: "success",
        timer: 1500,
        showConfirmButton: false
    });
    setTimeout(function () {
        location.href = "index.php"
    }, 1000);
</script>
<?php
}else{
?>
<script>
    swal({
        title: "Error",
        text: "An error ocurred!",
        type: "error",
        timer: 1500,
        showConfirmButton: false
    });
    setTimeout(function () {
        location.href = "index.php"
    }, 1000);
</script>
<?php
}

?>
</body>
</html>
