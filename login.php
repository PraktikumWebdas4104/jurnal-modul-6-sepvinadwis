<form>
	<table>
		<tr>
			<td>USERNAME :</td> <td><input type="text" name="nim"></td>
		</tr>
		<tr>
			<td>PASSWORD :</td> <td><input type="password" name="pass"></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" name="submit" value="SEND"></td>
			<td><button><a href="data.php">REGISTRASI</a></button></td>
		</tr>
	</table>
</form>


<?php 
	if(isset($_POST['submit'])){
		session_start();
		include"koneksi.php";
		$nim=$_POST['nim'];
		$password=$_POST['pass'];
		$sql="select nim, sandi FROM datauser where nim='$nim'";

		$qry=mysqli_query($koneksi,$sql);
		$row=mysqli_fetch_row($qry);
		if($nim==$row[0]){
			if($password==$row[1]){
				$_SESSION["berhasil_log"]=1;
				$_SESSION["username"]=$row[0];
				$_SESSION["pass"]=1;
				echo "Anda berhasil LOGIN";

			}
			else{
				echo"Password yang Anda masukkan SALAH";
			}
		}
		else{
			echo"NIM yang Anda masukka SALAH";
		}
		
	}
 ?>