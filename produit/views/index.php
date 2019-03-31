<?php
	//start session
	session_start();

include_once ('headerAdmin.php');


	//crud with database connection
	include_once('Crud.php');

	$crud = new Crud();

	//fetch data
	$sql = "SELECT * FROM produit";
	$result = $crud->read($sql);
?>

<body>
<div class="container">
	<h1 class="page-header text-center">Gerer produit</h1>
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
			<a href="#add" data-toggle="modal" class="btn btn-primary">Ajouter Produit</a><br><br>
			<table class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th>Nom</th>
						<th>Marque</th>
						<th>Categorie</th>
						<th>Quantite</th>
						<th>prix</th>
						<th>Description</th>
						<th>Image</th>
					</tr>
				</thead>
				<tbody>
					<?php
						foreach ($result as $key => $row) {
							?>
							<tr>
								<td><?php echo $row['id']; ?></td>
								<td><?php echo $row['nom']; ?></td>
								<td><?php echo $row['marque']; ?></td>
								<td><?php echo $row['id_categorie']; ?></td>
								<td><?php echo $row['quantite']; ?></td>
								<td><?php echo $row['prix']; ?></td>
								<td><?php echo $row['description']; ?></td>
								<td><?php
$id =$row['id'];
                                    $db = mysqli_connect("localhost","root","","projetweb"); //keep your db name
                                    $sql = "SELECT * FROM `produit` where id =$id ";
                                    $sth = $db->query($sql);
                                    $result=mysqli_fetch_array($sth);
                                    echo '<img width="50" height="50" src="data:image/jpeg;base64,'.base64_encode( $result['image'] ).'"/>';
                                    ?></td>

                                 ?><td>

								<td><a href="#edit<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-success">Modifier</a> |
									<a href="#delete<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-danger">Supprimer</a>
								</td>
								<?php include('action_modal.php'); ?>
							</tr>
							<?php     
					    }
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php include('add_modal.php'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" rel="stylesheet"></script>

</body>
</html>
<?php
include_once ('footerAdmin.php');
?>