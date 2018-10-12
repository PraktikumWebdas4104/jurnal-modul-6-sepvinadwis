<form method="POST">
	<table>
		<tr>
			<td>NAMA :</td> <td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>NIM :</td> <td><input type="text" name="nim"></td>
		</tr>
		<tr>
			<td>KELAS :</td> 
			<td><input type="radio" name="kls" value="D3MI4101" checked>D3MI4101<br>
			<input type="radio" name="kls" value="D3MI4102" checked>D3MI4102<br>
			<input type="radio" name="kls" value="D3MI4103" checked>D3MI4103<br>
			<input type="radio" name="kls" value="D3MI4104" checked>D3MI4104<br></td>
		</tr>
		<tr><td>JENIS KELAMIN :</td>
			<td><input type="radio" name="jk" value="laki-laki" checked>Laki-laki<br></td>
  			<td><input type="radio" name="jk" value="perempuan">Perempuan<br></td>
		</tr>
		<TR>
			<td>
			HOBI : <br/>
			<input type="checkbox" name="hobi" value="berenang">Berenang<br/>
			<input type="checkbox" name="hobi" value="hiking">Hiking<br/>
			<input type="checkbox" name="hobi" value="diving">Diving<br/>
			<input type="checkbox" name="hobi" value="mancing">Mancing<br/>
			<input type="checkbox" name="hobi" value="nonton film">Nonton Film<br/><br/>
			</td>
		</TR>
		<tr>
			<td> FAKULTAS : </br>
				<select name="fakultas" required>
	 			<option value="fit">FAKULTAS ILMU TERAPAN</option>
	  			<option value="fik">FAKULTAS INDUSTRI KREATIF</option>
	  			<option value="feb">FAKULTAS EKONOMI BISNIS</option>
	  			<option value="fkb">FAKULTAS KOMUNIKASI BISNIS</option>
			</td>
		</tr>
		<tr>
			<td>ALAMAT : </td> <TD><TEXTAREA name="alamat"></TEXTAREA> </TD>
		</tr>
		<tr>
			<td>PASSWORD :</td> <td><input type="password" name="pass"></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" name="submit" value="SEND"></td>
		</tr>
	</table>
</form>


<?php 
	if(isset($_POST['submit'])){
		include"prosesreg.php";
	}
 ?>