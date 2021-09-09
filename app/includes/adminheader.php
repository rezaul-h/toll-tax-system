<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <!--offcanvas trigger-->
            <button class="navbar-toggler me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                <span class="navbar-toggler-icon 
                data-bs-target:#offcanvasExample"></span>
              </button>
               <!--offcanvas trigger-->
          <a class="navbar-brand fw-bold me-auto" href=" <?php echo BASE_URL . "/index.php"; ?>">TTS</a>
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
                <li><a class="dropdown-item" href="#">settings</a></li>
                <li><a class="dropdown-item" href="#">profile</a></li>
                <li><a class="dropdown-item" href="#">logout</a></li>
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
                    <div class="text-muted small fw-bold text-uppercase px-3">admin name</div>
                </li>
                <li>
                    <a href=" <?php echo BASE_URL . "/admin/dashboard/dashboard.php"; ?>" class="nav-link px-3 active">
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
                    <div class="text-muted small fw-bold text-uppercase px-3">Manage Staff</div>
                </li>
                <li>
                    <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <span class="me-2">
                            <i class="far fa-user-circle"></i>
                        </span>
                        <span>Staff</span>
                        <span style="float: right;"><i class="far fa-sort-down"></i></span>
                      </a>
                      <div class="collapse" id="collapseExample">
                        <div class="">
                        <ul class="navbar-nav ps-5">
                            <li>
                                <a href=" <?php echo BASE_URL . "/admin/staff/ceate.php"; ?>" class="nav-link">
                                    <span class="me-2">
                                        <i class="fas fa-user-plus"></i>
                                    </span>
                                    <span>Add Staff</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo BASE_URL . "/admin/staff/details.php"; ?>" class="nav-link">
                                    <span class="me-2">
                                        <i class="fas fa-user-edit"></i>
                                    </span>
                                    <span>Update Staff</span>
                                </a>
                            </li>

                        </ul>
                        </div>
                </li>
                <li class="my-4">
                    <hr class="dropdown-divider">
                </li>

                <li>
                    <div class="text-muted small fw-bold text-uppercase px-3">Manage Pass</div>
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
                                <a href="<?php echo BASE_URL . "/admin/pass/create.php"; ?>" class="nav-link">
                                    <span class="me-2">
                                        <i class="fad fa-plus"></i>
                                    </span>
                                    <span>Add Pass</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo BASE_URL . "/admin/pass/details.php"; ?>" class="nav-link">
                                    <span class="me-2">
                                        <i class="far fa-info-square"></i>
                                    </span>
                                    <span>Pass Details</span>
                                </a>
                            </li>

                        </ul>
                        </div>
                </li>
                <li class="my-4">
                    <hr class="dropdown-divider">
                </li>


                <li>
                    <div class="text-muted small fw-bold text-uppercase px-3">Manage Vehicles</div>
                </li>
                <li>
                    <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <span class="me-2">
                            <i class="fas fa-cars"></i>
                        </span>
                        <span>Vehicle Category</span>
                        <span style="float: right;"><i class="far fa-sort-down"></i></span>
                      </a>
                      <div class="collapse" id="collapseExample">
                        <div class="">
                        <ul class="navbar-nav ps-5">
                            <li>
                                <a href="<?php echo BASE_URL . "/admin/category/create.php"; ?>" class="nav-link">
                                    <span class="me-2">
                                        <i class="fad fa-plus"></i>
                                    </span>
                                    <span>Add Category</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo BASE_URL . "/admin/category/details.php"; ?>" class="nav-link">
                                    <span class="me-2">
                                        <i class="far fa-info-square"></i>
                                    </span>
                                    <span>Category Details</span>
                                </a>
                            </li>

                        </ul>
                        </div>
                </li>
                <li class="my-4">
                    <hr class="dropdown-divider">
                </li>

                <li>
                    <div class="text-muted small fw-bold text-uppercase px-3">Manage Reports</div>
                </li>
                <li>
                    <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <span class="me-2">
                            <i class="fal fa-file-chart-line"></i>
                        </span>
                        <span>Report of Pass</span>
                        <span style="float: right;"><i class="far fa-sort-down"></i></span>
                      </a>
                      <div class="collapse" id="collapseExample">
                        <div class="">
                        <ul class="navbar-nav ps-5">
                            <li>
                                <a href="<?php echo BASE_URL . "/admin/report/BWdates.php"; ?>" class="nav-link">
                                    <span class="me-2">
                                        <i class="fad fa-calendar-alt"></i>
                                    </span>
                                    <span>B/W dates Report</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo BASE_URL . "/admin/report/passcount.php"; ?>" class="nav-link">
                                    <span class="me-2">
                                        <i class="fad fa-tally"></i>
                                    </span>
                                    <span>Pass Count</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo BASE_URL . "/admin/report/passsales.php"; ?>" class="nav-link">
                                    <span class="me-2">
                                        <i class="fas fa-money-check-edit-alt"></i>
                                    </span>
                                    <span>Pass sales</span>
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