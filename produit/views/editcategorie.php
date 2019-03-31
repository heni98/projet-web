<?php
//start session
session_start();

//including the database connection file
include_once('Crud.php');

//getting the id
$id = $_GET['id'];

$crud = new Crud();

if(isset($_POST['edit'])) {

    $categorie = $crud->escape_string($_POST['categorie']);


    //update data
    $sql = "UPDATE categoriee SET categorie = '$categorie' WHERE id = '$id'";

    if($crud->execute($sql)){
        $_SESSION['message'] = 'Member updated successfully';
    }
    else{
        $_SESSION['message'] = 'Cannot update member';
    }

    header('location: categorie.php');
}
else{
    $_SESSION['message'] = 'Select user to edit first';
    header('location: categorie.php');
}
?>