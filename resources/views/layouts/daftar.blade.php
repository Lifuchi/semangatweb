
	<div align="center" style="margin-left:200px;margin-right:200px;">
		@if ($errors->any())
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif
            <form method="post" action="{{ url('/daftarPost') }}" enctype="multipart/form-data">
            	{{ csrf_field() }}
                <div>
                    <h3>Ayo Bergabung dengan HelpYow</h3><br>
                </div>
                <div class="form-group col-md-8">
		    		<label for="namafull">Nama Lengkap</label>
		      		<input type="text" class="form-control" id="namafull" placeholder="Nama Anda" name="nama_lengkap">
			  	</div>
			  	<div class="form-group col-md-4">
			      		<label for="inputGender">Jenis Kelamin</label>
			      		<select class="form-control" name="jenis_kelamin">
			        		<option selected>Pilih...</option>
			        		<option value="P">Perempuan</option>
			        		<option value="L">Laki - Laki</option>
			      		</select>
			    </div>
                <div class="form-row">
		    		<div class="form-group col-md-8">
		     			<label for="tempatlhr">Tempat Lahir</label>
		      			<input type="text" class="form-control" id="tempatlhr" name="tempat_lahir" >
		    		</div>
		    		<div class="form-group col-md-4">
		      			<label for="tgllhr">Tanggal Lahir</label>
		      			<input type="text" class="form-control" id="tgllhr" name="tanggal_lahir" placeholder="YYYY-MM-DD">
		    		</div>
		  		</div>
		  		<div class="form-row">
		  			<div class="form-group col-md-8">
			    		<label for="inputEmailReg">Email</label>
			      		<input type="email" class="form-control" id="inputEmailReg" placeholder="Email" name="email">
			    	</div>
			    	<div class="form-group col-md-4">
				    	<label for="inputTelp">Telepon</label>
				    	<input type="text" class="form-control" id="inputTelp" name="telepon">
				  	</div>
		  		</div>
		  		<div class="form-group col-md-8">
		    		<label for="inputAddress">Alamat</label>
			    	<input type="text" class="form-control" id="inputAddress" name="alamat">
			  	</div>
			  	<!-- <div class="form-row"> -->
			    	<div class="form-group col-md-4">
				    	<label for="inputGender">Divisi</label>
			      		<select class="form-control" name="divisi">
			        		<option selected>Pilih...</option>
			        		<option value="nanny">Nanny</option>
			        		<option value="art">Asisten Rumah Tangga</option>
			        		<option value="babysitter">Baby Sitter</option>
			        		<option value="elektronika">Elektronika</option>
			        		<option value="Mekanika">Mekanika</option>
			        		<option value="handyman">Handyman</option>
			        		
			      		</select>
				  	</div>
		  		<!-- </div> -->
				<div class="form-row">
			    	<div class="form-group col-md-4">
			      		<label for="inputPrice">Harga</label>
			      		<input type="text" class="form-control" name="harga">
			    	</div>
			    	<div class="form-group col-md-4">
						<label for="exampleFormControlFile1">Upload CV</label>
					    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="cv" placeholder="pdf">
					</div>
			    	<div class="form-group col-md-4">
			      		<label for="inputTime">Waktu</label>
			      		<input type="text" class="form-control" name="waktu" placeholder="HH:MM">
			    	</div>
			    	
			  	</div>
				<br><br><br>
				<div>
			  		<button type="submit" class="btn btn-primary">Daftar</button>
			  	</div>
            </form>
        </div>
        <br>
    </div>