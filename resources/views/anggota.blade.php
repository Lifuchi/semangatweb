<!DOCTYPE html>
<html>
<head>
	<title>Help Yow - Anggota</title>
</head>
<body>
	@foreach($anggota as $ang )
			<p>{{$ang->id_anggota}}</p>
			<p>{{$ang->nama_lengkap}}</p>
			<p>{{$ang->tempat_lahir}}</p>
			@endforeach


</body>
</html>