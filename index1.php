<?php 
session_start();
$name = $_SESSION['Name3'];
$uslocality = $_SESSION['uslocation'];

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

<body data-spy="scroll" data-target="#navbar" class="static-layout">
  </div>
  <div id="canvas-overlay"></div>
  <div class="boxed-page">
    <nav id="navbar-header" class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand navbar-brand-center d-flex align-items-center p-0 only-mobile" href="/"> <img src="img/logo.png" alt=""> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="lnr lnr-menu"></span> </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
          <a class="navbar-brand navbar-brand-center d-flex align-items-center only-desktop" href="index.html"> <img src="img/logo.png" alt=""> </a>
          <ul class="navbar-nav d-flex justify-content-between">
            <div class="d-flex flex-lg-row flex-column">
              <li class="nav-item active">  </li>
              <li class="nav-item"> </li>
              <li class="nav-item dropdown"> 
                
              </li>
            </div>
          </ul>
          <ul class="navbar-nav d-flex justify-content-between">
            <div class="d-flex flex-lg-row flex-column">
              <li class="nav-item dropdown"> <p style="font-size: 32px;"><b> <?php echo "$name"; ?></b></p> </li>
            </div>
          </ul>
        </div>
      </div>
    </nav>
    <div class="hero">
      <div class="container">
        <div class="row d-flex align-items-center">
          <div class="col-lg-6 hero-left">
            <h1 class="display-4 mb-5">Lets Order <br>Some Groceries</h1>
            <div class="mb-2"> <a class="btn btn-primary btn-shadow btn-lg" href="shop.php">Explore Shops</a>
              
            </div>
            <ul class="hero-info list-unstyled d-flex text-center mb-0">
              <li class="border-right"> <span class="lnr lnr-rocket"></span>
                <h5>
              No Waste of Time
            </h5> </li>
              <li class="border-right"> <span class="lnr lnr-leaf"></span>
                <h5>
              Fresh Food
            </h5> </li>
              <li class=""> <span class="lnr lnr-bubble"></span>
                <h5>
              24/7 Support
            </h5> </li>
            </ul>
          </div>
          <div class="col-lg-6 hero-right">
            <div class="owl-carousel owl-theme hero-carousel">
              <div class="item"> <img class="img-fluid" src="img/orange.jpg" alt=""> </div>
              <div class="item"> <img class="img-fluid" src="img/tomato.jpg" alt=""> </div>
              <div class="item"> <img class="img-fluid" src="img/grapes.jpg" alt=""> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Welcome Section -->
    <!-- Special Dishes Section -->
    <section id="gtco-special-dishes" class="bg-grey section-padding">
      <div class="container">
        <div class="section-content">
          <div class="heading-section text-center"> <span class="subheading">
                  Top  Facts
                </span>
            <h2>
                </h2> </div>
          <div class="row mt-5">
            <div class="col-lg-5 col-md-6 align-self-center py-5">
               <img src="img/fcat3.jpg" alt="" class="img-fluid shadow w-100 img-fact">
              
            </div>
            <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center mt-4 mt-md-0"> <img src="img/fact 4.jpg" alt="" class="img-fluid shadow w-100 img-fact" > </div>
          </div>
          <div class="row mt-5">
            <div class="col-lg-5 col-md-6 align-self-center order-2 order-md-1 mt-4 mt-md-0"> <img src="img/tom.jpg" alt="" class="img-fluid shadow w-100 img-fact"> </div>
            <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center order-1 order-md-2 py-5">
              <img src="img/fact.jpg" alt="" class="img-fluid shadow w-100 img-fact">
              
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End of Special Dishes Section -->
    <!-- Testimonial Section-->
    <!-- End of Testimonial Section-->
    <!-- Team Section -->
    <section id="gtco-team" class="bg-white section-padding">
      <div class="container">
        <div class="section-content">
          <div class="heading-section text-center"> <span class="subheading">
                    Specialties
                </span>
            <h2>
                    Our Team
                </h2> </div>
          <div class="row">
            <div class="col-md-6">
              <div class="team-card mb-5"> <img class="img-fluid" src="img/bs.jpg"  alt="">
                <div class="team-desc">
                  <h4 class="mb-0">B Sriram</h4>
                  <p class="mb-1">4th Year</p>
                  <ul class="list-inline mb-0 team-social-links">
                    <li class="list-inline-item">
                      <a href="#"> <i class="fab fa-facebook-f"></i> </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#"> <i class="fab fa-twitter"></i> </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#"> <i class="fab fa-instagram"></i> </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#"> <i class="fab fa-google-plus-g"></i> </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="team-card mb-5"> <img class="img-fluid" src="img/pk.jpg" alt="">
                <div class="team-desc">
                  <h4 class="mb-0">RA Praveenkumar</h4>
                  <p class="mb-1">4th Year</p>
                  <ul class="list-inline mb-0 team-social-links">
                    <li class="list-inline-item">
                      <a href="#"> <i class="fab fa-facebook-f"></i> </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#"> <i class="fab fa-twitter"></i> </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#"> <i class="fab fa-instagram"></i> </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#"> <i class="fab fa-google-plus-g"></i> </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End of Team Section -->
    <!-- Reservation Section -->
    <!-- End of Reservation Section -->
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
    </footer>
  </div>
  </div>
  <!---Modal--->
  <div class="container">
    <div class="row justify-content-center">
      <!-- Modal-->
      <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
        <div role="document" class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header row d-flex justify-content-between mx-1 mx-sm-3 mb-0 pb-0 border-0">
              <div class="tabs" id="tab01">
                <h6 class="text-muted">Sign - In</h6> </div>
              <div class="tabs" id="tab04">
                <h6 class="text-muted">Sign - Up</h6> </div>
            </div>
            <div class="line"></div>
            <div class="modal-body p-0">
              <fieldset class="show" id="tab011">
                <form class="text-center border border-light p-5" action="userlogin.php" method="POST">
                  <p class="h4 mb-4">Sign in</p>
                  <!-- Email -->
                  <input type="text" id="" class="form-control mb-4" placeholder="Name" name="name1">
                  <!-- Password -->
                  <input type="text" id="" class="form-control mb-4" placeholder="Phonenumber" name="phonenumber">
                  <div class="d-flex justify-content-around">
                    <div> </div>
                  </div>
                  <button class="btn btn-primary btn-block my-4" type="submit">Sign in</button>
                </form>
                <!-- Default form login -->
              </fieldset>
              <fieldset id="tab041">
                <form class="text-center border border-light p-5" action="userregister.php" method="POST">
                  <p class="h4 mb-4">Sign up</p>
                  <input type="text" id="" class="form-control mb-4" placeholder="Name" name="name">
                  <!-- Email -->
                  
                  <!-- Password -->
                  <input type="number" id="" class="form-control mb-4" placeholder="Phone" name="phone" min="4000000000"  oninvalid="this.setCustomValidity(' Enter valid number')">
                  <select name="location">
                  
<option>--Choose Location--</option>
<option>Adambakkam</option>
<option>Adyar</option>
<option>Alandur</option>
<option>Alapakkam</option>
<option>Alwarpet</option>
<option>Alwarthirunagar</option>
<option>Ambattur</option>
<option>Aminjikarai</option>
<option>Anna Nagar</option>
<option>Annanur</option>
<option>Arumbakkam</option>
<option>Ashok Nagar</option>
<option>Avadi</option>
<option>Ayanavaram</option>
<option>Besant Nagar</option>
<option>Basin Bridge</option>
<option>Chepauk</option>
<option>Chetput</option>
<option>Chintadripet</option>
<option>Chitlapakkam</option>
<option>Choolai</option>
<option>Choolaimedu</option>
<option>Chrompet</option>
<option>Egmore</option>
<option>Ekkaduthangal</option>
<option>Eranavur</option>
<option>Ennore</option>
<option>Foreshore Estate</option>
<option>Fort St. George</option>
<option>George Town</option>
<option>Gopalapuram</option>
<option>Government Estate</option>
<option>Guindy</option>
<option>Gerugambakkam</option>
<option>IIT Madras</option>
<option>Injambakkam</option>
<option>ICF</option>
<option>Iyyapanthangal</option>
<option>Jafferkhanpet</option>
<option>Karapakkam</option>
<option>Kattivakkam</option>
<option>Kattupakkam</option>
<option>Kazhipattur</option>
<option>K.K. Nagar</option>
<option>Keelkattalai</option>
<option>Kattivakkam</option>
<option>Kilpauk</option>
<option>Kodambakkam</option>
<option>Kodungaiyur</option>
<option>Kolathur</option>
<option>Korattur</option>
<option>Korukkupet</option>
<option>Kottivakkam</option>
<option>Kotturpuram</option>
<option>Kottur</option>
<option>Kovilambakkam</option>
<option>Koyambedu</option>
<option>Kundrathur</option>
<option>Madhavaram</option>
<option>Madhavaram Milk Colony</option>
<option>Madipakkam</option>
<option>Madambakkam</option>
<option>Maduravoyal</option>
<option>Manali</option>
<option>Manali New Town</option>
<option>Manapakkam</option>
<option>Mandaveli</option>
<option>Mangadu</option>
<option>Mannady</option>
<option>Mathur</option>
<option>Medavakkam</option>
<option>Meenambakkam</option>
<option>MGR Nagar</option>
<option>Minjur</option>
<option>Mogappair</option>
<option>MKB Nagar</option>
<option>Mount Road</option>
<option>Moolakadai</option>
<option>Moulivakkam</option>
<option>Mugalivakkam</option>
<option>Mudichur</option>
<option>Mylapore</option>
<option>Nandanam</option>
<option>Nanganallur</option>
<option>Nanmangalam</option>
<option>Neelankarai</option>
<option>Nemilichery</option>
<option>Nesapakkam</option>
<option>Nolambur</option>
<option>Noombal</option>
<option>Nungambakkam</option>
<option>Otteri</option>
<option>Padi</option>
<option>Pakkam</option>
<option>Palavakkam</option>
<option>Pallavaram</option>
<option>Pallikaranai</option>
<option>Pammal</option>
<option>Park Town</option>
<option>Parry's Corner</option>
<option>Pattabiram</option>
<option>Pattaravakkam</option>
<option>Pazhavanthangal</option>
<option>Peerkankaranai</option>
<option>Perambur</option>
<option>Peravallur</option>
<option>Perumbakkam</option>
<option>Perungalathur</option>
<option>Perungudi</option>
<option>Pozhichalur</option>
<option>Poonamallee</option>
<option>Porur</option>
<option>Pudupet</option>
<option>Pulianthope</option>
<option>Purasaiwalkam</option>
<option>Puthagaram</option>
<option>Puzhal</option>
<option>Puzhuthivakkam/ Ullagaram</option>
<option>Raj Bhavan</option>
<option>Ramavaram</option>
<option>Red Hills</option>
<option>Royapettah</option>
<option>Royapuram</option>
<option>Saidapet</option>
<option>Saligramam</option>
<option>Santhome</option>
<option>Sembakkam</option>
<option>Selaiyur</option>
<option>Shenoy Nagar</option>
<option>Sholavaram</option>
<option>Sholinganallur</option>
<option>Sithalapakkam</option>
<option>Sowcarpet</option>
<option>St.Thomas Mount</option>
<option>Tambaram</option>
<option>Teynampet</option>
<option>Tharamani</option>
<option>T. Nagar</option>
<option>Thirumangalam</option>
<option>Thirumullaivoyal</option>
<option>Thiruneermalai</option>
<option>Thiruninravur</option>
<option>Thiruvanmiyur</option>
<option>Tiruverkadu</option>
<option>Thiruvotriyur</option>
<option>Thuraipakkam</option>
<option>Tirusulam</option>
<option>Tiruvallikeni</option>
<option>Tondiarpet</option>
<option>United India Colony</option>
<option>Vandalur</option>
<option>Vadapalani</option>
<option>Valasaravakkam</option>
<option>Vallalar Nagar</option>
<option>Vanagaram</option>
<option>Velachery</option>
<option>Villivakkam</option>
<option>Virugambakkam</option>
<option>Vyasarpadi</option>
<option>Washermanpet</option>
<option>West Mambalam</option>
                </select>
                  <div class="d-flex justify-content-around">
                    <div> </div>
                  </div>
                  <button class="btn btn-primary btn-block my-4" type="submit">Sign up</button>
                </form>
              </fieldset>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <style>
        select{
            height:39px;
    width:280px;
    border:1px solid lightgray;
    border-radius:5px;
        }
        .img-fact{
          transition: all .2s ease-in-out;
        }
        .img-fact:hover{
          transform: scale(1.1);
        }
    </style>
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
  <script src="js/app.min.js "></script>
</body>

</html>