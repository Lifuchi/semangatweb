<!DOCTYPE html>
<html>
<head>
	<title>HelpYow - Register</title>
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div align="center" style="background-color:#d5f4e6;">
		<div class="col-sm-9 col-md-8">
			<form action="#" method="post">
				<div>
                    <img src="helpyow.png" alt="Logo">
                    <h3>REGISTER</h3>
                </div>
		  		<div class="form-row">
		    		<div class="form-group col-md-6">
		     			<label for="inputEmailReg">Email</label>
		      			<input type="email" class="form-control" id="inputEmailReg" placeholder="Email">
		    		</div>
		    		<div class="form-group col-md-6">
		      			<label for="inputPasswordReg">Password</label>
		      			<input type="password" class="form-control" id="inputPasswordReg" placeholder="Password">
		    		</div>
		  		</div>
		  		<div class="form-row">
		    		<div class="form-group col-md-6">
		     			<label for="fullName">Full Name</label>
		      			<input type="text" class="form-control" id="fullName" placeholder="Your Name">
		    		</div>
		    		<div class="form-group col-md-6">
		      			<label for="userName">User Name</label>
		      			<input type="text" class="form-control" id="userName" placeholder="username">
		    		</div>
		  		</div>
		  		<div class="form-group">
		    		<label for="inputAddress">Address</label>
			    	<input type="text" class="form-control" id="inputAddress"">
			  	</div>
			  	<div class="form-group">
			    	<label for="inputTelp">Telephone</label>
			    	<input type="text" class="form-control" id="inputTelp">
			  	</div>
				<div class="form-row">
			    	<div class="form-group col-md-4">
			      		<label for="inputCity">City</label>
			      		<input type="text" class="form-control" id="inputCity" placeholder="Surabaya">
			    	</div>
			    	<div class="form-group col-md-8">
			      		<label for="inputState">State</label>
			      		<select id="inputState" class="form-control">
			        		<option selected>Choose...</option>
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
			      		<label class="form-check-label" for="gridCheck">Check me out</label>
			    	</div>
			  	</div>
			  	<div>
                    Already Registered? <a href="{{ url('login') }}">Log In</a>
                </div><br>
			  	<button type="submit" class="btn btn-primary">Register</button>
			</form>
		</div><br>
	</div>
</body>
</html>