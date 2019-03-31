<?php
include_once ('headerAdmin.php');

?>
<html>
	<head>
		<title>web</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
            <div class="col-sm-8 col-sm-offset-0">

            <br />
			<br />
			<br />
			<h2 align="center">rechercher produit</h2><br />
			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon">rechercher</span>
					<input type="text" name="search_text" id="search_text" placeholder="rechercher par tous les details" class="form-control" />
				</div>
			</div>
			<br />
			<div id="result"></div>
		</div>
        </div>

        <div style="clear:both"></div>
		<br />
		
		<br />
		<br />
		<br />
	</body>
</html>


<script>
$(document).ready(function(){
	load_data();
	function load_data(query)
	{
		$.ajax({
			url:"fetch.php",
			method:"post",
			data:{query:query},
			success:function(data)
			{
				$('#result').html(data);
			}
		});
	}
	
	$('#search_text').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_data(search);
		}
		else
		{
			load_data();			
		}
	});
});
</script>

<?php
include_once ('footerAdmin.php');
?>


