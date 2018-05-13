<!DOCTYPE html>
<html>
<head>
	<title>HelpYow - Join Us</title>
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
	<div align="center">
        <div class="col-md-8">
            <form action="#" method="post">
                <div>
                    <h3>Ayo Bergabung dengan HelpYow</h3><br>
                </div>
                <div class="form-group">
		    		<label for="namafull">Nama Lengkap</label>
		      		<input type="text" class="form-control" id="namafull" placeholder="Nama Anda">
			  	</div>
                <div class="form-row">
		    		<div class="form-group col-md-7">
		     			<label for="tempatlhr">Tempat Lahir</label>
		      			<input type="text" class="form-control" id="tempatlhr" placeholder="Nama Anda">
		    		</div>
		    		<div class="form-group col-md-5">
		      			<label for="tgllhr">Tanggal Lahir</label>
		      			<input type="text" class="form-control" id="tgllhr" placeholder="username">
		    		</div>
		  		</div>
		  		<div class="form-group">
		  			<div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
					  	<label class="form-check-label" for="inlineRadio1">Perempuan</label>
					</div>
					<div class="form-check form-check-inline">
					  	<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
					  	<label class="form-check-label" for="inlineRadio2">Laki-Laki</label>
					</div>
		  		</div>
		  		<div class="form-row">
		  			<div class="form-group col-md-8">
			    		<label for="inputEmailReg">Email</label>
			      		<input type="email" class="form-control" id="inputEmailReg" placeholder="Email">
			    	</div>
			    	<div class="form-group col-md-4">
				    	<label for="inputTelp">Telepon</label>
				    	<input type="text" class="form-control" id="inputTelp">
				  	</div>
		  		</div>
		  		<div class="form-group">
		    		<label for="inputAddress">Alamat</label>
			    	<input type="text" class="form-control" id="inputAddress"">
			  	</div>
			  	
				<div class="form-row">
			    	<div class="form-group col-md-4">
			      		<label for="inputCity">Kota</label>
			      		<input type="text" class="form-control" id="inputCity" placeholder="Surabaya">
			    	</div>
			    	<div class="form-group col-md-8">
			      		<label for="inputState">Provinsi</label>
			      		<select id="inputState" class="form-control">
			        		<option selected>Pilih...</option>
			        		<option>Jawa Timur</option>
			        		<option>Jawa Tengah</option>
			        		<option>Jawa Barat</option>
			        		<option>...</option>
			      		</select>
			    	</div>
			  	</div>
				<div class="form-group">
					<label for="exampleFormControlFile1">Upload CV</label>
				    <input type="file" class="form-control-file" id="exampleFormControlFile1">
				</div>
			  	<div class="form-group">
			    	<div class="form-check">
			      		<input class="form-check-input" type="checkbox" id="gridCheck">
			      		<label class="form-check-label" for="gridCheck">Ingat Saya</label>
			    	</div>
			  	</div>
			  	<div>
                    Sudah Punya Akun? <a href="{{ url('login') }}">Log In</a>
                </div><br>
			  	<button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
        <br>
    </div>
</body>
</html>