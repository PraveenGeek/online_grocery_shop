<?php
require_once('connection.php');

 
//Start your session.
session_start();
$phone = $_SESSION['Phone3'];
$shop = (string)$_SESSION['shop_ses'];
echo "$shop";
 $quant_arr_co = [];
 $rate_arr_co = [];
 $product_arr_co=[];
 $avail_arr_co =[];
 $i=0;
 $j=0;
 $k=0;
 $l=0;
 $total =0;
if(isset($_SESSION['quant_arr'])){
    foreach($_SESSION['quant_arr'] as $quants){
        $quant_arr_co[$i] = $quants;
        $i++;
    }
}
if(isset($_SESSION['rate_arr'])){
    foreach($_SESSION['rate_arr'] as $rates){
        $rate_arr_co[$j] = $rates;
        $j++;
    }}
 if(isset($_SESSION['product_arr'])){
    foreach($_SESSION['product_arr'] as $prods){
        $product_arr_co[$k] = $prods;
        $k++;
    }} 
 if(isset($_SESSION['avail_arr'])){
    foreach($_SESSION['avail_arr'] as $avails){
        $avail_arr_co[$l] = $avails;
        $l++;
    }
}   


for ($z=0; $z <=sizeof($quant_arr_co)-1; $z++) { 
    if($quant_arr_co[$z]!=0){
        $total +=$quant_arr_co[$z]*$rate_arr_co[$z];
    }
}

unset($_SESSION['check']);
unset($_SESSION['quant_arr']);
unset($_SESSION['rate_arr']);
unset($_SESSION['product_arr']);

$sql="UPDATE items SET Total = '$total' WHERE Phone ='$phone';";
$res=mysqli_query($conn,$sql);



for($a1 =0 ;$a1 <sizeof($quant_arr_co);$a1++){
$tempquant = $avail_arr_co[$a1]- $quant_arr_co[$a1];
$tempprod = $product_arr_co[$a1];

$sql1="UPDATE $shop SET quantity = '$tempquant' WHERE pname ='$tempprod';";
$res1=mysqli_query($conn,$sql1);


}
?>
<!DOCTYPE html>
<html>
<head>
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
<body>

<body class="text-center con" style="overflow-x: hidden;">
    <div class="row">
        <div class="col">                <img src="img/logo.png" alt="" width="60%;"></div>
    </div>
    <div style="margin-top: 10%;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">  <h1>Chose A Pick up Time</h1> <br><input type="datetime-local" class="btn btn-primary">

</div>
                <div class="col-md-6">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                </tr>
                            </thead>
                            <tbody>
                                  <?php 
            for($a = 0 ;$a<= sizeof($quant_arr_co)-1;$a++){
                if($quant_arr_co[$a]!=0){
                    ?>
                    <tr>
                        <td><?php echo "$product_arr_co[$a]"; ?></td>
                        <td><?php echo "$quant_arr_co[$a]"; ?></td>
                    </tr>
                    <?php }
    }

            ?>

                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section style="margin-top: 4%;">
        <div class="col-md-12">
            <h3>Grand Total:&nbsp;&nbsp;<?php echo "$total"; ?></h3>
            <a href="index.html">
            <button class="btn btn-primary" >Place Order</button></a>
        </div>
    </section>
</body>
</html>