<?php
session_start();
?>

<html>

  <head>
    <title> Home | Fork n Spoon</title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">

  <link rel="stylesheet" type = "text/css" href ="css/index.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <body>

    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>

    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Fork n Spoon</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active" ><a href="index.php">Home</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li><a href="contactus.php">Contact Us</a></li>

          </ul>

<?php
if(isset($_SESSION['login_user1'])){

?>


          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
            <li><a href="myrestaurant.php">MANAGER CONTROL PANEL</a></li>
            <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
           <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
            <li><a href="foodlist.php"><span class="glyphicon glyphicon-cutlery"></span> Food Zone </a></li>
            <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart
              (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]);
              echo "$count";
            }
              else
                echo "0";
              ?>)
             </a></li>
            <li><a href="logout_u.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
  <?php
}
else {

  ?>

<ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Sign Up <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="customersignup.php"> User Sign-up</a></li>
              <li> <a href="managersignup.php"> Manager Sign-up</a></li>

            </ul>
            </li>

            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-log-in"></span> Login <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li> <a href="customerlogin.php"> User Login</a></li>
              <li> <a href="managerlogin.php"> Manager Login</a></li>

            </ul>
            </li>
          </ul>

<?php
}
?>
       </div>

      </div>
    </nav>
    <div class="w3-opacity">
<div class="w3-clear"></div>
<header class="w3-center w3-margin-bottom">
  <img src="images/forknspoon.png"/>
  <h1><b>Fork n Spoon</b></h1>
  <p><b>Your Favourite Food delivery Partner</b></p>
</header>
</div>

    <div class="orderblock">
    <h2>Feeling Hungry?</h2>
    <center><a class="btn btn-success btn-lg" href="customerlogin.php" role="button" > Order Now </a></center>
    </div>
    <br>
    <!-- First Photo Grid-->
    <div class="w3-row" id="myGrid" style="margin-bottom:128px">
  <div class="w3-third">
    <img src="images/Baahubali_Thali.jpg" style="width:100%">
    <img src="images/burger.jpg" style="width:100%">
    <img src="images/Cheese_Blast_Sandwich.jpg" style="width:100%">
    <img src="images/Chocolate_Golgappe.jpg" style="width:100%">
    <img src="images/Chocolate_Hazelnut_Truffle.jpg" style="width:100%">
    <img src="images/coffee.jpg" style="width:100%">
  </div>

  <div class="w3-third">
    <img src="images/frenchfries.jpg" style="width:100%">
    <img src="images/Happy_Happy_Choco_Chip_Shake.jpg" style="width:100%">
    <img src="images/Magnum_Upside_Down.jpg" style="width:100%">
    <img src="images/Masala_Paneer_Kathi_Roll.jpg" style="width:100%">
    <img src="images/Meurig.jpg" style="width:100%">
  </div>

  <div class="w3-third">
    <img src="images/paneer pakora.jpg" style="width:100%">
    <img src="images/Pizza.jpg" style="width:100%">
    <img src="images/puff.jpg" style="width:100%">
    <img src="images/roll.jpg" style="width:100%">
    <img src="images/samosa.jpg" style="width:100%">
    <img src="images/tea.jpg" style="width:100%">
    <img src="images/Spring_Rolls.jpg" style="width:100%">
  </div>
</div>
<hr>
<hr>
<hr>
<div class="w3-container w3-padding-64 w3-center" id="team">
<h2>OUR TEAM</h2>

<div class="w3-row"><br>

<div class="w3-quarter">
  <img src="images/isha.jpeg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Isha Dam</h3>
</div>

<div class="w3-quarter">
  <img src="images/labhanshi.jpeg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Labhanshi Jain</h3>

</div>

<div class="w3-quarter">
  <img src="images/ayush.png" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Ayush Agrawal</h3>

</div>

<div class="w3-quarter">
  <img src="images/flower.jpeg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Flower Bisen</h3>

</div>

</div>
</div>
<hr>
<hr>
<hr>

<p align="center">&copy; Copyright 2021 forknspoon.in</p>


</body>
</html>
