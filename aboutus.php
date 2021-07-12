<?php
session_start();
?>

<html>

  <head>
    <title> About | Fork n Spoon </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/aboutus.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
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
            <li><a href="index.php">Home</a></li>
            <li class="active"><a href="aboutus.php">About</a></li>
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
    <div class="wide">
      <!-- First Grid -->
      <div class="w3-row-padding w3-padding-64 w3-container">
    <div class="w3-content">
      <div class="w3-twothird">
        <h1>Focusing on Affordability</h1>
        <h5 class="w3-padding-32">The benefits of providing an interesting choice are embodied by the success of ForknSpoon. We are leaving no stone unturned when it comes to making food more affordable without compromising on the profitability of a given restaurant.</h5>

      </div>

      <div class="w3-third w3-center">
        <i class="fa fa-anchor w3-padding-64 w3-text-red"></i>
      </div>
    </div>
  </div>

  <!-- Second Grid -->
  <div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
    <div class="w3-content">
      <div class="w3-third w3-center">
        <i class="fa fa-coffee w3-padding-64 w3-text-red w3-margin-right"></i>
      </div>

      <div class="w3-twothird">
        <h1>Accessibility</h1>
        <h5 class="w3-padding-32">Boosting accessibility for customers
Our delivery service is reaching more and more cities. We are actively growing our services - table reservation, food@work for corporate catering and are continuing to power Feeding India.
</h5>

      </div>
    </div>
  </div>
  <!-- Thid Grid -->

  <div class="w3-row-padding w3-padding-64 w3-container">
<div class="w3-content">
  <div class="w3-twothird">
    <h1>Quality</h1>
    <h5 class="w3-padding-32">Improving quality of food
We are committed to nurturing a neutral platform and are helping food establishments maintain high standards through Hyperpure. Food Hygiene Ratings is a coveted mark of quality among our restaurant partners.<br><br>

Launched in 2021, Our technology platform connects customers, restaurant partners and delivery partners, serving their multiple needs. Customers use our platform to search and discover restaurants, read and write customer generated reviews and view and upload photos, order food delivery, book a table and make payments while dining-out at restaurants. On the other hand, we provide restaurant partners with industry-specific marketing tools which enable them to engage and acquire customers to grow their business while also providing a reliable and efficient last mile delivery service. We also operate a one-stop procurement solution, Hyperpure, which supplies high quality ingredients and kitchen products to restaurant partners. We also provide our delivery partners with transparent and flexible earning opportunities.
</h5>

  </div>

  <div class="w3-third w3-center">
    <i class="fa fa-anchor w3-padding-64 w3-text-red"></i>
  </div>
</div>
</div>

<!-- Fourth Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
<div class="w3-content">
  <div class="w3-third w3-center">
    <i class="fa fa-coffee w3-padding-64 w3-text-red w3-margin-right"></i>
  </div>

  <div class="w3-twothird">
    <h1>Terms & Conditions</h1>
    <h5 class="w3-padding-32">Any use of this website or its contents, including copying or storing it or them in whole or part, other than for your own personal, non-commercial use is prohibited without the explicit permission of ForknSpoon. All information displayed, transmitted or carried on ForknSpoon is protected by copyright and other intellectual property laws. All rights, including copyright, in this website are owned by or licensed to ForknSpoon. This site is designed, updated and maintained independently by ForknSpoon.<br><br>

The content is owned by ForknSpoon. You may not modify, publish, transmit, transfer, sell, reproduce, create derivative work from, distribute, repost, perform, display or in any way commercially exploit any of the content available in the website.

</h5>

  </div>
</div>
</div>
<!-- Fifth Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
<div class="w3-content">
<div class="w3-twothird">
  <h1>Ownership of rights</h1>
  <h5 class="w3-padding-32">Any use of this website or its contents, including copying or storing it or them in whole or part, other than for your own personal, non-commercial use is prohibited without the explicit permission of ForknSpoon. All information displayed, transmitted or carried on ForknSpoon is protected by copyright and other intellectual property laws. All rights, including copyright, in this website are owned by or licensed to ForknSpoon. This site is designed, updated and maintained independently by ForknSpoon.<br><br>

The content is owned by ForknSpoon. You may not modify, publish, transmit, transfer, sell, reproduce, create derivative work from, distribute, repost, perform, display or in any way commercially exploit any of the content available in the website.

</h5>

</div>

<div class="w3-third w3-center">
  <i class="fa fa-anchor w3-padding-64 w3-text-red"></i>
</div>
</div>
</div>

<!-- Sixth Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
<div class="w3-content">
<div class="w3-third w3-center">
  <i class="fa fa-coffee w3-padding-64 w3-text-red w3-margin-right"></i>
</div>

<div class="w3-twothird">
  <h1>Disclaimer</h1>
  <h5 class="w3-padding-32">Information, services, names, pictures, advertisements, images and contents are provided “as is” on this web site. ForknSpoon Private Limited expressly disclaims all and any kind of warranties, whether express or implied, including, but not limited to, implied warranties of merchantability and fitness for a particular purpose. Parties using the information provided on this web site may do so after satisfying themselves that the same suits their individual requirements.
<br><br>
ForknSpoon uses information voluntarily provided by users to optimise their experience on our web site, whether to provide personalised elements on the site, or to prepare a better future content base in the interests of our users. However, the information contained on this web site is not intended to be, and should not be treated as legal or professional advice. “ForknSpoon” is a registered trademark. All other trademarks, company names or logos, and product names referred to in this web site remain the property of their respective owners.<br><br>

In no event shall ForknSpoon be responsible to any person or entity for any loss or damage, whether direct, indirect, incidental, consequential or otherwise, arising out of access or use or dissemination of information contained on this web site, including, but not limited to, loss of profits, data, or damage to the user’s computer systems. The information, contents, names, images, etc. may be changed, updated, modified and/or improved from time to time without any notice.
<br><br>
ForknSpoon shall make all reasonable attempts to eliminate and exclude viruses from this web site. However, ForknSpoon does not ensure or accept any liability in respect thereof. Parties using this web site may take suitable precautions before downloading information.
<br><br>
This Disclaimer Clause and any claims arising out of the use of the information from this web site shall be governed by the laws of India and only the Courts in Delhi, and no other Courts, shall have jurisdiction over the same. By accessing this web site, the user accepts this.


</h5>
</div>
</div>
</div>
<!-- Seven Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
<div class="w3-content">
<div class="w3-twothird">
  <h1>Website feedback, user comments and user generated content</h1>
  <h5 class="w3-padding-32">All reviews, comments, feedback, postcards, suggestions, ideas, and other submissions disclosed, submitted or offered to ForknSpoon.in on or by this Website or otherwise disclosed, submitted or offered in connection with your use of this Website (collectively, the “Comments”) shall be and remain ForknSpoon.in property. Such disclosure, submission or offer of any Comments shall constitute an assignment to ForknSpoon.in of all worldwide rights, titles and interests in all copyrights and other intellectual properties in the Comments. Thus, we own exclusively all such rights, titles and interests and shall not be limited in any way in its use, commercial or otherwise, of any Comments. We will be entitled to use, reproduce, disclose, modify, adapt, create derivative works from, publish, display and distribute any Comments you submit for any purpose whatsoever, without restriction and without compensating you in any way. ForknSpoon.in is and shall be under no obligation <br>(1) to maintain any Comments in confidence;
  <br>(2) to pay you any compensation for any Comments; or
  <br>(3) to respond to any Comments.<br> You agree that any Comments submitted by you to the Website will not violate this policy or any right of any third party, including copyright, trademark, privacy or other personal or proprietary right(s), and will not cause injury to any person or entity. You further agree that no Comments submitted by you to the Website will be or contain libelous or otherwise unlawful, threatening, abusive or obscene material, or contain software viruses, political campaigning, commercial solicitation, chain letters, mass mailings or any form of ‘spam’. ForknSpoon.in does not regularly review posted Comments, but does reserve the right (but not the obligation) to monitor and edit or remove any Comments submitted to the Website. You grant ForknSpoon.in the right to use the name that you submit in connection with any Comments. You agree not to use a false email address, impersonate any person or entity, or otherwise mislead as to the origin of any Comments you submit. You are and shall remain solely responsible for the content of any Comments you make and you agree to indemnify ForknSpoon.in and its affiliates for all claims resulting from any Comments you submit. ForknSpoon.in and its affiliates take no responsibility and assume no liability for any Comments submitted by you or any third party.

</h5>

</div>

<div class="w3-third w3-center">
  <i class="fa fa-anchor w3-padding-64 w3-text-red"></i>
</div>
</div>
</div>

<!-- Eight Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
<div class="w3-content">
<div class="w3-third w3-center">
  <i class="fa fa-coffee w3-padding-64 w3-text-red w3-margin-right"></i>
</div>

<div class="w3-twothird">
  <h1>Privacy policy</h1>
  <h5 class="w3-padding-32">The Service Provider will use the customer information as shared by the merchant to update and inform the customer through sms, whatsapp and/or email regarding the delivery status of the product and obtain feedback from the customer regarding the said service to improve customer experience with the service provider.
<br><br>
The said information will be used for the purpose of updating the customer with the delivery status of the product and improving our service for the customer.



</h5>
</div>
</div>
</div>

<!-- Nine Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
<div class="w3-content">
<div class="w3-twothird">
  <h1>Refund policy</h1>
  <h5 class="w3-padding-32">We support the following payment options at ForknSpoon.in
<br>
Credit Card
<br>
Debit Card
<br>
UPI
<br>
There are no hidden charges. You pay only the amount that you see in your order summary at the time of check out. If you see any charges on your credit/debit card for purchases made but you have never created an account or signed up, please check with your family members or business colleagues authorized to make purchases on your behalf. If you’re still unable to recognize the charge, please report the unauthorized purchase within 30 days of the transaction so that we can look into it. Please email us at support@ForknSpoon.in
<br>

In case of a payment failure, please retry ensuring: Information passed on to payment gateway is accurate i.e. account details, billing address, password (for net banking), etc. Kindly also check if your Internet connection has been disrupted in the process.
<br>
If your account has been debited after a payment failure, it is normally rolled back to your account within 7 business days. You can email us on support@ForknSpoon.in with your order number for any clarification.


</h5>

</div>

<div class="w3-third w3-center">
  <i class="fa fa-anchor w3-padding-64 w3-text-red"></i>
</div>
</div>
</div>

<!-- Ten Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
<div class="w3-content">
<div class="w3-third w3-center">
  <i class="fa fa-coffee w3-padding-64 w3-text-red w3-margin-right"></i>
</div>

<div class="w3-twothird">
  <h1>Cancellation policy</h1>
  <h5 class="w3-padding-32">We accept all cancellations made before the cut-off time of our shipping slot (3 hours). Please reach out to our customer services for cancellation requests and refunds. We refund all payments made for orders placed as a store credit, which can be used by customers for future purchases. If we suspect any fraudulent transaction or transactions violating the terms of website use, we are at sole discretion to cancel such orders. These customers/accounts will be denied access from the use of site or purchase of products in the future.


</h5>
</div>
</div>
</div>
<!-- Eleven Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
<div class="w3-content">
<div class="w3-twothird">
  <h1>Shipping policy</h1>
  <h5 class="w3-padding-32">We are providing digital ordering of in store dine in / Takeaway services. Hence Shipping is not applicable and return of replacement of food as per the policy of respective stores from where customer has ordered.

</h5>

</div>

<div class="w3-third w3-center">
  <i class="fa fa-anchor w3-padding-64 w3-text-red"></i>
</div>
</div>
</div>
<!-- Qoutes -->
  <div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
      <h1 class="w3-margin w3-xlarge">Contact us</h1>
  </div>

  <!-- Footer -->
  <footer class="w3-container w3-padding-64 w3-center w3-opacity">
    <div class="w3-xlarge w3-padding-32">
      <i class="fa fa-facebook-official w3-hover-opacity"></i>
      <i class="fa fa-instagram w3-hover-opacity"></i>
      <i class="fa fa-snapchat w3-hover-opacity"></i>
      <i class="fa fa-pinterest-p w3-hover-opacity"></i>
      <i class="fa fa-twitter w3-hover-opacity"></i>
      <i class="fa fa-linkedin w3-hover-opacity"></i>
   </div>
   <p>Contact us:- contact@forknspoon.in</a></p>
   <p>Awadhpuri, Bhopal , 462022</p>
   <p>&copy; Copyright 2021 forknspoon.in</p>
  </footer>
    </div>
         </body>
</html>
