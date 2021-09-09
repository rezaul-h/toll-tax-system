<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
		<div class="container">
			<a class="navbar-brand" href="#">
				<img src="assets/images/logo.jpg" alt="" width="5%">
			</a>
		</div>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item active"> <a class="nav-link" href="<?php echo BASE_URL . "/index.php"?>">Home</a>
				</li>
				<li class="nav-item"> <a class="nav-link" href="<?php echo BASE_URL . "/signin.php"?>">Admin</a>
				</li>
				<li class="nav-item"> <a class="nav-link" href="<?php echo BASE_URL . "/signin.php"?>">Staff</a>
				</li>
				<li class="nav-item"> <a class="nav-link" href="<?php echo BASE_URL . "/contactus.php"?>">Contact us</a>
				</li>
				<?php if(isset($_SESSION['id'])): ?>
				<div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-user"><?php echo $_SESSION['username'] ?></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="<?php echo BASE_URL . "/Staff/profile/profile.php"?>">Profile</a></li>
                    <li><a class="dropdown-item" href="<?php echo BASE_URL . "/Staff/dashboard/dashboard.php"?>">DASHBOARD</a></li>
                    
                </ul>
             </div>
			 <?php if($_SESSION['admin']): ?>

				<div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-user"><?php echo $_SESSION['username'] ?></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="<?php echo BASE_URL . "/admin/dashboard/dashboard.php"?>">DASHBOARD</a></li>
                </ul>
             </div>
			 <?php endif; ?>
			 <li><a class="dropdown-item" href="<?php echo BASE_URL . "/logout.php"?>">Logout</a></li>

				<?php else: ?>
					<li class="nav-item"> <a class="nav-link" href="<?php echo BASE_URL . "/signin.php"?>">SIGN UP</a></li>
					<li class="nav-item"> <a class="nav-link" href="<?php echo BASE_URL . "/signin.php"?>">LOGIN</a></li>
				<?php endif; ?>

				

			</ul>
		</div>
	</nav>