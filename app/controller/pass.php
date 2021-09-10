<?php

include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . '/validation/validatePass.php');

$errors = array();
$id = '';
$vehicle_name='';
$vehicle_reg_num = '';
$vehicle_name='';
$name_of_applicant = '';
$age_of_applicant='';
$address = '';
$cost='';

$val_from = '';
$val_to='';
$passes = selectAll('pass');
$topics = selectAll('category');

if (isset($_POST['create-pass'])){
    $errors = validatePass($_POST);
    if (count($errors) === 0) {
        unset($_POST['create-pass']);
        $pass_id = create('pass',$_POST);
        header('location: ' .BASE_URL .'/admin/pass/details.php');
        exit();
    }
    else{
        $vehicle_name= $_POST['vehicle_name'];
        $vehicle_reg_num = $_POST['vehicle_reg_num'];
        $vehicle_name=$_POST['vehicle_name'];
        $name_of_applicant = $_POST['name_of_applicant'];
        $age_of_applicant=$_POST['age_of_applicant'];
        $address = $_POST['address'];
        $cost=$_POST['cost'];
        $val_from = $_POST['val_from'];
        $val_to=$_POST['val_to'];
    }
    
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $pas = selectOne('pass', ['id' => $id]);
    $id = $pas['id'];
    $vehicle_name= $pas['vehicle_name'];
    $vehicle_reg_num = $pas['vehicle_reg_num'];
    $vehicle_name=$pas['vehicle_name'];
    $name_of_applicant = $pas['name_of_applicant'];
    $age_of_applicant=$pas['age_of_applicant'];
    $address = $pas['address'];
    $cost=$pas['cost'];
    $val_from = $pas['val_from'];
    $val_to=$pas['val_to'];
}

if (isset($_GET['del_id'])) {
    $id = $_GET['del_id'];
    $count = delete('pass', $id);
    header('location: ' . BASE_URL . '/admin/pass/details.php');
    exit();
}

if (isset($_POST['update-pass'])) {
    $errors = validatePass($_POST);
    if (count($errors) === 0) {
        $id = $_POST['id'];
        unset($_POST['update-pass'], $_POST['id']);
        $topic_id = update('pass', $id, $_POST);
        header('location: ' . BASE_URL . '/admin/pass/details.php');
    }
    else{
        $id = $_POST['id'];
        $vehicle_name= $_POST['vehicle_name'];
        $vehicle_reg_num = $_POST['vehicle_reg_num'];
        $vehicle_name=$_POST['vehicle_name'];
        $name_of_applicant = $_POST['name_of_applicant'];
        $age_of_applicant=$_POST['age_of_applicant'];
        $address = $_POST['address'];
        $cost=$_POST['cost'];
        $val_from = $_POST['val_from'];
        $val_to=$_POST['val_to'];
    }
    
}

