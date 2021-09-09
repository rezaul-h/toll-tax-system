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
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <!--offcanvas trigger-->
            <button class="navbar-toggler me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                <span class="navbar-toggler-icon 
                data-bs-target:#offcanvasExample"></span>
              </button>
               <!--offcanvas trigger-->
          <a class="navbar-brand fw-bold me-auto" href="#">TTS</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="container-fluid">
            <form class="d-flex ms-auto">
                <div class=" container-fluid input-group mb-1 form-group col-lg-4 my-3 my-lg-0">
                    <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                        <i class="fas fa-search"></i>
                    </button>
                  </div>
            </form>
        </div>
             <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-user"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
             </div>

                

            
          </div>
        </div>
    </nav>
     <!-- NAVBAR -->

      <!-- offcanvas -->
      <div class="offcanvas offcanvas-start bg-dark text-white sidebar-nav" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        
        <div class="offcanvas-body p-0">
          <nav class="navbar-dark">
            <ul class="navbar-nav">
                <li>
                    <div class="text-muted small fw-bold text-uppercase px-3">Staff Name</div>
                </li>
                <li>
                    <a href="../../Staff/dashboard/dashboard.php" class="nav-link px-3 active">
                        <span class="me-2">
                            <i class="fas fa-tachometer"></i>
                        </span>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="my-4">
                    <hr class="dropdown-divider">
                </li>

                <li>
                    <div class="text-muted small fw-bold text-uppercase px-3">Manage Reciept</div>
                </li>
                <li>
                    <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <span class="me-2">
                            <i class="fas fa-ticket"></i>
                        </span>
                        <span>Pass</span>
                        <span style="float: right;"><i class="far fa-sort-down"></i></span>
                      </a>
                      <div class="collapse" id="collapseExample">
                        <div class="">
                        <ul class="navbar-nav ps-5">
                            <li>
                                <a href="../../Staff/reciept/create.php" class="nav-link">
                                    <span class="me-2">
                                        <i class="fad fa-plus"></i>
                                    </span>
                                    <span>Add Reciept</span>
                                </a>
                            </li>
                            <li>
                                <a href="../../Staff/reciept/details.php" class="nav-link">
                                    <span class="me-2">
                                        <i class="far fa-info-square"></i>
                                    </span>
                                    <span>Reciept Details</span>
                                </a>
                            </li>

                        </ul>
                        </div>
                </li>
                <li class="my-4">
                    <hr class="dropdown-divider">
                </li>
            </ul>
          </nav>
          
        </div>
      </div>
      <!-- offcanvar-->

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