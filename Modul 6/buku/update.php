<?php
	$conn= mysqli_connect('localhost', 'root', '','informatika');
	
	$kodebuku=$_POST['kode_buku'];
	$namabuku=$_POST['nama_buku'];
	$submit=$_POST['submit'];
	$update="UPDATE buku set kode_buku ='$kodebuku', nama_buku ='$namabuku' WHERE kode_buku ='$kodebuku' ";
	
	if($submit){
		mysqli_query($conn,$update);
		echo "
		<script>
		alert('data berhasil di update');
		document.location.href='form.php';
		</script>";
		}	
?>