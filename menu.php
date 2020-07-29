<!DOCTYPE html>
<!--
    Resto by GetTemplates.co
    URL: https://gettemplates.co
-->
<?php

session_start();
error_reporting(0);
$shop =(string)$_GET['shop_get'];
$_SESSION['shop_ses'] = $shop;
require_once('connection.php');
$sql = "SELECT * FROM $shop";
$result = mysqli_query($conn,$sql);
$rate_array = array();
$product_array = array();
$avail_array = array();
$measure_array = array();
if(mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_assoc($result))
    {
        
        array_push($rate_array, $row['price']);
        array_push($product_array,$row['pname']);
        array_push($avail_array, $row['quantity']);
        array_push($measure_array, $row['per']);
       } 
    }
   $len = sizeof($rate_array);


?>


<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
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
<script type="text/javascript">


</script>

<body data-spy="scroll" data-target="#navbar">
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
                            <li class="nav-item active"> <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a> </li>
                            <li class="nav-item"> </li>
                            <li class="nav-item dropdown">
                            </li>
                        </div>
                    </ul>
                    <ul class="navbar-nav d-flex justify-content-between">
                        <div class="d-flex flex-lg-row flex-column">
                            <li class="nav-item dropdown"> <h3><?php echo $_SESSION['Name3']; ?></h3> </li>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Menu Section -->
      

        <section id="gtco-menu" class="section-padding">
            <div class="container">
                <form  method="POST">
                <div class="section-content">
                    <div class="row mb-5">
                        <div class="col-md-12">
                            <div class="heading-section text-center"> <span class="subheading">
                            Specialties
                        </span>
                                <h2>
                            Our Menu
                        </h2> </div>
                        </div>
                    </div>
                  
                    
                        <div class="row">
                            <div class="col-lg-12 menu-wrap">
                                <div class="heading-menu">
                                    <h3 class="text-center mb-5"></h3> </div>
                                
                                     <?php for ($i = 0; $i <= $len-1; $i++) { ?>
                                        <div class="menus d-flex align-items-center">
                                            
                                            <div class="text-wrap">
                                        <div class="row align-items-start">
                                            <div class="col-4">
                                                <h4><?php echo $product_array[$i] ?></h4> </div>
                                            <div class="col-6">
                                                <h4 class="text-muted menu-price"><?php echo  "₹".$rate_array[$i].$measure_array[$i]; ?></h4> </div>
                                            <div class="col-2">
                                                <div class="quantity buttons_added">
                                                    <input type="button" value="-" class="minus">
                                                    <input type="number" step="1" min="0" max="<?php echo "$avail_array[$i]" ?>" name="quantity[]" value="0" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="" id = "<?php echo "quantity".$i; ?>">
                                                    <input type="button" value="+" class="plus"> </div>
                                            </div>
                                        </div>
                                        <p><?php $avameas = str_replace('/', '', $measure_array[$i]);
 echo "$avail_array[$i] $avameas" ?> Available</p>
                                    </div>
                                   </div>

      
    <?php  } ?>
                              
                            </div>
                        </div>
                            <input type="hidden" name="op" value="sent" />
                            <?php
if (!empty($_POST["op"])) {

    for ($i = 0; $i <= $len-1; $i++) {
        if (strlen($_POST["quantity"][$i]) !== 0) {
            
              $quantity_array[$i] =$_POST["quantity"][$i]; 
                
            } 
    }
    $_SESSION['check'] = 1;
} 
print_r($quantity_array);

?>

                    <div class="col mb-2 fixed-bottom " id="check-out-box" style="display: none;background-color: white">
                       <div class="row">
                            <div class="col-sm-12 col-md-12 ">
                                <p style="font-weight: bold;font-size: 20px;" class="text-center">Grand Total &nbsp;&nbsp;&nbsp;
                                    <input type="text" name="toplam_glider" class="text-center" value="0" style="border: none;font-weight: bold;">
                                </p>
                            </div>
                        </div>
                        <?php
$Text = json_encode($rate_array);
$RequestText = urlencode($Text); ?> 
                        <div class="row">
                            <div class="col-sm-12 col-md-12 ">
                                <button type="submit" class="btn btn-primary btn-block text-white" value="submit">
Check Out</a></button>
                            </div>
                        </div>
                    </div>
                    </form>
        </section>
        <!-- End of menu Section -->
        </div>
        </div>
        <?php 
        if($_SESSION['check']){
            $_SESSION['quant_arr'] = $quantity_array;
            $_SESSION['rate_arr'] = $rate_array;
            $_SESSION['product_arr'] = $product_array;
            $_SESSION['avail_arr'] = $avail_array;
           
          echo"  <script>location.href = 'checkout.php';</script>";


        }
       ?>

        <!-- Main JS -->
        <br><br><br>

        <script src="js/app.min.js "></script>
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
        <script>



                       /* ---- Quantity auto increment jquery ----*/
        function wcqib_refresh_quantity_increments() {
            jQuery("div.quantity:not(.buttons_added), td.quantity:not(.buttons_added)").each(function(a, b) {
                var c = jQuery(b);
                c.addClass("buttons_added"), c.children().first().before('<input type="button" value="-" class="minus" />'), c.children().last().after('<input type="button" value="+" class="plus" />')
            })
        }
        String.prototype.getDecimals || (String.prototype.getDecimals = function() {
            var a = this,
                b = ("" + a).match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?$/);
            return b ? Math.max(0, (b[1] ? b[1].length : 0) - (b[2] ? +b[2] : 0)) : 0
        }), jQuery(document).ready(function() {
            wcqib_refresh_quantity_increments()
        }), jQuery(document).on("updated_wc_div", function() {
            wcqib_refresh_quantity_increments()
        }), jQuery(document).on("click", ".plus, .minus", function() {
            var a = jQuery(this).closest(".quantity").find(".qty"),
                b = parseFloat(a.val()),
                c = parseFloat(a.attr("max")),
                d = parseFloat(a.attr("min")),
                e = a.attr("step");
            b && "" !== b && "NaN" !== b || (b = 0), "" !== c && "NaN" !== c || (c = ""), "" !== d && "NaN" !== d || (d = 0), "any" !== e && "" !== e && void 0 !== e && "NaN" !== parseFloat(e) || (e = 1), jQuery(this).is(".plus") ? c && b >= c ? a.val(c) : a.val((b + parseFloat(e)).toFixed(e.getDecimals())) : d && b <= d ? a.val(d) : b > 0 && a.val((b - parseFloat(e)).toFixed(e.getDecimals())), a.trigger("change")
        });
        $(document).ready(function(e) {
            $("input").change(function() {
                var toplam = [];
                var sum =0;

                
                $("#check-out-box").css("display", "block");
                for(var x =0;x< <?php echo $len;?>;x++){
                var str1="input[id=quantity";
                var str2="]";
                var rate_arr = <?php echo json_encode($rate_array); ?>; 

                for(var x =0;x< <?php echo $len;?>;x++ ){
                $(str1+x+str2).each(function() {
                    toplam[x] = parseInt($(this).val());
                    sum +=(toplam[x]*rate_arr[x]);
                    console.log(sum);
                    $("input[name=toplam_glider]").val(sum);
                })}}
                

                 });
            // body...
        });

        </script>
</body>

</html>


<script type="text/javascript">
  /*  var js_array =<?php  //echo json_encode($quantity_array);?>;
console.log(js_array); */
</script>