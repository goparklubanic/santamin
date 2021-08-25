<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<title>Sentimen Analisis Game PUBG Mobile</title>

	<style type="text/css">
		
		.judul{
			margin-top: 15px;
			margin-left: 10px;
			font-family: helvatica;
		}

		.table{

			margin-top: 5px;
			margin-left: 0px;
			border: 1px solid black;
		}

	</style>
</head>
<body>
		<div class="col-md-16">
			<h2 class="judul">
				Sentimen Analisis Game PUBG Mobile
			</h2>
			<hr style="border: 1px solid black">

		</div>
			
		<div class="col-md-6">
			
			<table class="table">
				<tr>
					<td><a href="index.php" role="button" class="btn btn-default">Uji Sentimen</a></td>
					<td><a href="tambahdata.php" role="button" class="btn btn-primary">Tambah Data</a></td>
					<td><a href="ulasanpositif.php" role="button" class="btn btn-default">Ulasan Positif</a></td>
					<td><a href="ulasannegatif.php" role="button" class="btn btn-default">Ulasan Negatif</a></td>
				</tr>
				<tr>
					<td colspan="4"><textarea class="form-control" rows="3"></textarea></td>
				</tr>
				<tr>
					<td colspan="2"><button type="button" class="btn btn-info btn-lg btn-block">Scrap data</button></td>
					<td colspan="2"><button type="button" class="btn btn-success btn-lg btn-block">Tambah</button></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td colspan="2" style="text-align: center;">Data telah ditambahkan !</td>
					<td>&nbsp;</td>
				</tr>
			</table>
		</div>
</body>
</html>