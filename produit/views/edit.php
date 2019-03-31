<?php
//start session
session_start();

//including the database connection file
include_once('Crud.php');

//getting the id
$id = $_GET['id'];
 
$crud = new Crud();
 
if(isset($_POST['edit'])) {
    $nom = $crud->escape_string($_POST['nom']);
    $marque = $crud->escape_string($_POST['marque']);
    $categorie = $crud->escape_string($_POST['categorie']);
    $quantite = $crud->escape_string($_POST['quantite']);
    $prix = $crud->escape_string($_POST['prix']);
    $description = $crud->escape_string($_POST['description']);
    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
        
    //update data
    $sql = "UPDATE produit SET nom = '$nom', marque = '$marque', id_categorie = '$categorie' , quantite='$quantite',prix='$prix', description ='$description',image ='$image' WHERE id = '$id'";

    if($crud->execute($sql)){
        $_SESSION['message'] = 'Member updated successfully';
    }
    else{
        $_SESSION['message'] = 'Cannot update member';
    }
        
    header('location: index.php');
}
else{
    $_SESSION['message'] = 'Select user to edit first';
    header('location: index.php');
}
?>