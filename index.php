<?php 
include("path.php");
include(ROOT_PATH ."/app/controller/category.php");
?>


<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?php echo BASE_URL . "/assets/css/bootstrap.min.css"?>">
    <link rel="stylesheet" href="<?php echo BASE_URL . "/assets/css/style.css"?>">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital@1&display=swap" rel="stylesheet">
	
	<title>Home</title>
</head>

<body>
<!--TODO navbar-->
<?php include (ROOT_PATH . "/app/includes/navbar.php")?>
<!--TODO navbar-->

	<header class="page-header gradient pt-5 pb-5">
		<div class="container pt-3">
			<div class="row align-items-center justify-content-center">
				<div class="col-md-7 text-center">
					<h2 class="mt-4">Automated Toll Tax System</h2>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus maxime neque nulla aliquid, culpa aliquam facere rem. Consequatur, veniam vitae.</p>
					<a href="<?php echo BASE_URL . "/Staff/dashboard/dashboard.php"?>">
					<button type="button" class="btn btn-outline-warning btn-large">Dashboard</button>
					</a>
					
				</div>
				<div class="col-md-5 px-4">
					<img src="<?php echo BASE_URL . "/assets/images/headerimg.jpg"?>" alt="" class="img-responsive fit-image">
				</div>
			</div>
		</div>
	</header>
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
		<path fill="#BD8EA6" fill-opacity="0.5" d="M0,192L48,160C96,128,192,64,288,80C384,96,480,192,576,240C672,288,768,288,864,282.7C960,277,1056,267,1152,256C1248,245,1344,235,1392,229.3L1440,224L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
	</svg>
	<section class="operations">
		<div class="container text-center">
			<div class="row g-5 py-4 justify-content-center">
				<div class="col-md-2 px-2">
					<a class="btn btn-warning" href="<?php echo BASE_URL . "/Staff/dashboard/dashboard.php"?>"> 
					<i class="fas fa-chart-line fa-5x pb-3"> </i>
                                <h3>Dashboard</h3>
                                </a>
                            </div>
                            
                                <div class="col-md-2 px-2">
                                    <a href="<?php echo BASE_URL . "/Staff/reciept/create.php"?>" class="btn btn-success">
                                    <span class="fas fa-file-invoice fa-5x pb-3"></span>
						<h3>Add Reciept</h3>
					</a>
				</div>
				<div class="col-md-2 px-2">
					<a href="<?php echo BASE_URL . "/Staff/reciept/details.php"?>" class="btn btn-info"> <span class="fas fa-user fa-5x pb-3"></span>
						<h3>View Reciepts</h3>
					</a>
				</div>
				<div class="col-md-2 px-2">
					<a href="<?php echo BASE_URL . "/Staff/profile/profile.php"?>" class="btn btn-dark"> <span class="fas fa-cogs fa-5x pb-3"></span>
						<h3>Profile</h3>
					</a>
				</div>
				<div class="col-md-2 px-2">
					<a href="<?php echo BASE_URL . "/Staff/reciept/search.php"?>" class="btn btn-primary"> <span class="fab fa-searchengin fa-5x pb-3"></span>
						<h3>Search</h3>
					</a>
				</div>
			</div>
		</div>
	</section>
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
		<path fill="#bd8ea6" fill-opacity="0.5" d="M0,192L40,208C80,224,160,256,240,245.3C320,235,400,181,480,181.3C560,181,640,235,720,266.7C800,299,880,309,960,282.7C1040,256,1120,192,1200,149.3C1280,107,1360,85,1400,74.7L1440,64L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
	</svg>
	<section class="feature gradient">
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-md-6">
					<img src="<?php echo BASE_URL . "/assets/images/introduce.jpg"?>" alt="" class="img-fluid">
				</div>
				<div class="col-md-6">
					<h1 class="my-3">Introducing TT System</h1>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, quo?</p>
					<ul>
						<li class="check">Easier record keeping of toll</li>
						<li class="check">get to know the total sale of passes</li>
						<li class="check">responsive in both phone and tablets</li>
						<li class="check">get print passes and recipt</li>
					</ul>
					<div class="text-center">
						<button type="button" class="btn btn-warning btn-large">Get Started</button>
					</div>
				</div>
			</div>
		</div>
	</section>
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
		<path fill="#bd8ea6" fill-opacity="0.5" d="M0,128L40,138.7C80,149,160,171,240,165.3C320,160,400,128,480,149.3C560,171,640,245,720,266.7C800,288,880,256,960,208C1040,160,1120,96,1200,101.3C1280,107,1360,181,1400,218.7L1440,256L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path>
	</svg>
<!-- recent notices -->
<div class="container">
  <div class="row">
      
      <div class="col-md-8">
          <div class="sidebar widget">
              <h3>Recent Post</h3>
              <ul>
                <li>
                    <div class="sidebar-thumb">
                        <img class="animated rollIn" src="http://shop.spotlayer.com/demo/soft-mag/demo1/wp-content/uploads/16555399183_33b1b1bc26_o-90x75.jpg" alt="" />
                    </div><!-- .Sidebar-thumb -->
                    <div class="sidebar-content">
                        <h5 class="animated bounceInRight"><a href="#">The Complete Guide to Medium for Marketers</a></h5>
                    </div><!-- .Sidebar-thumb -->
                    <div class="sidebar-meta">
                        <span class="time" ><i class="fa fa-clock-o"></i> Aug 27, 2015</span>
                        <span class="comment"><i class="fa fa-comment"></i> 10 comments</span>
                    </div><!-- .Sidebar-meta ends here -->
                </li><!-- .Li ends here -->
                
              </ul><!-- .Ul ends here -->
          </div><!-- .Widget ends here -->
      </div><!-- .Col ends here -->
    <div class="col-md-4">
	<div class="section topics">
          <h2 class="section-title">Vehicle Category</h2>
          <ul class="list-group">

	  <?php foreach ($topics as $key => $topic): ?>
		<li class="list-group-item disabled"><a class='btn' href="#"><?php echo $topic['name'] ?></a></li>
	  <?php endforeach; ?>

          </ul>
        </div>
	</div><!-- .Col ends here -->
  </div><!-- .Row ends here -->
</div><!-- .Container ends here -->
<!-- recent notices -->

	<!-- Footer -->
	<<?php include (ROOT_PATH . "/app/includes/footer.php")?>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="<?php echo BASE_URL . "/assets/js/jquery.min.js"?>"></script>
    <script src="<?php echo BASE_URL . "/assets/js/popper.min.js"?>"></script>
    <script src="<?php echo BASE_URL . "/assets/js/bootstrap.min.js"?>"></script>
    <script src="<?php echo BASE_URL . "/assets/js/main.js"?>"></script>
</body>

</html>