<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controller/users.php"); ?>
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
      <!-- offcanvar-->
      <main class="mt-2 mx-6">

        <form action='ceate.php' method="post">
          <div class="col-lg-7 offset-md-2">
              <span class="anchor" id="formUserEdit"></span>
              <hr class="my-5">
  
              <!-- form user info -->
              <div class="card card-outline-secondary text-right ml-5">
                  <div class="card-header">
                      <h3 class="mb-0">Staff Information</h3>
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
                              <label class="col-lg-3 col-form-label form-control-label">Name</label>
                              <div class="col-lg-9">
                              <input type="name" name='username' value="<?php echo $username; ?>" class="form-control" placeholder="name">
                                 
                              </div>
                          </div>
                          <div class="form-group row">
                              <label class="col-lg-3 col-form-label form-control-label">Email</label>
                              <div class="col-lg-9">
                              <input type="email" name='email' class="form-control" value="<?php echo $email; ?>" placeholder="email address">
                              </div>
                          </div>
                          
                          <div class="form-group row">
                              <label class="col-lg-3 col-form-label form-control-label">password</label>
                              <div class="col-lg-9">
                              <input type="password" name="password" placeholder="create a strong password" value="<?php echo $password; ?>" class="form-control">
                              </div>
                          </div>
                          <div class="form-group row">
                          <label class="col-lg-3 col-form-label form-control-label">Confirm Password</label>
                            <div class="col-lg-9">
                            <input type="password" name='c_pass' placeholder="confirm password" value="<?php echo $c_pass; ?>" class="form-control" >
                            </div>
                        </div>
                
                          <div class="form-group row">
                              <label class="col-lg-3 col-form-label form-control-label">Gender</label>
                              <div class="col-lg-9">
                              <select id="sex" name='gender' class="form-control " size="0">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                              </div>
                          </div>
                         
                          <div class="form-group row">
                              <label class="col-lg-3 col-form-label form-control-label">Date of birth</label>
                              <div class="col-lg-9">
                              <input class="form-control" type="date" name="date" 
                                placeholder="dd-mm-yyyy"
                                min="1997-01-01" max="2030-12-31">
                                 
                              </div>
                          </div>
                          <div class="form-check">
                            
                                <label class="col-lg-3 col-form-label form-check-label" for="flexCheckDefault">
                                <input class="form-check-input col-lg-9" type="checkbox" name='admin' value="" id="flexCheckDefault">
                                    Admin 
                                </label>
                            </div>
  
                          <div class="form-group row">
                              <label class="col-lg-3 col-form-label form-control-label"></label>
                              <div class="col-lg-9">
                                  <!-- <input type="reset" class="btn btn-secondary" value="Cancel"> -->
                                  <input type="submit" name='create-admin' class="btn btn-primary" value="Save Changes">
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
    <script src="../../assets/js/popper.min.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>
    <script src="../../assets/js/main.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.1/js/dataTables.bootstrap4.min.js"> </script>
    
  </body>
</html>