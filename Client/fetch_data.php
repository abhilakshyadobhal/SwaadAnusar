<?php

//fetch_data.php

include('db/connection.php');

if(isset($_POST["action"]))
{

	if(isset($_POST["brand"]))
	{
        $brand_filter = implode("','", $_POST["brand"]);
        $query1 = "SELECT * FROM item WHERE item_category IN('".$brand_filter."')";
        $result1 = mysqli_query($connect, $query1);
        $output1='';
        $total_row1 = mysqli_num_rows($result1);
        if($total_row1 > 0)
        {
            while($row = mysqli_fetch_assoc($result1))
            {
                $output1 .= '
                <div class="col-md-3 card mb-4 mr-5 pt-2 px-2 text-center">
                        <div class="menu-wrap">
                            <img class="menu-img" src="img/food/'.$row['item_image'].'.jpg">
                            <div class="text">
                                <h4 class="mt-3">'.$row['item_name'].'</h4>
                                <p class="price"><span>'.$row['item_price'].'</span></p>
                                <p><a href="cart.php?item_id='.$row['item_id'].'" class="btn btn-white btn-outline-white">Add to cart</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                ';
            }
        }
        else
        {
            $output1 = '<h3>No Data Found</h3>';
        }
    echo $output1;
        
    }
    else{
    $query = "
		SELECT * FROM item
	";
	$result = mysqli_query($connect, $query);
    $total_row = mysqli_num_rows($result);
	$output = '';
	if($total_row > 0)
	{
		while($row = mysqli_fetch_assoc($result))
		{
            $id=$row['item_id'];
            $output .= '
                <div class="col-md-3 card mb-4 mr-5 pt-2 px-2 text-center">
                        <div class="menu-wrap">
                            <img class="menu-img" src="img/food/'.$row['item_image'].'.jpg">
                            <div class="text">
                                <h4 class="mt-3">'.$row['item_name'].'</h4>
                                <p class="price"><span>'.$row['item_price'].'</span></p>
                                <p><a href="cart.php?item_id='.$row['item_id'].'" class="btn btn-white btn-outline-white">Add to cart</a></p>
                            </div>
                        </div>
                    </div>
                </div>
			';
		}
	}
	else
	{
		$output = '<h3>No Data Found</h3>';
	}
    echo $output;
    }
}

?>