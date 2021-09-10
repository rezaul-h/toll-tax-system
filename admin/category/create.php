<?php include("../../path.php"); ?>
<?php include(ROOT_PATH ."/app/controller/category.php");?>
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
    <title>dashboard</title>
  </head>
  <body>
      <!-- NAVBAR -->

        <?php include(ROOT_PATH . "/app/includes/adminheader.php"); ?>

      <!-- side bar and nav bar-->


      <!-- offcanvar-->

      <main class="mt-2 mx-6">
     

        <form action="create.php" method='post'>
          <div class="col-lg-7 offset-md-2">
              <span class="anchor" id="formUserEdit"></span>
              <hr class="my-5">
  
              <!-- form user info -->
              <div class="card card-outline-secondary text-right ml-5">
                  <div class="card-header">
                      <h3 class="mb-2 py-2 fw-bold text-center">Vehicle Category</h3>
                  </div>
                  <?php if(count($errors)>0): ?>
   <div class="form-row">
    <div class="col-lg-7">
  <?php foreach($errors as $error):  ?>

   <li class="msg error" style="border: 1px solid; margin: 10px 0px;padding: 15px 10px 15px 50px;background-repeat: no-repeat; background-position: 10px center;color: #D8000C;background-color: #FFBABA;background-image: url('https://i.imgur.com/GnyDvKN.png'); display: inline-block; width: 100%;">
      <?php echo $error; ?>
    </li>
   <?php endforeach; ?>
      </div>
    </div>
 <?php endif; ?>

                  

                  <div class="card-body">
                      <form class="form" role="form" autocomplete="off">
                          <div class="form-group row">
                              <label class="col-lg-3 col-form-label form-control-label">Vehicle name</label>
                              <div class="col-lg-9">
                                  <input type="text" name='name' value="<?php echo $name; ?>" class="form-control" >
                              </div>
                          </div>

                         
                          <div class="form-group row">
                              <label class="col-lg-3 col-form-label form-control-label"></label>
                              <div class="col-lg-9">
                                  <!-- <input type="reset" class="btn btn-secondary" value="Cancel"> -->
                                  <input type="submit" name='add-topic' class="btn btn-primary" value="Save Changes">
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
              <!-- /form user info -->
  
          </div>
        </form>
      </main>
           
      <main class="mt-2 mx-7 ">
            
            <div class="card-header">
                <h3 class="mb-0">Category Details</h3>
            </div>
      
      <table class="table table-striped">
        <thead>
       

          <tr style=>
            <th scope="col">S.No</th>
            <th scope="col">Vehicle Name</th>
            <th scope="col">Date of Creation</th>
          </tr>
        </thead>
        <tbody>

        <?php foreach ($topics as $key => $topic): ?>
    
          <tr>
            <th scope="row"><?php echo $key +1; ?></th>

            <td><?php echo $topic['name']; ?></td>
            <td><?php echo $topic['created_at']; ?></td>
          </tr>

          <?php endforeach; ?>

        </tbody>
      </table>
    </main>
      <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/js/popper.min.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>
    <script src="../../assets/js/main.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.1/js/dataTables.bootstrap4.min.js"> </script>
    
  </body>
</html>