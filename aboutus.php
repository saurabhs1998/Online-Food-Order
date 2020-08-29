<?php
session_start();
?>

<html>

  <head>
  <link rel="icon" href="images/waiter1.gif" type="image" sizes="16x16"> 
    <title> About | Food-शाला </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/aboutus.css">
  <link rel="stylesheet" type = "text/css" href ="Front_Desgin/css/style.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat&display=swap">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700|Josefin+Sans:300,400,700">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <script src="https://use.fontawesome.com/5b67370c4c.js"></script>

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
          <a class="navbar-brand" href="index.php">Food-शाला</a>
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
    <section id="gtco-special-dishes" class="bg-grey section-padding">
            <div class="container">
                <div class="section-content">
                    <div class="heading-section text-center">
                        <span class="subheading">
                            <br><br>
                        </span>
                        <h2>
                        Welcome to Food-शाला
                        </h2>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-5 col-md-6 align-self-center py-5">
                            <h2 class="special-number">01.</h2>
                            <div class="dishes-text">
                                <h3><span>Welcome</span><br> User !!</h3>
                                <p class="pt-3">On her way she met a copy. The copy warned the Little Blind Text, that where it came
                                    from it would have been rewritten a thousand times and everything that was left from
                                    its origin would be the word "and" and the Little Blind Text should turn around and
                                    return to its own, safe country. A small river named Duden flows by their place and
                                    supplies it with the necessary regelialia. It is a paradisematic country, in which
                                    roasted parts of sentences fly into your mouth.</p>
                                <!-- <h3 class="special-dishes-price">29.99<sup>TND</sup></h3> -->
                                <!-- <a href="lundin.php" class="btn-primary mt-3">Go to Dinner/lunch</a> -->
                            </div>
                        </div>
                        <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center mt-4 mt-md-0">
                            <img src="Front_Desgin/img/steak.jpg" alt="" class="img-fluid shadow w-100">
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-5 col-md-6 align-self-center order-2 order-md-1 mt-4 mt-md-0">
                            <img src="Front_Desgin/img/salmon-zucchini.jpg" alt="" class="img-fluid shadow w-100">
                        </div>
                        <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center order-1 order-md-2 py-5">
                            <h2 class="special-number">02.</h2>
                            <div class="dishes-text">
                                <h3><span>Welcome</span><br> Manager</h3>
                                <p class="pt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis,
                                    accusamus culpa quam amet ipsam odit ea doloremque accusantium quo, itaque possimus
                                    eius. In a quis quibusdam omnis atque vero dolores!</p>
                                <!-- <h3 class="special-dishes-price">49.99<sup>TND</sup></h3> -->
                                <!-- <a href="lundin.php"  class="btn-primary mt-3">Go to Dinner/lunch<span><i
                                            class="fa fa-long-arrow-right"></i></span></a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <br><br>

        <?php include('footer.php') ?>




        
        <!-- <div class="tagline">It's not our <font color="red"><strong>work life</strong></font>, it's our <font color="green"><strong><em>life's work</em>.</strong></font></div> -->
        <!-- <h3 style="color: red">About the food culture in Le cafe'</h3> -->
        <!-- <br> -->
        <!-- <h3 style="color: white">Order food & beverages online from restaurants near & around you. <h3 style="color: white">We deliver food from your neighborhood local joints, your favorite cafes, luxurious & elite restaurants in your area,</h3><h3 style="color : white"> and also from chains like Dominos, KFC, Burger King, Pizza Hut, FreshMenu, Mc Donald's, Subway, Faasos, Cafe Coffee Day, Taco Bell, and more. Exciting bit?</h3><h3 style="color : white"> We place no minimum order restrictions! Order in as little (or as much) as you'd like. We'll Swiggy it to you!</h3></h3> -->
    </div>

      <!-- <iframe src="https://www.google.com/maps/place/Le+Cafe/@11.9316155,79.8335933,17z/data=!3m1!4b1!4m5!3m4!1s0x3a53636a24873e45:0x7f1e7ad6a30982dd!8m2!3d11.9316103!4d79.835782" style="width: 250px"></iframe> -->
         </body>
</html>