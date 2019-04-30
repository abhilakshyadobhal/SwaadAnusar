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
        <h2 class="mb-4 text-center" data-aos="fade-up" data-aos-anchor-placement="top-bottom">Our Services</h2>
        <p class="flip text-center"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 ftco-animate ftco-animated">
        <div class="media d-block text-center block-6 services">
          <div class="icon d-flex justify-content-center align-items-center mb-5">
            <span class="flaticon-diet" data-aos="zoom-in" data-aos-duration="3000"></span>
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
            <span class="flaticon-bicycle" data-aos="zoom-in" data-aos-duration="3000"></span>
          </div>
          <div class="media-body">
            <h3 class="heading">Fastest Delivery</h3>
            <p class="mt-5">We provide our customers fastest delivery as we can't see them.</p>
            </div>
        </div>      
      </div>
      <div class="col-md-4 ftco-animate ftco-animated">
        <div class="media d-block text-center block-6 services">
          <div class="icon d-flex justify-content-center align-items-center mb-5">
            <span class="flaticon-pizza-1" data-aos="zoom-in" data-aos-duration="3000"></span>
          </div>
          <div class="media-body">
            <h3 class="heading">Best Quality</h3>
            <p class="mt-5">We don't sacrifice with the quality of food.</p>
          </div>
        </div>    
      </div>
    </div>
  </div>
</section>

<section class="location">
  <div class="container-fluid p-0" id="map-and-form">
    <div class="container-fluid p-0">
        <div class="row col-md-12 m-0 p-0">
            <div class="col-md-6">
                <div class="row">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4029.9991969818734!2d75.70013596887807!3d31.251058085432145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a5f68e7757a79%3A0xe2028a6b7e85eb9e!2sBh1+Lpu!5e0!3m2!1sen!2sin!4v1555663669320!5m2!1sen!2sin" width="650" height="800" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row" id="map-form">
                    <div class="row col-md-12 ">
                        <h3 class="h3-responsive text-center ml-auto mr-auto">Contact Us</h3>
                    </div>
                    <div class="row col-md-12 ">
                        <p class="p-responsive text-center ml-auto mr-auto">Feel free to share your reviews with us.</h3>
                    </div>
                    <form class="ml-auto mr-auto d-block" id="map-form-content" metho="post">
                        <div class="row map-form-input d-block">
                            <input type="text" placeholder="Enter name" name="sender_name" required>
                        </div>
                        <div class="row map-form-input d-block">
                            <input type="email" placeholder="Enter email" name="sender_email" required>

                        </div>
                        <div class="row map-form-input d-block">
                            <textarea rows="3" cols="36" placeholder="Enter message" name="sender_message" required></textarea>
                        </div>
                        <div class="row d-block mr-auto ml-4 mt-2">
                            <button id="map-form-button" name="send">Send message</button>
                        </div>
                    </form>
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

<?php
  if(isset($_POST["send"]))
  {
    $email=$_POST['sender_email'];
    // Sanitize E-mail Address
    $email =filter_var($email, FILTER_SANITIZE_EMAIL);
    // Validate E-mail Address
    $email= filter_var($email, FILTER_VALIDATE_EMAIL);
    if (!$email){
    echo "Invalid Sender's Email";
    }
    else{
    $message = $_POST['sender_message'];
    $headers = 'From:'. $email2 . "rn"; // Sender's Email
    $headers .= 'Cc:'. $email2 . "rn"; // Carbon copy to Sender
    // Message lines should not exceed 70 characters (PHP rule), so wrap it
    $message = wordwrap($message, 70);
    // Send Mail By PHP Mail Function
    mail("recievers_mail_id@xyz.com", $subject, $message, $headers);
    echo "Your mail has been sent successfuly ! Thank you for your feedback";
    }
  }
?>

