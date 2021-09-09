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
  <?php include(ROOT_PATH . "/app/includes/adminheader.php"); ?>
        
  <main class="mt-2 mx-7 ">
            <div class="card-header">
                <h3 class="mb-0">Pass Sold</h3>
            </div>
            <div class="card-header">
                <h3 class="mb-0">Category Details</h3>
            </div>
      
      <table class="table table-striped">
        <thead>
       

          <tr style=>
            <th scope="col">S.No</th>
            <th scope="col">Vehicle Name</th>
            <th scope="col">Date of Creation</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>

        <?php foreach ($topics as $key => $topic): ?>
    
          <tr>
            <th scope="row"><?php echo $key +1; ?></th>

            <td><?php echo $topic['name']; ?></td>
            <td><?php echo $topic['created_at']; ?></td>
            <td>
              <a href="<?php echo BASE_URL . "/admin/category/edit.php"; ?>" class="btn btn-primary"><i class="far fa-eye"></i></a>
              <a href="edit.php?id=<?php echo $topic['id']; ?>" class="btn btn-success"><i class="fas fa-edit"></i></a>
            <a href="details.php?del_id=<?php echo $topic['id']; ?>" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
            </td>
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