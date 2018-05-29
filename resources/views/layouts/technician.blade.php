	<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(img/teknisi.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>TECHNICIAN</h1>
							<h2>HelpYow membantu Anda untuk mencari, menemukan, menyalurkan pekerja dalam bidang teknik: Teknisi Elektronika, Teknisi Mekanika, <em>Handyman</em></h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<section>
	<div id="fh5co-gallery">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2>TECHNICIAN</h2>
					<p>Cari pekerja untuk meringankan pekerjaan rumah tangga Anda hanya di HelpYow.</p>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row row-bottom-padded-md">
				<div class="col-md-12">
					<ul id="fh5co-portfolio-list">
						@foreach($teknisi as $tech )
							<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(img/{{$tech->id_anggota}}.jpg); ">
								<a href="{{ url('ProfilPekerja/'.$tech->id_anggota) }}">
									<div class="case-studies-summary">
										<span>{{$tech->nama_lengkap}}</span>
										<h2>{{$tech->pekerjaan}}</h2>
									</div>
								</a>
							</li>
						@endforeach
					</ul>		
				</div>
			</div>
		</div>
	</div>
	</section>
