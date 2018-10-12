<?php 
	if(isset($_POST['submit'])){
		include("koneksi.php");
		$nama = $_POST['nama'];
		$nim = $_POST['nim'];
		$kelas=$_POST['kls'];
		$jk = $_POST['jk'];
		$hobi = $_POST['hobi'];
		$fakultas = $_POST['fakultas'];
		$alamat=$_POST['alamat'];
		$pass=$_POST['pass'];
		$status=true;

		

		if (!preg_match('/^[a-z A-Z]$/i', $nama) and strlen($nama)>35) {
			echo("Nama harus huruf dengan maksimal 35 karakter");
			$status=false;
		}

		if (!is_int($nim) and (strlen($nim)<10) or (strlen($nim)>10)) {
			echo("NIM harus angka dan 10 karakter");
			$status=false;
		}

		if($status){
			$sql=mysqli_query($koneksi,"INSERT INTO `datauser`(`Nama`,`Nim`,`Kelas`,`Jenis Kelamin',`Hobi`,`Fakultas`,`Alamat`,`Password`)
				VALUES ($nama, '$nim','$kelas', '$jk', '$hobi', '$fakultas', '$alamat','$pass')");
		}
	}
 ?>