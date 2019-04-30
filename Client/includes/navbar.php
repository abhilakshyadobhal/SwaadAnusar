<?php
include_once('./login.php');
include_once('./register.php');
?>

  <div class="header-top">
  <div class="container">
    <div class="row">
      <div class="admin-contact">
        <i class="fas fa-phone"></i>
        <p class="admin-no d-inline ml-2">+91 -8077662309</p>
      </div>
      <div class="admin-signin ml-auto">
        <i class="fas fa-sign-in-alt mr-2"></i>
        <a href="../Admins/login.php" class="text-dark">Admin</a>
      </div>
    </div>
  </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark custom-nav sticky-top" id="navbar">
    <div class="container">
            <a class="navbar-brand" href="index.php"><span class="flaticon-pizza-1 mr-1"></span>SwaadAnusar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
            </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="menu.php" class="nav-link">Menu</a></li>
            <li class="nav-item"><a href="./checkout.php" class="nav-link"><i class="fas fa-shopping-cart"></i></a></li>
              <?php
                if(isset($_SESSION['name']))
                {
                  
                   echo "<li class='nav-item dropdown'>
                            <a class='nav-link dropdown-toggle text-capitalize' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>"
                              .$_SESSION['name']."
                            </a>
                            <div class='dropdown-menu mt-2' aria-labelledby='navbarDropdown'>
                              <i class='pl-1 d-inline fas fa-sign-out-alt text-white'></i><a class='d-inline dropdown-item text-white' href='includes/logout.php'>Logout</a>
                            </div>
                          </li>";

                }
                else
                {
                  echo "<li class='nav-item'><a data-toggle=\"modal\" data-target=\"#signin\" class=\"nav-link\">Login</a></li>";
                  echo "<li class='nav-item'><a data-toggle=\"modal\" data-target=\"#signup\" class=\"nav-link\">SignUp</a></li>";
                }
              ?>
        </ul>
        </div>
    </div>
</nav>
    
