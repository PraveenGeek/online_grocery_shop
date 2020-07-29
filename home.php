<?php 
session_start();
$tbl=strtolower((string)$_SESSION['shopid']);
include("connection.php");
$link=Connection();
?>
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
    

    <style media="screen">
      .card{
        height:250px;
      }
        select{
          height:39px;
          width:450px;
          border:1px solid lightgray;
          border-radius:5px;
        }
    </style>

  </head>
  <body style="background-color:#45aba6">
  <div id="body"></div>
    <section style="background-color:white" class="m-3">
    <div class="container py-5">
      <center>
    <!--  <div class="row ">
        <center><img src="img/logo.png"  class="logo" alt="" width="300" height="150"></center>
      </div>
    -->
    <h2 style="color:#45aba6;" class="pb-2">Welcome Back !!!</h2>
      <div class="row">
        
        <div class="col-md-4 ">
          <div class="card">
            <div class="card-body">
              <i style="font-size:100px;color:#45aba6;" class="fa fa-cart-plus py-2" aria-hidden="true"></i><br /><br />
              <a href="addproducts.php" style="color:#45aba6;font-size:30px;" class="trigger-btn py-2 " >ADD PRODUCTS</a>
            </div>
          </div>
          <br />
        </div>

        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <i style="font-size:100px;color:#45aba6;" class="fa fa-angle-double-up py-2" aria-hidden="true"></i> <br /><br />
              <a href="#myModal2" style="color:#45aba6;font-size:30px;" class="trigger-btn py-2" data-toggle="modal">UPDATE PRODUCT <br />DETAILS</a>
            </div>
          </div>

        </div>
        <div class="col-md-4">
        <div class="card">
            <div class="card-body">
              <a href="img.php">
              <i style="font-size:100px;color:#45aba6;" class="fa fa-upload py-2" aria-hidden="true"></i> <br /><br />
     <a href="#myModal4"  style="color:#45aba6;font-size:30px;" class="trigger-btn py-2" data-toggle="modal" style="color:#45aba6;">  UPLOAD SHOP IMAGE </a></a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2"></div>

        <div class="col-md-4 ">
          <div class="card">
            <div class="card-body">
              <i style="font-size:100px;color:#45aba6;" class="fa fa-list-ul py-2" aria-hidden="true"></i><br /><br />
              <a href="#myModal1" style="color:#45aba6;font-size:30px;" class="trigger-btn py-2" data-toggle="modal" >MY PRODUCTS</a>
            </div>
          </div>
          <br />
        </div>

        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <i style="font-size:100px;color:#45aba6;" class="fa fa-address-book py-2" aria-hidden="true"></i> <br /><br />
              <a href="#myModal3" style="color:#45aba6;font-size:30px;" class="trigger-btn py-2" data-toggle="modal" >SHOP DETAILS</a>
            </div>
          </div>

        </div>
        <div class="col-md-2"></div>
      </div>
      


      </center>

    </div>
</section>

    <div id="myModal1" class="modal fade">
    	<div class="modal-dialog modal-login">
    		<div class="modal-content">
    			<div class="modal-header">
    				<div class="avatar">
    					<center>
              <h4 class="modal-title"><h1  style="color:#45aba6;font-size:30px;margin:4% 0px;" ><u>PRODUCTS LIST</u></h1></h4>
    				</center></div>

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    			</div>
    			<div class="modal-body">
            <div class="container"> <center>
              <div class="row">
                <?php
                $output="";
                $output.= '  <div class="row mt-5">';
                $output.= '    <div class="col-md-12">';
                $output.= '      <table class="table table-striped" width="1200" border="1" style="text-align:center;">';
                $output.= '        <tr p-2>';
                $output.= '        <b><th scope="col">SNO</th>';
                $output.= '        <th scope="col">NAME</th>';
                $output.= '        <th scope="col">PRICE</th>';
                $output.= '        <th scope="col">QUANTITY</th>';
                $output.= '        <th scope="col">CATEGORY</th></b>';
                $output.= '      </tr>';

                
                $result=mysqli_query($link,"select * from $tbl");

                if($result!=false){

                while($row=mysqli_fetch_array($result)){
                $pri= (string)$row["price"].$row["per"] ;
                $output.= "<tr> <td>".$row["pno"]."</td>   <td>".$row["pname"]."</td>   <td>".$pri."</td>   <td>".$row["quantity"]."</td>   <td>".$row["category"]."</td>   </tr>";
                
                }
               

                }
                $output.= '  </table>';
                $output.= '  </div>';
                $output.= '  </div>';

              echo $output;
        ?>
        </div>
        </center>
            </div>
    			</div>
    			<div class="modal-footer">
            <form class="" action="" method="POST">

              <button id="submit" type="submit" name="submit" style="background-color:#45aba6;color:white;" class="btn btn-primary mx-3" value=""><i class="fa fa-download" aria-hidden="true"></i> Download List</button>
            </form>
    			</div>
    		</div>
    	</div>
    </div>
<?php
if(isset($_POST["submit"])){
  header("Content-Type: application/xls");
  header("Content-Disposition:attachment; filename=products.xls");

  echo $output;
}


 ?>
    <div id="myModal2" class="modal fade">
    	<div class="modal-dialog modal-login">
    		<div class="modal-content">
    			<div class="modal-header">
    				<div class="avatar">
    					<center>
              <h4 class="modal-title"><h3 class="text-center" style="color:#45aba6;"><u>UPDATE PRICE AND QUANTITY</u> </h3></h4>
    				</center></div>

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    			</div>
    			<div class="modal-body">
            <form method="POST" action="updatedb.php">
              <center>
                      <div class="row px-4 " >

                          <div id="inputFormRow">
                            <div class="input-group ">
                            <?php

                            $result=mysqli_query($link,"select * from $tbl");


                          echo ' <select name="uitem[]">';
                          if($result!=false){

                          while($row=mysqli_fetch_array($result)){
                              echo '<option>'.$row["pname"].'</option><br />';

                            }
                          }
                          echo '  </select>';
                            ?>
                          </div><br />
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div id="inputFormRow">
                              <div class="input-group ">
                                  <input type="number"  name="nprice[]" min=0 class="form-control m-input pname" placeholder="Updated Price" autocomplete="off">

                              </div><br />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div id="inputFormRow">
                              <div class="input-group ">
                                  <input type="number"  name="nqty[]" min=0 class="form-control m-input price" placeholder="Updated Quantity" autocomplete="off">
                              </div><br />
                          </div>
                        </div>
                      </div>

                      </center>
            
    			</div>
    			<div class="modal-footer">

              <button id="submit" type="submit" class="btn btn-primary mx-3" style="background-color:#45aba6;color:white;" value=""><i class="fa fa-upload" aria-hidden="true"></i> Update Products</button>
            </form>
    			</div>
    		</div>
    	</div>
    </div>

<div id="myModal3" class="modal fade ">
      <div class="modal-dialog modal-login">
        <div class="modal-content">
          <div class="modal-header">
            <div class="avatar">
              <center>
              <h4 class="modal-title text-center"><h1  style="color:#45aba6;font-size:30px;margin:4% 0px;" >MY PROFILE</h1></h4>
            </center></div>

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">
            <div class="container"> <center>
              <div class="row">
                <?php
                echo '  <div class="row ">';
                echo '    <div class="col-md-12">';
                echo '      <table class="table table-striped" width="2500" border="1" style="text-align:center;">';
                echo '        <tr><th colspan=2>SHOP DETAILS</th></tr>';

                //$str="";
                
                $result=mysqli_query($link,"select * from shop_details where shopid='$tbl'");

                if($result!=false){

                while($row=mysqli_fetch_array($result)){
                echo "<tr> <th>Shop ID</th><td>".$row["shopid"]."</td></tr>";
                echo "<tr> <th>Shop Name</th><td>".$row["sname"]."</td></tr>";
                echo "<tr> <th>Shop Mobile Number</th><td>".$row["smno"]."</td></tr>";
                echo "<tr> <th>Shop Email ID</th><td>".$row["semail"]."</td></tr>";
                echo "<tr> <th>Shop Address</th><td>".$row["saddr"]."</td></tr>";
                echo "<tr> <th>Shop Location</th><td>".$row["location"]."</td></tr>";
                }
                //echo $str;

                }
                echo '  </table>';
                echo '  </div>';
                echo '  </div>';

              
        ?>
        </div>
        </center>
            </div>
          </div>
        </div>
      </div>
    </div>


<div id="myModal4" class="modal fade ">
      <div class="modal-dialog modal-login">
        <div class="modal-content">
          <div class="modal-header">
            <div class="avatar">
              <center>
              <h4 class="modal-title text-center"><h1  style="color:#45aba6;font-size:30px;margin:4% 0px;" >UPLOAD SHOP IMAGE</h1></h4>
            </center></div>

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">
            <div class="container"> <center>
              
                <form name="frmImage" enctype="multipart/form-data" action="img.php" method="post" class="frmImageUpload">
                <div class="row py-2">
                <h5>Upload your Shop Image File: (Sample Formats:- .png/.jpg/.jpeg)</h5><br/>
                </div>
                <div class="row py-2">
                <div class="col-md-12">
                <div class="form-group">
                    <input name="userImage" type="file" class="inputFile" />
                </div>
                </div>
                </div>
        
        </center>
            </div>
          </div>
          <div class="modal-footer">

              <input type="submit" class="btn" style="background-color:#45aba6;color:white;" value="Submit Image" class="btnSubmit" />
            </form>
    			</div>
        </div>
      </div>
    </div>



  </body>
</html>


