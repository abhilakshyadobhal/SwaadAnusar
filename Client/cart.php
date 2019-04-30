<?php
require_once 'db/connection.php';

session_start();
$customer_name=$_SESSION['name'];
if(isset($customer_name))
{
    if(isset($_GET['item_id'])){
    
    $item_id=$_GET['item_id'];

    $row = mysqli_fetch_array(mysqli_query($connect,"SELECT * FROM item WHERE item_id='$item_id' "));
    
    $item_name=$row['item_name'];

    $item_price=$row['item_price'];
    
    $item_category=$row['item_category'];
    
    $sql="INSERT INTO orders(customer_name,item_name, item_category,item_price)VALUES('$customer_name', '$item_name','$item_category','$item_price')";
    
    $result=mysqli_query($connect,$sql);
    
    echo "<script>window.open('menu.php','_self');</script>";
    }
    else {
        echo '<script>alert("error");</script>';
    }
}
else {
    echo '<script>
            alert("please log in");
            window.open("menu.php","_self");
            </script>';
}
?>
