<?php include("../../path.php"); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.1/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

</head>
    <title>dashboard</title>
  </head>
  <body>
  <?php include(ROOT_PATH . "/app/includes/adminheader.php"); ?>
      <!-- offcanvar-->
      <main class="mt-2 mx-6">

      <form action="post">
        <div class="col-lg-7 offset-md-2">
            <span class="anchor" id="formUserEdit"></span>
            <hr class="my-5">

            <!-- form user info -->
            <div class="card card-outline-secondary text-right ml-5">
                <div class="card-header">
                    <h3 class="mb-0">Pass between dates</h3>
                </div>
                <div class="card-body">
                    <form class="form" role="form" autocomplete="off">
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Validity from</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="date" name="begin" 
                                placeholder="dd-mm-yyyy" value=""
                                min="1997-01-01" max="2030-12-31">
                               
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Validity to</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="date" name="begin" 
                                placeholder="dd-mm-yyyy" value=""
                                min="1997-01-01" max="2030-12-31">
                               
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-9">
                                <input type="reset" class="btn btn-secondary" value="Cancel">
                                <input type="button" class="btn btn-primary" value="Save Changes">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /form user info -->

        </div>
      </form>
    </main>

      <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../../assets/js/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/momentjs/2.14.1/moment.min.js"></script>
    <script src="../../assets/js/popper.min.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
    <script src="../../assets/js/main.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">
    <script src="https://cdn.datatables.net/1.11.1/js/dataTables.bootstrap4.min.js"> </script>
    
    
  </body>
</html>