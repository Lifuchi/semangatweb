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
		<div class="container-fluid">
			<div class="row row-bottom-padded-md">
				<div class="col-md-12">
					<ul id="fh5co-portfolio-list">
						<!-- @foreach($anggota as $ang )
							<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url('/img/{{$ang->id_anggota}}.jpg'); ">
								<a href="#">
									<div class="case-studies-summary">
										<span>{{$ang->nama_lengkap}}</span>
										<h2>{{$ang->pekerjaan}}</h2>
									</div>
								</a>
							</li>
						@endforeach -->
					</ul>		
				</div>
			</div>
			@if(Session::has('name'))
			<a href="{{ url('booking/'.$clean->id_anggota) }}" role="button" value=><p class="btn btn-info"> Booking</p></a>
			@endif
		</div>
	</div>
	</section>
