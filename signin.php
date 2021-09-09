<?php include("path.php")?>
<?php include(ROOT_PATH ."/app/controller/users.php");?>

<!doctype html>
<html lang="en">
  
  <?php include(ROOT_PATH . "/app/includes/header.php");?>
 
  <body id= "signup">
      
    <section class="form my-4 mx-5 align-items-center">
        <div class="contrainer">
            <div class="row no-gutters">
                <div class="col-lg-5 ">
                    <img src="<?php echo BASE_URL . "/assets/images/signin-image.jpg"?>" alt="" class="img-fluid rounded-circle">
                </div>
                <div class="col-lg-7">
                    <h1 class="font-weight-bold py-3"> Toll SYSTEM</h1>
                    <h4>Sign into you account</h4>
                    <form action="signin.php" method='post'>

                    <?php include(ROOT_PATH . "/validation/formErrors.php");?>

                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="name" name="username" value="<?php echo $username; ?>" class="form-control my-3 p-4" placeholder="Enter Username">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="password" name="password" placeholder="Insert your password" value="<?php echo $password; ?>" class="form-control my-3 p-4" >
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                            <button type="submit" name="login-btn" class="btn1 mt-3 mb-5">Log In</button>
                            </div>
                        </div>
                        <a href="">Forgot password?</a>
                        <p> Don't have an account?<a href="">Register here</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="form my-6 mx-5 align-items-center">
        <div class="contrainer">
            <div class="row no-gutters">
                <div class="col-lg-7 ">
                    <h4 class="mb-3" >Create an account</h4>
                    <form action="signin.php" method = 'post'>
                    
                    <?php include(ROOT_PATH . "/validation/formErrors.php");?>
                    
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="name" name='username' value="<?php echo $username; ?>" class="form-control my-3 p-4" placeholder="name">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <select id="sex" name='gender' class="form-control my-3 p-4" size="0">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input class="form-control my-3 p-4" type="date" name="date" 
                                placeholder="dd-mm-yyyy"
                                min="1997-01-01" max="2030-12-31">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="email" name='email' class="form-control my-3 p-4" value="<?php echo $email; ?>" placeholder="email address">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                            <input type="password" name="password" placeholder="create a strong password" value="<?php echo $password; ?>" class="form-control my-3 p-4">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="password" name='c_pass' placeholder="confirm password" value="<?php echo $c_pass; ?>" class="form-control my-3 p-4" >
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-lg-7">
                                <button type="submit" name="register-btn" class="btn1 mt-3 mb-5">Sign up</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4 mt-6 img-fluid mx-auto d-block">
                    <img src="<?php echo BASE_URL . "/assets/images/signin-image.jpg"?>"  alt="" class="img-fluid rounded-circle">
                </div>
            </div>
        </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <<?php include (ROOT_PATH . "/app/includes/optionaljs.php")?>
  </body>
</html>