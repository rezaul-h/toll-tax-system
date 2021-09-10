<?php include("../../path.php"); ?>
<?php include(ROOT_PATH ."/app/controller/pass.php");?>
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
      <!-- NAVBAR -->
      <?php include(ROOT_PATH . "/app/includes/adminheader.php"); ?>
      <!-- offcanvar-->
      <main class="mt-2 mx-6">

      <form action="edit.php" method='post'>
        <div class="col-lg-7 offset-md-2">
            <span class="anchor" id="formUserEdit"></span>
            <hr class="my-5">
            
            <!-- form user info -->
            <div class="card card-outline-secondary text-right ml-5">
                <div class="card-header">
                    <h3 class="mb-0">Pass Update</h3>
                </div>
               
                <div class="form-row">
    <div class="col-lg-7">
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
                              <div class="col-lg-9">
                                  <input class="form-control" name='id' type="hidden" value="<?php echo $id; ?>">
                              </div>
                          </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Vehicle name</label>
                            <div class="col-lg-9">
                                <input class="form-control" name='vehicle_name' type="text" value="<?php echo $vehicle_name; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">register number</label>
                            <div class="col-lg-9">
                                <input class="form-control" name = 'vehicle_reg_num' type="number" value="<?php echo $vehicle_reg_num;?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Name of applicant</label>
                            <div class="col-lg-9">
                                <input class="form-control" name='name_of_applicant' type="text" value="<?php echo $name_of_applicant;?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Age of applicant</label>
                            <div class="col-lg-9">
                                <input class="form-control" name='age_of_applicant' type="number" value="<?php echo $age_of_applicant;?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Address</label>
                            <div class="col-lg-9">
                                <input class="form-control" name='address' type="text" value="<?php echo $address;?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Vehicle category</label>
                            <div class="col-lg-9">
                                <select id="category" name='category_id' value="<?php echo $address;?>" class="form-control" size="0">
                                   
                                <?php foreach ($topics as $key => $topic): ?>
                                    <option value="<?php echo $topic['id']?>"><?php echo $topic['name']?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <!-- <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Gender</label>
                            <div class="col-lg-9">
                                <select id="sex" class="form-control" size="0">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div> -->
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Cost</label>
                            <div class="col-lg-9">
                                <input class="form-control" name='cost' type="number" value="<?php echo $cost;?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Validity from</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="date" name="val_from" 
                                placeholder="dd-mm-yyyy" value="<?php echo $val_from;?>"
                                min="1997-01-01" max="2030-12-31">
                               
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Validity to</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="date" name="val_to" 
                                placeholder="dd-mm-yyyy" value="<?php echo $val_to;?>"
                                min="1997-01-01" max="2030-12-31">
                               
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-9">
                                <!-- <input type="reset" class="btn btn-secondary" value="Cancel"> -->
                                <input type="submit" name='update-pass' class="btn btn-primary" value="Save Changes">
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