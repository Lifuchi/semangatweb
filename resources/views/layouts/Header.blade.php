<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(img/bg_tiga.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							
							<h1>HelpYow make your life easier</h1>
							@if(Session::has('name'))
							<a href="{{ URL::to('CaraKerja') }} "><p class="btn btn-info "> Cara Kerja</p></a>
							@else
							<a href="{{ url('registerx') }} "><p class="btn btn-info "> Daftar Akun Pengguna</p></a>
							@endif
						</div>
					</div>
				</div>
			</div>
		</div>
</header>