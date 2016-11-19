<!DOCTYPE html>
<html>
<head>
	<title>POST TAMBAH</title>
</head>
<body>
<center> <h3>Tambah post baru</h3></center>
<form action="<?php echo base_url().'post/tambah_aksi';?>" method="post">

<table style="margin:20px auto;">
<tr>
	<td>Judul</td>
	<td><input type="text" name="judul" ></td>
	</tr>
	<tr>
	<td>konten</td>
	<td><textarea name="konten"></textarea></td>
</tr>
	<tr>
	<td>tanggal post</td>
	<td><input type="date" name="tgl_post"></td>
</tr>
	<tr>
	<td><input type="submit" value="tambah"></td>
	</tr>
	</table>
	</form>
</body>
</html>