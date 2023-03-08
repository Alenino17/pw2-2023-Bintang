<!DOCTYPE html>
<html>
<head>
	<title>Data Pendaftar</title>
	<!-- Load Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h2>Data Pendaftar</h2>
		<table class="table">
			<thead>
				<tr>
					<th>NO</th>
					<th>Nama Lengkap</th>
					<th>Email</th>
					<th>Alamat</th>
					<th>Telepon</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>17</td>
					<td>Bintang</td>
					<td>Bintangalenino@gmail.com</td>
					<td>Jaktim</td>
					<td>+621211806001</td>
				</tr>
				<tr>
					<td>2022</td>
					<td>Ale</td>
					<td>Ale@gmail.com</td>
					<td>LA</td>
					<td>+8094829792799</td>
				</tr>

				<?php

				if (isset($_POST['proses'])){


					$no = $_POST['no'];
					$nama_siswa = $_POST['nama_lengkap'];
					$email = $_POST['email'];
					$alamat = $_POST['alamat'];
					$telepon = $_POST['telepon'];

				echo '<tr>
						<td>'.$_POST['no'].'</td>
						<td>'.$_POST['nama_lengkap'].'</td>
						<td>'.$_POST['email'].'</td>
						<td>'.$_POST['alamat'].'</td>
						<td>'.$_POST['telepon'].'</td>
						
					
					</tr>';
				}



				?>

			</tbody>
		</table>
	</div>
</body>
</html>