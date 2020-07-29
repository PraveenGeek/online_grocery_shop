<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/modalcss.css">
    <style>
        select{
            height:39px;
    width:280px;
    border:1px solid lightgray;
    border-radius:5px;
        }
    </style>
  </head>
  <body style="background-color:#f5ece3;">
   
    <div class="section mx-3  bg bg-white">
    <div class="container my-5 ">
      <center>
      <div class="row py-5 ">
       <img class="" src="img/logo.png" alt="" height="100" width="350" >     
      </div>
      <div class="row ">
        <div class="col-md-6 ">
          <div class="card">
            <div class="card-body">
              <a href="#myModal" style="margin:8%;color:#45aba6;font-size:30px;" class="trigger-btn " data-toggle="modal"><i  class="fa fa-cart-arrow-down" aria-hidden="true" style="font-size:70px;"></i><br>Shop Registration</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 ">
          <div class="card">
            <div class="card-body">
              <a href="#myModal1" style="margin:8%;color:#45aba6;font-size:30px;" class="trigger-btn " data-toggle="modal"><i  class="fa fa-sign-in" aria-hidden="true" style="font-size:70px;"></i><br>Login Now</a>
            </div>
          </div>

        </div>
      </div>
      </center>
      <div class="section"> <br /><br /><br /><br /><br /></div>
    </div>
    </div>

    <div id="myModal" class="modal fade">
    	<div class="modal-dialog modal-login">
    		<div class="modal-content">
    			<div class="modal-header">
    				<div class="avatar">
    					<center>
                <i style="font-size:50px;padding:3%;" class="fa fa-shopping-basket" aria-hidden="true"></i>
    				</center></div>
    				<h4 class="modal-title">Register your Shop</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    			</div>
    			<div class="modal-body">
    				<form action="enter.php" method="POST">

              <div class="form-group">
    						<input type="text" class="form-control" name="sname" placeholder="Shop Name" required="required">
    					</div>
              <div class="form-group">
    						<input type="text" class="form-control" name="smno" placeholder="Shop Mobile Number" required="required">
    					</div>
              <div class="form-group">
    						<input type="text" class="form-control" name="semail" placeholder="Shop Email id" >
    					</div>
    					<div class="form-group">
    						<input type="text" class="form-control" name="saddr" placeholder="Shop Address" required="required">
    					</div>
                        <div class="form-group">
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
    					</div>
    					<div class="form-group">
    						<button type="submit" class="btn btn-primary btn-lg btn-block login-btn">Register</button>
    					</div>
    				</form>
    			</div>
    			<div class="modal-footer">
    				Welcome to our Community !!!
    			</div>
    		</div>
    	</div>
    </div>

    <div id="myModal1" class="modal fade">
    	<div class="modal-dialog modal-login">
    		<div class="modal-content">
    			<div class="modal-header">
    				<div class="avatar">
    					<center>
                <i style="font-size:50px;padding:2%;" class="fa fa-user-o" aria-hidden="true"></i>
    				</center></div>
    				<h4 class="modal-title">ShopKeeper Login</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    			</div>
    			<div class="modal-body">
    				<form action="check.php" method="POST">
    					<div class="form-group">
      						<input type="email" class="form-control" name="email" placeholder="Email ID" required="required">
    					</div>
    					<div class="form-group">
    						<input type="text" class="form-control" name="password" placeholder="Mobile Number" required="required">
    					</div>
    					<div class="form-group">
    						<button type="submit" class="btn btn-primary btn-lg btn-block login-btn">Login</button>
    					</div>
    				</form>
    			</div>
    			<div class="modal-footer">
    				Welcome to our Community !!!
    			</div>
    		</div>
    	</div>
    </div>

    <?php

    if(isset($_GET["smsg"])){
      $id=$_GET["smsg"];
      echo "<h1><script>alert('Your Shop ID is $id')</script></h1>";
    }
    if(isset($_GET['login'])){
      if($_GET['login'] == "success"){
echo ("<script>location.href='home.php'</script>");
      }
      if($_GET['login'] == "failed"){
        echo "<h1><script>alert('Check Login Details')</script></h1>";
      }

    }
     ?>

  </body>
</html>
