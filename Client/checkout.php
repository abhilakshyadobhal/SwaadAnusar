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
            <table class="table mt-4 text-center">
            <thead>
                <tr>
                <th scope="col">Item</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Sub-total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>Pizza</td>
                <td>50</td>
                <td>4</td>
                <td>200</td>
                </tr>
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
                    <td>4</td>
                </tr>
                <tr>
                    <th>Shipping and Handling :</th>
                    <td>Rs 50</td>
                </tr>
                <tr>
                    <th>Order Total :</th>
                    <td>Rs 550</td>
                </tr>
            </table>
            <button class="btn btn-primary mt-4">CHECKOUT</button>
        </div>
        </div>  
    </div>
</div>

<?php
include('includes/footer.php');
?>