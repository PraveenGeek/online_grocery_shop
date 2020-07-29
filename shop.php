<?php 

session_start();
error_reporting(0);
require_once('connection.php');
$sql = "SELECT * FROM shop_details";
$result = mysqli_query($conn,$sql);
$shop_id = array();
$shop_name = array();
$locality = array();
$imgid = array();
$name = $_SESSION['Name3'];
$uslocality = $_SESSION['uslocation'];
if(mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_assoc($result))
    {
        
        array_push($shop_id, $row['shopid']);
         array_push($shop_name, $row['sname']);
         array_push($locality, $row['location']);
         array_push($imgid, $row['sid']);
        
       } 
    }
   $len = sizeof($shop_id);
?>

<!DOCTYPE html>
<!--
	Resto by GetTemplates.co
	URL: https://gettemplates.co
-->
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Small Basket</title>
    <meta name="description" content="Resto">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- External CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" href="vendor/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/brands.css">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700|Josefin+Sans:300,400,700">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.min.css">

    <!-- Modernizr JS for IE8 support of HTML5 elements and media queries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>

</head>
<body data-spy="scroll" >
	
	<div class="boxed-page">
		<nav id="navbar-header" class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand navbar-brand-center d-flex align-items-center p-0 only-mobile" href="/">
            <img src="img/logo.png" alt="">
        </a>
        
        

        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
            <a class="navbar-brand navbar-brand-center d-flex align-items-center only-desktop" href="index.html">
                <img src="img/logo.png" alt="">
            </a>
            <ul class="navbar-nav d-flex justify-content-between">
                
                <div class="d-flex flex-lg-row flex-column">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        
                    </li>

                    
                </div>
            </ul>
            
            
                                     <b style="font-size: 20px;"> <?php echo "$name"; ?></b>

        </div>
    </div>
</nav>  		
<!-- Team Section -->
<section id="gtco-team" class="bg-white section-padding">
    <div class="container">
        <div class="section-content">
            <div class="heading-section text-center">
                <span class="subheading">
                    Nearby
                </span>
                <h2>
                    Shop's
                </h2>
            </div>
            <div class="row">
              <?php for($i=0;$i<$len;$i++){
                if ($locality[$i]==$uslocality) {
                    # code...
                
?>

<div class="card card-cascade narrower col-md-4">

  <!-- Card image -->
  <div class="view view-cascade overlay" >
    <img class="card-img-top" src="imageView.php?image_id=<?php echo($imgid[$i]); ?>" alt="Card image cap" height=300px>
    <a>
    </a>
  </div>

  <!-- Card content -->
  <div class="card-body card-body-cascade">

    <!-- Label -->
    <h5 class="pink-text pb-2 pt-1"><i class="fas fa-utensils"></i> <?php echo "$shop_name[$i]"; ?></h5>
    <!-- Title -->
    
    <!-- Button -->
                                <button class="btn btn-primary" id="<?php echo($shop_id[$i]); ?>">Enter Shop</button>

  </div>

</div>
           
                
                
            
               
                <?php
}} ?>
                
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
  var buttons = document.querySelectorAll('button');
  var click = "";

for (var i=0; i<buttons.length; ++i) {
  buttons[i].addEventListener('click', clickFunc);
}

function clickFunc() {
    var click = this.id;
window.location.href = "menu.php?shop_get=" + click;  
}
 </script>
 <script type="text/javascript">
     
 </script>
 



<footer class="mastfoot pb-5 bg-white section-padding pb-0">
      <div class="inner container">
        <div class="row">
          <div class="col-lg-4">
            <div class="footer-widget pr-lg-5 pr-0"> <img src="img/logo.png" class="img-fluid footer-logo mb-3" alt="">
              <p>We Provide A Website For The Producer To Show Thier Products,There Are A Lot Of Available products To Chose With. The Consumer Can Chose Any Product And Place Order. Our Primary Idea is to help people to buy product from their own trust shop's</p>
              <nav class="nav nav-mastfoot justify-content-start">
                <a class="nav-link" href="#"> <i class="fab fa-facebook-f"></i> </a>
                <a class="nav-link" href="#"> <i class="fab fa-twitter"></i> </a>
                <a class="nav-link" href="#"> <i class="fab fa-instagram"></i> </a>
              </nav>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="footer-widget px-lg-5 px-0">
              
            </div>
          </div>
          <div class="col-lg-4">
            <div class="footer-widget pl-lg-5 pl-0">
              <h4>Message</h4>
              <p>Send use you're Queries</p>
              <form id="newsletter">
                <div class="form-group">
                  <textarea style="width: 100%;"></textarea>
                <button type="submit" class="btn btn-primary w-100">Submit</button>
              </div>
              </form>
            </div>
          </div>
          <div class="col-md-12 d-flex align-items-center">
            <p class="mx-auto text-center mb-0">Copyright 2020. All Right Reserved.</p>
          </div>
        </div>
      </div>
    </footer>	</div>
	
</div>
	<!-- External JS -->
  
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
	<script src="vendor/bootstrap/popper.min.js"></script>
	<script src="vendor/bootstrap/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js "></script>
	<script src="vendor/owlcarousel/owl.carousel.min.js"></script>
	<script src="https://cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.js"></script>
	<script src="vendor/stellar/jquery.stellar.js" type="text/javascript" charset="utf-8"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>

	<!-- Main JS -->
    <style type="text/css">
        
    </style>
	<script src="js/app.min.js "></script>
</body>
</html>
