<?php

include(ROOT_PATH . "/app/database/db.php");

$errors = array();
$id = '';
$name = '';
$topics = selectAll('category');
// dd($topics);

if (isset($_POST['add-topic'])) {
    unset($_POST['add-topic']);
    $topic_id = create('category',$_POST);
    header('location: ' .BASE_URL .'/admin/category/details.php');
    exit();

}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $topic = selectOne('category', ['id' => $id]);
    $id = $topic['id'];
    $name = $topic['name'];
}
if (isset($_GET['del_id'])) {
    $id = $_GET['del_id'];
    $count = delete('category', $id);
    header('location: ' . BASE_URL . '/admin/category/details.php');
    exit();
}
if (isset($_POST['update-topic'])) {
    $id = $_POST['id'];
    unset($_POST['update-topic'], $_POST['id']);
    $topic_id = update('category', $id, $_POST);
    header('location: ' . BASE_URL . '/admin/category/create.php');
}



