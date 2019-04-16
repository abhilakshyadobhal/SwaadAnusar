<?php
    require_once('db/connection.php');
?>



<!-- user login modal -->

<div class="modal fade" id="signinsignup" role="dialog">
    <div class="modal-dialog modal-dialog-centered" style="width: 400px;">
    
      <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">User Login</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email"  placeholder="Enter email" name="useremail" autofocus required>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd1" placeholder="Enter password" name="userpassword" required>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label mb-3" for="exampleCheck1" name="remember">Remeber Me</label>
                    </div>                    
                    <button type="submit" class="btn btn-default" name="userlogin" style="background-color: green;color: white;font-family: sans-serif;">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>   
  

<!-- user login modal ends -->

<!-- admin login modal -->

<div class="modal fade" id="adminsignin" role="dialog">
    <div class="modal-dialog modal-dialog-centered" style="width: 400px;">
    
      <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Admin Login</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" id="text" autocomplete="off" placeholder="Enter admin name" name="adminname" autofocus required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="pwd2" placeholder="Enter admin password" name="adminpassword" required>
                    </div>              
                    <button type="submit" class="btn btn-default" name="adminlogin" style="background-color: green;color: white;font-family: sans-serif;">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>   


<!-- user login modal ends -->
  
<?php
if(isset($_POST['userlogin'])){
$useremail = $_POST['useremail'];
$userpassword = $_POST['userpassword'];
$data = mysqli_fetch_array(mysqli_query($connect,"SELECT * FROM users WHERE email='$useremail' AND password='$userpassword'"));
    $_SESSION['email'] = $data['email'];
    // if (isset($_POST['remember'])){
        //set up cookie
    //     setcookie("name", $data['name'], time() + (86400 * 30)); 
    //     setcookie("email", $data['email'], time() + (86400 * 30)); 
    // }    
    $_SESSION['name'] = $data['name'];
}
?>


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
            echo "<script>location.href='../Admins/index.php';</script>";
            
        }
        else {
            echo "<script>alert('wrong admin name and password');
            location.href='index.php';</script>";
 
        }
    }
}
?>