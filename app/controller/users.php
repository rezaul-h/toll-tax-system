<?php
include(ROOT_PATH . '/app/database/db.php');
include(ROOT_PATH . '/validation/validateUser.php');
$errors= array();
$username = '';
$email = '';
$password = '';
$c_pass = '';




if(isset($_POST['register-btn'])){
    $errors = validateUser($_POST);

    if(count($errors) ===0){
        unset($_POST['register-btn'], $_POST['c_pass'], $_POST['date'],  $_POST['gender']);
        $_POST['admin'] = 0;
        $_POST['password'] = password_hash($_POST['password'],  PASSWORD_DEFAULT);
    
        $user_id = create('users', $_POST);
        $user = selectOne('users', ['id' => $user_id]);

        //login user
        $_SESSION['id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['admin'] = $user['admin'];
        $_SESSION['message'] = 'You are now logged in';
        $_SESSION['type'] = 'success';
        if ($_SESSION['admin']) {
            header('location: ' . BASE_URL . '/admin/dashboard/dashboard.php'); 
        } else {
            header('location: ' . BASE_URL . '/index.php');
        }
        exit();
    }
    else{
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $c_pass = $_POST['c_pass'];
    }
    
    
}

if (isset($_POST['login-btn'])) {
    $errors = validateLogin($_POST);

    if (count($errors) === 0) {
        $user = selectOne('users', ['username' => $_POST['username']]);

        if ($user && password_verify($_POST['password'], $user['password'])) {
        //login user
        $_SESSION['id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['admin'] = $user['admin'];
        $_SESSION['message'] = 'You are now logged in';
        $_SESSION['type'] = 'success';
        if ($_SESSION['admin']) {
            header('location: ' . BASE_URL . '/admin/dashboard/dashboard.php'); 
        } else {
            header('location: ' . BASE_URL . '/index.php');
        }
        exit();
        } else {
           array_push($errors, 'Wrong info');
        }
    }

    $username = $_POST['username'];
    $password = $_POST['password'];
}


?>