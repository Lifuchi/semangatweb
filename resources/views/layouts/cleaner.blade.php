	<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url('/img/clean.jpg');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Cleaner</h1>
							<h2>HelpYow membantu Anda untuk mencari, menemukan, menyalurkan pekerja dalam bidang kebersihan dan rumah tangga: ART(Asisten Rumah Tangga), <em>Baby Sitter</em>, <em>Nanny</em></h2>
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
					<h2>CLEANER</h2>
					<p>Cari pekerja untuk meringankan pekerjaan rumah tangga Anda hanya di HelpYow.</p>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row row-bottom-padded-md">
				<div class="col-md-12">
					<ul id="fh5co-portfolio-list">
						@foreach($cleaner as $clean )
							<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url('/img/{{$clean->id_anggota}}.jpg'); ">
								<a href="{{ URL::to('ProfilPekerja/'.$clean->id_anggota) }}">
									<div class="case-studies-summary">
										<span>{{$clean->nama_lengkap}}</span>
										<h2>{{$clean->pekerjaan}}</h2>
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
