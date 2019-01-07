<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="{{route('mahasiswa-store')}}" method="POST">
		@csrf
		<p><label>NIM</label><input type="text" name="NIM"></p>
		<p><label>Nama</label><input type="text" name="nama"></p>
		<p><label>kelas</label><input type="text" name="kelas"></p>
		<p><label>tlp</label><input type="text" name="tlp"></p>
		<p><label>email</label><input type="text" name="email"></p>
		<p><label>alamat</label><input type="text" name="alamat"></p>

		<p><input type="submit" name="submit" value="Simpan"></p> 	

	</form>
</body>
</html>