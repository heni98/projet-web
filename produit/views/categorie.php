<?php
//start session
session_start();

include_once ('headerAdmin.php');


//crud with database connection
include_once('Crud.php');

$crud = new Crud();

//fetch data
$sql = "SELECT * FROM categoriee";
$result = $crud->read($sql);
?>

    <body>
    <div class="container">
        <h1 class="page-header text-center">Categorie</h1>
        <div class="row">
            <div class="col-sm-0 col-sm-offset-0">
                <?php
                if(isset($_SESSION['message'])){
                    ?>
                    <div class="alert alert-info text-center">
                        <?php echo $_SESSION['message']; ?>
                    </div>
                    <?php

                    unset($_SESSION['message']);
                }

                ?>
                <a href="#add" data-toggle="modal" class="btn btn-primary">Ajouter Categorie</a><br><br>
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Categorie</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($result as $key => $row) {
                        ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['categorie']; ?></td>

                            <td><a href="#edit<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-success">modifier</a> |
                                <a href="#delete<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-danger">supprimer</a>
                            </td>
                            <?php include('action_modalcategorie.php'); ?>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php include('add_modalcategorie.php'); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" rel="stylesheet"></script>

    </body>
    </html>
<?php
include_once ('footerAdmin.php');
?>