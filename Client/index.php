<?php
require_once 'db/connection.php';
session_start();
include('includes/header.php');

// navbar starts

include('includes/navbar.php');

// navbar ends
?>


<header>
<div class="overlay"></div>
<video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" id="video">
    <source src="./FOOD background video - YouTube.mkv" type="video/mp4">
</video>
<div class="container h-100 caption">
    <div class="d-flex h-100 text-center align-items-center">
    <div class="w-100 text-white">
        <span class="subheading">Welcome</span>
            <h1 class="mb-4">Taste the Best</h1>
            <p><a href="menu.php" class="btn btn-primary p-3 px-xl-4 py-xl-3">View Menu</a></p>
    </div>
    </div>
</div>
</header>



<section class="ftco-section ftco-services">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center ftco-animated">
            <h2 class="mb-4 text-center">Our Services</h2>
            <p class="flip text-center"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
          </div>
        </div>
    		<div class="row">
          <div class="col-md-4 ftco-animate ftco-animated">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-5">
              	<span class="flaticon-diet"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Healthy Foods</h3>
                <p class="mt-5">A healthy diet is a solution to many of our health - care problems.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 ftco-animate ftco-animated">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-5">
              	<span class="flaticon-bicycle"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Fastest Delivery</h3>
                <p class="mt-5">We provide our customers fastest delivery as we can't see them.</p>
                </div>
            </div>      
          </div>
          <div class="col-md-4 ftco-animate ftco-animated">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-5"><span class="flaticon-pizza-1"></span></div>
              <div class="media-body">
                <h3 class="heading">Original Recipes</h3>
                <p class="mt-5">A healthy diet is a solution to many of our health - care problems.</p>
              </div>
            </div>    
          </div>
        </div>
    	</div>
    </section>


<?php
// footer section

include_once('includes/footer.php');

// footer ends

?>

