<?php $pnames=array();?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ADD Products</title>
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
    width:120px;
    border:1px solid lightgray;
    border-radius:5px;
  }
   #cat{
    height:39px;
    width:200px;
    border:1px solid lightgray;
    border-radius:5px;
  }
  button:hover{
      -ms-transform: scale(1.5); /* IE 9 */
		  -webkit-transform: scale(1.5); /* Safari 3-8 */
		  transform: scale(1.5);
  }
</style>

</head>
<body style="background-color:#f5ece3">
  <div class="section"> <br /><br /><br /><br /></div>

    <div class="container">

<div class="card mx-4">
  <div class="card-body">
    <h3 class="text-center py-4" style="color:#45aba6">PRODUCT DETAILS</h3>
        <form method="POST" action="adddb.php">


                  <div class="card mb-3 pt-3" id="newitem">
                    <div class="card-body">


                  <div class="row " >
                    <div class="col-md-2">
                      <div id="inputFormRow">
                          <div class="input-group ">
                              <input type="text"  name="name[]" class="form-control m-input pname" placeholder="Name" autocomplete="off">

                          </div><br />
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div id="inputFormRow">
                          <div class="input-group ">
                              <input type="number"  name="price[]" min=0 class="form-control m-input price" placeholder="Price" autocomplete="off">
                          </div><br />
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div id="inputFormRow">

                        <select name="per[]">
                          <option selected>/kg</option><br />
                          <option>/litre</option><br />
                          <option>/item</option><br />
                        </select>

                    </div><br />
                  </div>
                    <div class="col-md-2">
                      <div id="inputFormRow">
                          <div class="input-group ">
                              <input type="number"  name="quantity[]" min=0 class="form-control m-input qty" placeholder="Quantity" autocomplete="off">
                          </div><br />
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div id="inputFormRow">

                        <select name="category[]" id="cat">
                          <option selected>Fruits</option><br />
                          <option>Vegetables</option><br />
                          <option>Snacks</option><br />
                          <option>Others</option><br />
                        </select>

                    </div><br />
                  </div>
                    <div class="col-md-1">
                      <div class="input-group-append">
                          <button id="removeRow" type="button" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

                    <div id="newRow"></div>
                    <center class="py-3">
                      <div class="row">
                        <div class="col-md-4 col-sm-4 mb-2">
                          <button id="addRow" type="button" class="btn  mx-3" style="background-color:#45aba6;color:white;"><i class="fa fa-plus" aria-hidden="true"></i> Add Product</button>
                        </div>
                        <div class="col-md-4 col-sm-4 mb-2">
                          <button id="submit" type="submit" class="btn  mx-3" value="" style="background-color:#45aba6;color:white;"><i class="fa fa-upload" aria-hidden="true"></i> Submit Products</button>
                        </div>
                        <div class="col-md-4 col-sm-4">
                          <a href="home.php"><button id="goback" type="button" class="btn mx-3" style="background-color:#45aba6;color:white;"><i class="fa fa-backward" aria-hidden="true"></i> Go Back</button></a>

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
    html+= '        <div class="card mb-3 pt-3" id="newitem">'
    html+= '          <div class="card-body">'
    html +=        '<div class="row" >'
    html +=        '  <div class="col-md-2">'
    html +=        '    <div id="inputFormRow">'
    html +=        '        <div class="input-group ">'
    html +=        '            <input type="text"  id="pname" name="name[]" class="form-control m-input pname" placeholder="Name" autocomplete="off">  '
    html +=        '        </div>'
    html+=         '<br />'
    html +=        '    </div>'
    html +=        '  </div>'
    html +=        '  <div class="col-md-2">'
    html +=        '    <div id="inputFormRow">'
    html +=        '        <div class="input-group ">'
    html +=        '            <input type="number"  name="price[]" min=0 class="form-control m-input price" placeholder="Price " autocomplete="off">'
    html +=        '        </div>'
    html+=         '<br />'
    html +=        '    </div>'
    html +=        '  </div>'
    html+= '<div class="col-md-2">'
    html+= '  <div id="inputFormRow">'
    html+= '    <select name="per[]">'
    html+= '      <option selected>/kg</option><br />'
    html+= '      <option>/litre</option><br />'
    html+= '      <option>/item</option><br />'
    html+= '    </select>'
    html+= '</div><br />'
    html+= '</div>'
    html +=        '  <div class="col-md-2">'
    html +=        '    <div id="inputFormRow">'
    html +=        '        <div class="input-group ">'
    html +=        '            <input type="number"  name="quantity[]" min=0 class="form-control m-input qty" placeholder="Quantity" autocomplete="off">'
    html +=        '        </div>'
    html+=         '<br />'
    html +=        '    </div>'
    html +=        '  </div>'
    html +=        '  <div class="col-md-3">'
    html +=        '    <div id="inputFormRow">'
    html +=        '       <select name="category[]" id="cat">'
    html +=        '         <option selected>Fruits</option><br />'
    html +=        '         <option>Vegetables</option><br />'
    html +=        '         <option>Snacks</option><br />'
    html +=        '         <option>Others</option><br />'
    html +=        '       </select>'
    html +=        '    </div>'
    html+=         '<br />'
    html +=        '  </div>'
    html +=        '  <div class="col-md-1">'
    html +=        '    <div class="input-group-append">'
    html +=        '        <button id="removeRow" type="button" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></button>'
    html +=        '    </div>'
    html +=        '  </div>'
    html +=        '</div>'
    html+='</div>'
    html+='</div>'

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
