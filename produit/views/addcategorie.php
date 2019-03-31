<?php
//start session
session_start();

//including the database connection file
include_once('Crud.php');

$crud = new Crud();

if(isset($_POST['add'])) {

    $categorie = $crud->escape_string($_POST['categorie']);


    //insert data to database
    $sql = "INSERT INTO categoriee (categorie) VALUES ('$categorie')";
    if($crud->execute($sql)){
        $_SESSION['message'] = 'Member added successfully';
    }
    else{
        $_SESSION['message'] = 'Cannot add member';
    }

    header('location: categorie.php');
}
else{
    $_SESSION['message'] = 'Fill up add form first';
    header('location: categorie.php');
}
?>