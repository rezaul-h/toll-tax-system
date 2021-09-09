<?php

include(ROOT_PATH . "/app/database/db.php");

$errors = array();
$id = '';
$vehicle_name='';
$vehicle_reg_num = '';
$owner_name='';
$age_of_applicant='';
$city = '';
$cost='';
$gender = '';
$trip_type='';
$reciepts = selectAll('reciept');

if (isset($_POST['create-reciept'])){

    unset($_POST['create-reciept']);
    $reciept_id = create('reciept',$_POST);
    header('location: ' .BASE_URL .'/Staff/reciept/details.php');
    exit();
}


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $reciept = selectOne('reciept', ['id' => $id]);
    $id = $reciept['id'];
    $vehicle_name= $reciept['vehicle_name'];
    $vehicle_reg_num = $reciept['vehicle_reg_num'];
    $owner_name=$reciept['owner_name'];
    $age_of_applicant=$reciept['age_of_applicant'];
    $city = $reciept['city'];
    $gender = $reciept['gender'];
    $cost=$reciept['cost'];
    $trip_type = $reciept['trip_type'];
}

if (isset($_GET['del_id'])) {
    $id = $_GET['del_id'];
    $count = delete('reciept', $id);
    header('location: ' . BASE_URL . '/Staff/reciept/details.php');
    exit();
}
if (isset($_POST['update-reciept'])) {
    $id = $_POST['id'];
    unset($_POST['update-reciept'], $_POST['id']);
    $topic_id = update('reciept', $id, $_POST);
    header('location: ' . BASE_URL . '/Staff/reciept/details.php');
}

