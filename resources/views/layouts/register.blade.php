<!DOCTYPE html>
<html>
<head>
	<title>HelpYow - Register</title>
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		body{
			background-color:#d5f4e6;
		}
	</style>
</head>
<body>
	<div align="center">
		<div class="col-sm-9 col-md-8">
			@if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
			<form action="{{ url('/registerPost') }}" method="post">
				{{ csrf_field() }}
				<div>
                    <img src="img/helpyow.png" alt="Logo">
                    <h3>REGISTER</h3>
                </div>
		  		<div class="form-row">
		    		<div class="form-group col-md-6">
		     			<label for="inputEmailReg">Email</label>
		      			<input type="email" class="form-control" id="inputEmailReg" placeholder="Email" name="email">
		    		</div>
		    		<div class="form-group col-md-6">
		      			<label for="inputPasswordReg">Password</label>
		      			<input type="password" class="form-control" id="inputPasswordReg" placeholder="Password" name="password">
		    		</div>
		  		</div>
		  		<div class="form-row">
		    		<div class="form-group col-md-6">
		     			<label for="fullName">Nama Lengkap</label>
		      			<input type="text" class="form-control" id="fullName" placeholder="Nama Anda" name="name">
		    		</div>
		    		<div class="form-group col-md-6">
		      			<label for="userName">User Name</label>
		      			<input type="text" class="form-control" id="userName" placeholder="username" name="username">
		    		</div>
		  		</div>
		  		<div class="form-group">
		    		<label for="inputAddress">Alamat</label>
			    	<input type="text" class="form-control" id="inputAddress" name="alamat">
			  	</div>
			  	<div class="form-group">
			    	<label for="inputTelp">Telepon</label>
			    	<input type="text" class="form-control" id="inputTelp" name="telepon">
			  	</div>
				<div class="form-row">
			    	<div class="form-group col-md-4">
			      		<label for="inputCity">Kota</label>
			      		<input type="text" class="form-control" id="inputCity" placeholder="Surabaya" name="kota">
			    	</div>
			    	<div class="form-group col-md-8">
			      		<label for="inputState">Provinsi</label>
			      		<select id="inputState" class="form-control" name="provinsi">
			        		<option selected>Pilih...</option>
			        		<option>Jawa Timur</option>
			        		<option>Jawa Tengah</option>
			        		<option>Jawa Barat</option>
			        		<option>...</option>
			      		</select>
			    	</div>
			  	</div>
			  	<div class="form-group">
			    	<div class="form-check">
			      		<input class="form-check-input" type="checkbox" id="gridCheck">
			      		<label class="form-check-label" for="gridCheck">Ingat Saya</label>
			    	</div>
			  	</div>
			  	<div>
                    Sudah Punya Akun? <a href="{{ url('/logini') }}">Log In</a>
                </div><br>
			  	<button type="submit" class="btn btn-primary">Register</button>
			</form>
		</div><br>
	</div>
</body>
</html>