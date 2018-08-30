<!DOCTYPE <!DOCTYPE html>
<html>
<head>
	<title>Form Edit</title>
</head>
<body>
	<table>
		<form method="post" action="<?php echo base_url('index.php/helloworld/edit_data')?>">
		<tr>
			<td>Nomor Induk</td>
			<td>:</td>
			<td><input required type="text" name="nim" placeholder="Masukan nomor induk" value="<?php echo $mhs['no_induk'] ?>" readonly></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama" placeholder="Masukan Nama Anda.." value="<?php echo $mhs['nama'] ?>"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><textarea style="resize: none;" name="alamat"><?php echo $mhs['alamat'] ?></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><button type="submit" name="submit">Update</button></td>
		</tr>
		</form>
	</table>
</body>
</html>