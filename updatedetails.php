<?php $pnames=array();?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Update Products</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script>

<style media="screen">
  select{
    height:39px;
    width:200px;
    border:1px solid lightgray;
    border-radius:5px;
  }
</style>

</head>
<body>
  <div class="section"> <br /><br /><br /><br /></div>

    <div class="container">

<div class="card mx-4">
  <div class="card-body">
    <h3 class="text-center py-4" style="color:#45aba6;">UPDATE PRICE AND QUANTITY </h3>
        <form method="POST" action="updatedb.php">


                  <div class="card mb-3 pt-3" id="newitem">
                    <div class="card-body"><center>
                  <div class="row " >
                    <div class="col-md-4">

                      <div id="inputFormRow">
                        <?php
                        include("connection.php");
                        $link=Connection();
                        session_start();
                        $tbl=strtolower((string)$_SESSION['shopid']);

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
                    <div class="col-md-4">
                      <div id="inputFormRow">
                          <div class="input-group ">
                              <input type="number"  name="nprice[]" min=0 class="form-control m-input pname" placeholder="Updated Price" autocomplete="off">

                          </div><br />
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div id="inputFormRow">
                          <div class="input-group ">
                              <input type="number"  name="nqty[]" min=0 class="form-control m-input price" placeholder="Updated Quantity" autocomplete="off">
                          </div><br />
                      </div>
                    </div>



                    <div class="col-md-1">
                      <div class="input-group-append">
                          <button id="removeRow" type="button" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></button>
                      </div>
                    </div>
                  </div> </center>
                </div>
              </div>

                    <div id="newRow"></div>
                    <center class="py-3">
                      <div class="row">
                        <div class="col-md-4 col-sm-4 mb-2">
                          <button id="addRow" type="button" class="btn btn-success mx-3"><i class="fa fa-plus" aria-hidden="true"></i> Update Another Product</button>
                        </div>
                        <div class="col-md-4 col-sm-4 mb-2">
                          <button id="submit" type="submit" class="btn btn-primary mx-3" value=""><i class="fa fa-upload" aria-hidden="true"></i> Update Products</button>
                        </div>
                        <div class="col-md-4 col-sm-4">
                          <a href="home.php"><button id="goback" type="button" class="btn btn-secondary mx-3"><i class="fa fa-backward" aria-hidden="true"></i> Go Back</button></a>

                        </div>
                      </div>
                    </center>

        </form>
        </div>
      </div>
    </div>

    <script type="text/javascript">

        $("#addRow").click(function () {



            var html = '';

                    html+= '          <div class="card mb-3 pt-3" id="newitem">'
                    html+= '            <div class="card-body"><center>'
                    html+= '          <div class="row " >'
                    html+= '            <div class="col-md-4">            '
                    html+= '              <div id="inputFormRow">            '

                  html+= '  $result=mysqli_query($link,"select * from $tbl");'
                  html+= 'echo " <select name="uitem[]">";'
                  html+= 'if($result!=false){'
                  html+= 'while($row=mysqli_fetch_array($result)){'
                  html+= '    echo "<option>".<? $row["pname"]?>."</option><br />";'
                  html+= '  }'
                  html+= '}'
                  html+= 'echo "  </select>";'

                    html+= '            </div><br />'
                    html+= '          </div>'
                    html+= '            <div class="col-md-4">'
                    html+= '              <div id="inputFormRow">'
                    html+= '                  <div class="input-group ">'
                    html+= '                      <input type="text"  name="nprice[]" class="form-control m-input pname" placeholder="Updated Price" autocomplete="off">            '
                    html+= '                  </div><br />'
                    html+= '              </div>'
                    html+= '            </div>'
                    html+= '            <div class="col-md-3">'
                    html+= '              <div id="inputFormRow">'
                    html+= '                  <div class="input-group ">'
                    html+= '                      <input type="number"  name="nqty[]" min=0 class="form-control m-input price" placeholder="Updated Quantity" autocomplete="off">'
                    html+= '                  </div><br />'
                    html+= '              </div>'
                    html+= '            </div>'
                    html+= '            <div class="col-md-1">'
                    html+= '              <div class="input-group-append">'
                    html+= '                  <button id="removeRow" type="button" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></button>'
                    html+= '              </div>'
                    html+= '            </div>'
                    html+= '          </div> </center>'
                    html+= '        </div>'
                    html+= '      </div>            '
                    html+= '      </center>            '

            $('#newRow').append(html);
        });

        // remove row
        $(document).on('click', '#removeRow', function () {

            $(this).closest('#newitem').remove();
        });


    </script>
    <div class="section"> <br /><br /><br /><br /></div>

</body>
</html>
