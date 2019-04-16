<?php

require_once 'db/connection.php';
session_start();
include('includes/header.php');

// navbar starts

include('includes/navbar.php');


// navbar ends
?>

<section class="menu">
    <div class="container">
        <div class="text-center menu-div">
            <h1 class="bread" id="menu-heading">Our Menu</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span id="menu">Menu</span></p>
        </div>
    </div>
</section>

<!-- menu main section starts -->
<main class="main-menu my-5 py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
					<?php
                        $sql = "SELECT * from category order by cat_name";
                        $result = mysqli_query($connect, $sql);
                        while($row = mysqli_fetch_assoc($result))
                        {
                        ?>
                        <div class="list-group-item checkbox">
                            <label><input type="checkbox" class="common_selector brand" value="<?php echo $row['cat_name']; ?>"  > <?php echo $row['cat_name']; ?></label>
                        </div>
                        <?php
                        }

                        ?>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row filter_data">

                </div>
            </div>
        </div>
    </div>
</main>

<style>
    #loading
    {
        text-align:center; 
        background: url('loader.gif') no-repeat center; 
        height: 150px;
    }
</style>
<?php
// footer section

include_once('includes/footer.php');

// footer ends

?>
<script>
$(document).ready(function(){

    filter_data();

    function filter_data()
    {
        $('.filter_data').html('<div id="loading" style="" ></div>');
        var action = 'fetch_data';
        var brand = get_filter('brand');
        $.ajax({
            url:"fetch_data.php",
            method:"POST",
            data:{action:action, brand:brand},
            success:function(data){
                $('.filter_data').html(data);
            }
        });
    }

    function get_filter(class_name)
    {
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        });
        return filter;
    }

    $('.common_selector').click(function(){
        filter_data();
    });


});
</script>