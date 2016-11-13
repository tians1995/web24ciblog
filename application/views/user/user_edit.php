<!DOCTYPE html>
<html>
<head>
	<title>User edit</title>
</head>
<body>
<center> <h3>edit data</h3></center>
<?php foreach($user as $u){ ?>
<form action="<?php echo base_url().'user/update';?>" method="post">

<table style="margin:20px auto;">
<tr>
	<td>Nama</td>
	<td><input 
	value ="<?php echo $u->nama ?>" type="text" name="nama" placeholder="masukan nama anda"></td>
	</tr>
	<tr>
	<td>Email</td>
	<td><input
	value ="<?php echo $u->email ?>"  type="email" name="email" placeholder="masukan email anda"></td>
</tr>
	<tr>
	<td>Password</td>
	<td><input
	value ="<?php echo $u->password ?>" type="password" name="password" placeholder="masukan password anda"></td>
</tr>
<input type="hidden" name="id" value="<?php echo $u->id_user ?>">
	<tr>
	<td><input type="submit" value="edit"></td>
	</tr>
	</form>
	</table>
	

	<?php } ?>
</body>
</html>