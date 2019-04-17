<?php
include('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SwaadAnusar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/flaticon.css">
    <link rel="stylesheet" href="./css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="./css/ionicons.min.css">
    <link rel="stylesheet" href="./css/icomoon.css">

    <!-- main css file -->
    <link rel="stylesheet" href="./css/main.css">
    <style>
    .form-control{
        width:30%;
        position: relative;
        left: 35%;
    }</style>

</head>

<body class="text-center">

<div class="container logindiv mt-5 pt-5">
    <form class="form-signin" method="post">
        <img class="my-5" src="icon.svg" alt="" width="72" height="72">
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="text" id="inputText" class="form-control mb-4" placeholder="Admin Name" required="" autofocus="" name="adminname">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control mb-4" placeholder="Password" required="" name="adminpassword">
        <button class="btn btn-lg btn-primary" type="submit" name='adminlogin'>Sign in</button>
    </form>
</div>

<?php
if(isset($_POST['adminlogin'])){
$name = $_POST['adminname'];
$password = $_POST['adminpassword'];
$row = mysqli_fetch_array(mysqli_query($connect,"SELECT * FROM admins"));
    while($row){
        $id=$row[0];
        $name1=$row[1];
        $pass1=$row[2];
        if($name==$name1 and $password==$pass1)
        {
            echo "<script>location.href='home.php';</script>";
        }
        else {
            echo "<script>alert('wrong admin name and password');</script>";
        }
    }
}
?>

<script src="./js/jquery.js"></script>
<script src="./js/bootstrap.min.js"></script>
</body>

</html>	