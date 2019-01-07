<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="{{route('mahasiswa-update', $data->id)}}" method="POST">
		@csrf
		<p><label>NIM</label><input type="text" name="NIM" value="{{$data->NIM}}"></p>
		<p><label>Nama</label><input type="text" name="nama" value="{{$data->nama}}"></p>
		<p><label>kelas</label><input type="text" name="kelas" value="{{$data->kelas}}"></p>
		<p><label>tlp</label><input type="text" name="tlp" value="{{$data->tlp}}"></p>
		<p><label>email</label><input type="text" name="email" value="{{$data->email}}"></p>
		<p><label>alamat</label><input type="text" name="alamat" value="{{$data->alamat}}"></p>
		<input type="submit" name="submit" value="Simpan">
	</form>
</body>
</html>