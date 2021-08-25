<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>

</body>

<?php
session_start();
if (isset($_SESSION['email'])) {
    echo '<h3 class= "text-center">Welcome '.$_SESSION['email'].'</h3>';
    echo '<h3><a href="logout.php">Logout</a></h3>';
}

else {
    header("location:login.php");
}
?>
</html>

