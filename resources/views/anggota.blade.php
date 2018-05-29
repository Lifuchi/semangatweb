<!DOCTYPE html>
<html>
<head>
	<title>Anggota</title>
</head>
<body>
	@foreach($anggota as $ang )
	<h2>{{$ang->id_anggota}}</h2>
	<p>{{$ang->nama_lengkap}}</p>
	@endforeach
</body>
</html>