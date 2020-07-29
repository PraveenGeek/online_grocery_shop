<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>My Products</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container"> <center>
      <div class="row">
        <?php
        session_start();
        $output="";
        $output.= '  <div class="row mt-5">';
        $output.= '    <div class="col-md-12">';
        $output.= '      <h1  style="color:#45aba6;font-size:30px;margin:4% 0px;" ><u>PRODUCTS LIST</u></h1>';
        $output.= '      <table class="table table-striped" width="1200" border="1" style="text-align:center;">';
        $output.= '        <tr p-2>';
        $output.= '        <b><th scope="col">SNO</th>';
        $output.= '        <th scope="col">NAME</th>';
        $output.= '        <th scope="col">PRICE</th>';
        $output.= '        <th scope="col">QUANTITY</th>';
        $output.= '        <th scope="col">CATEGORY</th></b>';
        $output.= '      </tr>';
        include("connection.php");
        $link=Connection();

        //$str="";
        $tbl=strtolower((string)$_SESSION['shopid']);
        $result=mysqli_query($link,"select * from $tbl");

        if($result!=false){

        while($row=mysqli_fetch_array($result)){
        $pri= (string)$row["price"].$row["per"] ;
        $output.= "<tr> <td>".$row["pno"]."</td>   <td>".$row["pname"]."</td>   <td>".$pri."</td>   <td>".$row["quantity"]."</td>   <td>".$row["category"]."</td>   </tr>";
        //echo $row["Name"]."&nbsp&nbsp".$row["Country"]."<br/>";
        //$str.=$row["Name"]."&nbsp&nbsp".$row["Country"]."<br/>";
        }
        //echo $str;

        }
        $output.= '  </table>';
        $output.= '  </div>';
        $output.= '  </div>';

      echo $output;
?>
</div>


    <form class="" action="" method="post">
<div class="row mt-5">
    <div class="col-md-12 col-sm-4 mb-2">
      <button id="submit" type="submit" name="submit" class="btn btn-primary mx-3" value=""><i class="fa fa-download" aria-hidden="true"></i> Download List</button>
    </div>
    <div class="col-md-6 col-sm-4">
      <a href="home.php"><button id="goback" type="button" class="btn btn-secondary mx-3"><i class="fa fa-hand-o-left" aria-hidden="true"></i> Go Back</button></a>
    </div>
  </div>
  </form>
</center>
    </div>
  </body>
</html>
<?php
//$output="";

if(isset($_POST['submit'])){

/*
  $output.= '  <div class="row mt-5">';
  $output.= '    <div class="col-md-12">';
  $output.= '      <h1  style="color:#45aba6;font-size:30px;margin:4% 0px;" ><u>PRODUCTS LIST</u></h1>';
  $output.= '      <table width="1200" border="1" style="text-align:center;">';
  $output.= '        <tr p-2>';
  $output.= '        <b><td>SNO</td>';
  $output.= '        <td>NAME</td>';
  $output.= '        <td>PRICE</td>';
  $output.= '        <td>QUANTITY</td>';
  $output.= '        <td>CATEGORY</td></b>';
  $output.= '      </tr>';

  //$str="";
  $tbl=strtolower((string)$_SESSION['shopid']);
  $result=mysqli_query($link,"select * from $tbl");

  if($result!=false){

  while($row=mysqli_fetch_array($result)){
  $pri= (string)$row["price"].$row["per"] ;
  $output.= "<tr> <td>".$row["pno"]."</td>   <td>".$row["pname"]."</td>   <td>".$pri."</td>   <td>".$row["quantity"]."</td>   <td>".$row["category"]."</td>   </tr>";
  //echo $row["Name"]."&nbsp&nbsp".$row["Country"]."<br/>";
  //$str.=$row["Name"]."&nbsp&nbsp".$row["Country"]."<br/>";
  }
  //echo $str;

  mysqli_free_result($result);
  mysqli_close($link);
  }
  $output.= '  </table>';
  $output.= '  </div>';
  $output.= '  </div>';
*/
  header("Content-Type: application/xls");
  header("Content-Disposition:attachment; filename=products.xls");

  echo $output;
}

 ?>
