
	<div align="center" style="margin-left:200px;margin-right:200px;">
		<div>
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
		  		<div class="form-group col-md-12">
		    		<label for="inputAddress">Alamat</label>
			    	<input type="text" class="form-control" id="inputAddress" name="alamat">
			  	</div>
			  	<div class="form-group col-md-12">
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
			  	<div>
                    Sudah Punya Akun? <a href="{{ url('/loginx') }}">Log In</a>
                </div><br>
			  	<button type="submit" class="btn btn-primary">Register</button>
			</form>
		</div><br>
	</div>
