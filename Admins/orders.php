<?php
include('includes/header.php');
include('connection.php');
?>
<main class="maincontent">
	 <div class="container box">
		<h3 align="center">ITEMS</h3>
		<br />
	    <br /><br />
	    <table id="user_data" class="table table-hover table-responsive">
	     <thead>
	      <tr>
	       <th width="10%">Order Id</th>
	       <th width="30%">Customer Name</th>
	       <th width="20%">Item Name</th>
	       <th width="20%">Item Category</th>
	       <th width="20%">Item Price</th>
	      </tr>
	     </thead>
	     <tbody>
	     	<?php
                $sql = "SELECT * from orders order by order_id";
                $result = mysqli_query($connect, $sql);
                while($row = mysqli_fetch_assoc($result))
                {
                	echo '
                <tr>
                	<td>'.$row["order_id"].'</td>
                	<td>'.$row["customer_name"].'</td>
                	<td>'.$row["item_name"].'</td>
                	<td>'.$row["item_category"].'</td>
                  <td>'.$row["item_price"].'</td>
                </tr>       
                ';
   
   	            }
	     	?>
	     </tbody>
	    </table>
		</div>
 
</main>


<?php
include('includes/footer.php');
?>
