<?php

function validatePass($user){
    
    $errors = array();
    if(empty($user['vehicle_name'])){
        array_push($errors, 'vehicle name is required');
    }
    if(empty($user['vehicle_reg_num'])){
        array_push($errors, 'vehicle registration number is required');
    }
    if(empty($user['name_of_applicant'])){
        array_push($errors, 'name is required');
    }
    if(empty($user['age_of_applicant'])){
        array_push($errors, 'age is required');
    }
    if(empty($user['address'])){
        array_push($errors, 'address is required');
    }
    if(empty($user['cost'])){
        array_push($errors, 'cost is required');
    }
    if(empty($user['val_from'])){
        array_push($errors, 'validation from is required');
    }
    if(empty($user['val_to'])){
        array_push($errors, 'validation to  is required');
    }

    return $errors;
   
}