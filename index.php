<!DOCTYPE html>
<html>
<head>
	<title>Excel Uploading PHP</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>


<div class="container">
	<h1>Excel Upload</h1>


	<form method="POST" action="again.php" enctype="multipart/form-data">



		<div class="form-group">

			<label>Upload Excel File</label>
			<input type="file" name="file" class="form-control" accept=".csv">

		</div>

		<div class="form-group">

			<input type="submit" name="upload" class="btn btn-success"></button>

		</div>
		


	</form>
</div>


</body>
</html>