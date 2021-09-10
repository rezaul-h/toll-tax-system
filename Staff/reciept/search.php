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
      <!-- NAVBAR -->
      <?php include(ROOT_PATH . "/app/includes/staffheader.php"); ?>
      <!-- offcanvar-->
      <div class="container">
    <br/>
	<div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-8">
                        <?php
                        $host = 'localhost';
                        $user = 'root';
                        $pass  = '';
                        $db_name = 'tax';
                        
                        $con = new MySQLi($host,$user,$pass,$db_name);

                        if(isset($_POST['search'])){
                            $searchKey =  $_POST['search'];
                            
                            $sql ="SELECT * FROM reciept WHERE (`vehicle_reg_num` LIKE '%".$searchKey."%')";
                        }
                        else{
                        $sql =" SELECT * FROM reciept";
                          $searchKey ='';
                        }
                        $result =  $con -> query($sql);

                        ?>

                            <form class="card card-sm" action='search.php' method='post'>
                         
                                <div class="card-body row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <i class="fas fa-search h4 text-body"></i>
                                    </div>
                                    <!--end of col-->
                                    <div class="col">
                                        <input class="form-control form-control-lg form-control-borderless" name ='search' placeholder="Search reciept">
                                    </div>
                                    <!--end of col-->
                                    <div class="col-auto">
                                        <button  class="btn btn-lg btn-success" type="submit">Search</button>
                                    </div>
                                    <!--end of col-->
                                </div>
                            </form>
                        </div>
                        <!--end of col-->
                    </div>

</div>
<main class="mt-2 mx-7 ">
            
            <div class="card-header">
                <h3 class="mb-0 mt-4">Result for Vehicle registration number '<?php echo $searchKey; ?>'</h3>
            </div>

      
      <table class="table table-striped">
        <thead>
          <tr style=>
            <th scope="col">vehicle_name</th>
            <th scope="col">vehicle_reg_num</th>
            <th scope="col">owner_name</th>
            <th scope="col">gender</th>
            <th scope="col">trip_type</th>
            <th scope="col">cost</th>
            <th scope="col">age_of_applicant</th>
            <th scope="col">city</th>
            <th scope="col">created_at</th>
          </tr>
        </thead>
        <tbody>
         
        <?php while($row =$result->fetch_assoc()){
         ?>
    
    <tr>
      <td><?php echo $row["vehicle_name"]; ?></td>
      <td><?php echo $row["vehicle_reg_num"]  ; ?></td>
      <td><?php echo $row["owner_name"] ; ?></td>
      <td><?php echo $row["gender"]  ; ?></td>
      <td><?php echo $row["trip_type"]  ; ?></td>
      <td><?php echo $row["cost"] ; ?></td>
      <td><?php echo $row["age_of_applicant"]  ; ?></td>
      <td><?php echo $row["city"]  ; ?></td>
      <td><?php echo $row["created_at"] ;?></td>
    </tr>

    <?php } 
     /* free result set */
     $result->free();
     ?>

        </tbody>
      </table>
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