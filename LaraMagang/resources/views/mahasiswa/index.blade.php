<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.container{
			width: 75%;
			margin: auto;
		}
	</style>
</head>
<body>
<div class="conatiner">
	<a href="{{url('create-mahasiswa')}}">+ tambah data</a>
	<table>
		<tr>
			<td>id</td>
			<td>nim</td>
			<td>nama</td>
			<td>kelas</td>
			<td>tlp</td>
			<td>email</td>
			<td>alamat</td>
			<td>Option</td>
		</tr>
		@foreach ($data as $value)
		<tr>
			<td>{{$value->id}}</td>
			<td>{{$value->NIM}}</td>
			<td>{{$value->nama}}</td>
			<td>{{$value->kelas}}</td>
			<td>{{$value->tlp}}</td>
			<td>{{$value->email}}</td>
			<td>{{$value->alamat}}</td>
			<td><a href="{{url('edit-mahasiswa', $value->id)}}">Edit</a>

				<a href="{{route('mahasiswa-delete', $value->id)}}">Delete</a>
			</td>

		</tr>

		@endforeach
	</table>
</div>
</body>
</html>