<?php
include(ROOT_PATH . '/app/database/db.php');
include(ROOT_PATH . '/validation/validateUser.php');
$errors= array();
$username = '';
$email = '';
$password = '';
$c_pass = '';
$id='';

$admin_users = selectAll('users');
// $staff_users = selectAll('users', ['admin'=>0]);


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
    else{
        $username = $_POST['username'];
        $password = $_POST['password'];
    }

   
}
if(isset($_POST['register-btn']) || isset($_POST['create-admin']) ){
    $errors = validateUser($_POST);

    if(count($errors) ===0){
        unset($_POST['register-btn'],$_POST['c_pass'], $_POST['date'],  $_POST['gender'], $_POST['create-admin']);
        $_POST['password'] = password_hash($_POST['password'],  PASSWORD_DEFAULT);
        if(isset($_POST['admin'])){
            $_POST['admin'] = 1;
            $user_id = create('users', $_POST);
            header('location: ' . BASE_URL . '/admin/dashboard/dashboard.php');
            exit(); 
        }
        else{
            $_POST['admin'] = 0;
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
        
    }
 
}
if (isset($_POST['update-user'])) {
    $errors = validateUser($_POST);

    if (count($errors) === 0) {
        $id = $_POST['id'];
        unset($_POST['c_pass'], $_POST['date'],  $_POST['gender'], $_POST['update-user'], $_POST['id']);
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        
        $_POST['admin'] = isset($_POST['admin']) ? 1 : 0;
        $count = update('users', $id, $_POST);
        header('location: ' . BASE_URL . '/admin/staff/details.php'); 
        exit();
        
    } else {
        $username = $_POST['username'];
        $admin = isset($_POST['admin']) ? 1 : 0;
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordConf = $_POST['c_pass'];
    }
}
if (isset($_POST['change-user'])) {
    $errors = validateUser($_POST);

    if (count($errors) === 0) {
        $id = $_POST['id'];
        unset($_POST['c_pass'], $_POST['date'],  $_POST['gender'], $_POST['change-user'], $_POST['id']);
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        
        $_POST['admin'] = isset($_POST['admin']) ? 1 : 0;
        $count = update('users', $id, $_POST);
        header('location: ' . BASE_URL . '/Staff/profile/profile.php'); 
        exit();
        
    } else {
        $username = $_POST['username'];
        $admin = isset($_POST['admin']) ? 1 : 0;
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordConf = $_POST['c_pass'];
    }
}


if (isset($_GET['id'])) {
    $user = selectOne('users', ['id' => $_GET['id']]);
    
    $id = $user['id'];
    $username = $user['username'];
    $admin = $user['admin'];
    $email = $user['email'];
}
if (isset($_GET['del_id'])) {
    $count = delete('users', $_GET['del_id']);
    header('location: ' . BASE_URL . '/admin/staff/details.php'); 
    exit();
}


?>