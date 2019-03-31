<?php
$connect = mysqli_connect("localhost", "root", "", "projetweb");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM produit 
	WHERE nom LIKE '%".$search."%'
	OR id_categorie LIKE '%".$search."%' 
	OR description LIKE '%".$search."%' 
	OR marque LIKE '%".$search."%' 
	
	";
}
else
{
	$query = "
	SELECT * FROM produit ORDER BY id";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>nom</th>
							<th>marque </th>
							<th>categorie </th>
							<th>quantite </th>
							<th>prix</th>
							<th>description</th>
							<th>image </th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["nom"].'</td>
				<td>'.$row["marque"].'</td>
				<td>'.$row["id_categorie"].'</td>
				<td>'.$row["quantite"].'</td>
				<td>'.$row["prix"].'</td>
				<td>'.$row["description"].'</td>
				<td> <img width="50" height="50" src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/></td>
			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>