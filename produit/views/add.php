<?php
//start session
session_start();

//including the database connection file
include_once('Crud.php');
 
$crud = new Crud();
 
if(isset($_POST['add'])) {

    $nom = $crud->escape_string($_POST['nom']);
    $marque = $crud->escape_string($_POST['marque']);
    $categorie = $crud->escape_string($_POST['categorie']);
    $quantite = $crud->escape_string($_POST['quantite']);
    $prix = $crud->escape_string($_POST['prix']);
    $description = $crud->escape_string($_POST['description']);
    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));

    //insert data to database
    $sql = "INSERT INTO produit (nom, marque, id_categorie, quantite, prix, description, image) VALUES ('$nom','$marque','$categorie','$quantite','$prix','$description','$image')";
    if($crud->execute($sql)){
        $_SESSION['message'] = 'Member added successfully';
    }
    else{
        $_SESSION['message'] = 'Cannot add member';
    }
        
    header('location: index.php');
}
else{
    $_SESSION['message'] = 'Fill up add form first';
    header('location: index.php');
}
?>