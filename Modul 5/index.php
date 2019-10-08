<?php
	$conn= mysqli_connect('localhost', 'root', '','informatika');
?>
<html>
<head>
	<title>DATA MAHASISWA</title>
</head>
<body>
	<h3>Data Mahasiswa</h3>
	<a href='form.php'>Tambah Data Mahasiswa</a><br><br>
	<table border='1'>
		<tr>
			<td>NIM</td>
			<td>Nama</td>
			<td>Kelas</td>
			<td>Alamat</td>
			<td colspan=2 align="center">Aksi</td>
		</tr>
		<?php
		$cari = "select * from mahasiswa order by nim";
		$hasil_cari = mysqli_query($conn,$cari);
		//mengambil satu array dari tabel mahasiswa
		//fungsi ini akan mengembalikan nilai false di baris array terakhir
		while ($data = mysqli_fetch_array($hasil_cari)){
			echo"<tr>
				<td>$data[NIM]</td>
				<td>$data[Nama]</td>
				<td>$data[Kelas]</td>
				<td>$data[Alamat]</td>
				<td><a href='update_form.php?NIM=$data[NIM]'>Edit</a></td>
				<td><a href='delete.php?NIM=$data[NIM]'>Delete</a></td>
				</tr>";
		}
		?>
	</table>
	</body>
</html>