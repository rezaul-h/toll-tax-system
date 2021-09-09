<?php

include(ROOT_PATH . "/app/database/db.php");

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

if (isset($_POST['create-pass'])){
    unset($_POST['create-pass']);
    $pass_id = create('pass',$_POST);
    header('location: ' .BASE_URL .'/admin/pass/details.php');
    exit();
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
    $id = $_POST['id'];
    unset($_POST['update-pass'], $_POST['id']);
    $topic_id = update('pass', $id, $_POST);
    header('location: ' . BASE_URL . '/admin/pass/details.php');
}

