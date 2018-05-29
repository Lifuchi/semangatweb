	<section>
	<div id="fh5co-gallery">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2>PROFIL PEKERJA</h2>
					<p>Informasi detail tentang pekerja yang ada di HelpYow.</p>
				</div>
			</div>
		</div>
		<div class="container-fluid" >
			<div class="row row-bottom-padded-md">
				<div class="col-md-12">
					<ul id="fh5co-portfolio-list">
						@foreach($anggota as $ang )
						<!-- <div class="row"> -->
							<li class="one-third col-md-7 animate-box" data-animate-effect="fadeIn" style="background-image: url(img/{{$ang->id_anggota}}.jpg);"></li>
									<div class="col-md-2 animate-box" style="margin-left: 80px;">
										<br>
										<p>Nama</p>
										<p>Pekerjaan</p>
										<p>Tempat Lahir</p>
										<p>Tanggal Lahir</p>
										<p>Jenis Kelamin</p>
										<p>Alamat</p>
										<p>Tarif</p>
										<p>Durasi</p>										
									</div>
									<div class="col-md-3 animate-box">
										<br>
										<p>: {{$ang->nama_lengkap}}</p>
										<p>: {{$ang->pekerjaan}}</p>
										<p>: {{$ang->tempat_lahir}}</p>
										<p>: {{$ang->tanggal_lahir}}</p>
										<p>: {{$ang->jenis_kelamin}}</p>
										<p>: {{$ang->alamat}}</p>
										<p>: {{$ang->harga}}</p>
										<p>: {{$ang->waktu}}</p>										
									</div>
						<!-- </div>	 -->	
						@endforeach
					</ul>		
				</div>
			</div>
			
		</div>
	</div>
	</section>
