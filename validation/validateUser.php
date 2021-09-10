<?php

function validateUser($user){
    
    $errors = array();
    if(empty($user['username'])){
        array_push($errors, 'username is required');
    }
    if(empty($user['email'])){
        array_push($errors, 'email is required');
    }
    if(empty($user['date'])){
        array_push($errors, 'date is required');
    }
    if(empty($user['password'])){
        array_push($errors, 'password is required');
    }
    if($user['password']!== $user['c_pass'] ){
        array_push($errors, 'password does not match');
    }
    $existingUser = selectOne('users', ['email' => $user['email']]);
    if ($existingUser) {
        array_push($errors, 'Email already exists');
    }

    return $errors;
   
}
function validateLogin($user){
    
    $errors = array();
    if(empty($user['username'])){
        array_push($errors, 'username is required');
    }
    
    if(empty($user['password'])){
        array_push($errors, 'password is required');
    }
    
    return $errors;
   
}
function validateChangePassword($user){
    
    $errors = array();
    if(empty($user['password'])){
        array_push($errors, 'password is required');
    }
    
    if($user['password']!== $user['c_pass'] ){
        array_push($errors, 'password does not match');
    }
    
    return $errors;
   
}


?>