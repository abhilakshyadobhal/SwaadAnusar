<?php
require_once 'db/connection.php';

include('includes/header.php');
session_start();
// navbar starts

include('includes/navbar.php');

// navbar ends

 if(!isset($_SESSION['name']))
    {
    echo "<script>location.href='index.php';</script>";          
    }
?>


<div class="container my-5">
    <div class="row">
        <div class="col-md-8 mt-3">
        <div class="item-order-detals card p-2">
            <h4 class="pl-2">CART</h4>
            <table class="table mt-4 text-center table-hover">
            <thead>
                <tr>
                <th scope="col">Item</th>
                <th scope="col">Category</th>
                <th scope="col">Price</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $customer_name=$_SESSION['name'];
                    $sql = "SELECT * from orders where customer_name='$customer_name' order by order_id";
                    $result = mysqli_query($connect, $sql);
                    $totalprice=0;  
                    while($row = mysqli_fetch_assoc($result))
                    {
                        $totalprice+= $row['item_price'];
                        echo '
                    <tr>
                        <td>'.$row["item_name"].'</td>
                        <td>'.$row["item_category"].'</td>
                        <td>'.$row["item_price"].'</td>
                    </tr>       
                    ';
    
                    }
                    echo '
                    <tr>
                      <td>TOTAL</td>
                      <td></td>
                      <td><span id="price">'.$totalprice.'</span></td>
                    </tr>';
                ?>
            </tbody>
            </table>
        </div>
        </div>
        <div class="col-md-4 mt-3">
        <div class="card p-2">
            <h4 class="pl-2">ORDER SUMMARY</h4>
            <table class="table mt-4">
                <tr>
                    <th>Items :</th>
                    <?php
                    $customer_name=$_SESSION['name'];
                    $sql = "SELECT * from orders where customer_name='$customer_name' ";
                    $result=mysqli_query($connect,$sql);
                    $count=mysqli_num_rows($result);
                    echo '<td>'.$count.'</td></tr>';
                
                
                
                    if($count>=1)
                    {
                    echo '<tr>
                    <th>Shipping and Handling :</th><td>Rs <span id="shipping">50</span></td>';
                    }
                    else {
                    echo '<tr>
                    <th>Shipping and Handling :</th><td>Rs <span id="shipping">0</span></td>';
                    }
                ?>
                </tr>
                <tr>
                    <th>Order Total :</th>
                    <td>Rs <span id="totalcost"></span></td>
                </tr>
            </table>
            <button class="btn btn-primary mt-4">CHECKOUT</button>
        </div>
        </div>  
    </div>
</div>
<script>
var cost=document.getElementById('price').innerHTML;
var ship=document.getElementById('shipping').innerHTML;
var one = Number(cost);
var two = Number(ship);
document.getElementById('totalcost').innerHTML=one+two;
</script>
<?php
include('includes/footer.php');
?>