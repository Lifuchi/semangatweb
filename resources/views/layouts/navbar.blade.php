
	<nav class="fh5co-nav" role="navigation">
	
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-2">
						<div id="fh5co-logo"><a href="/">HELPYOW</a></div>
					</div>
					<div class="col-xs-10 text-right menu-1">
						<ul>
							<li><a href="/">Home</a></li>
							<li><a href=" {{URL::route('cleanerView')}} ">Cleaner</a></li>
							<li><a href="{{URL::route('technicianView')}}">Technician</a></li>
							<li class="has-dropdown">
								<a href="{{URL::route('caraKerjaView')}}">Cara Kerja</a>
							<!-- {{-- 	<ul class="dropdown">
									<li><a href="#">Web Design</a></li>
									<li><a href="#">eCommerce</a></li>
									<li><a href="#">Branding</a></li>
									<li><a href="#">API</a></li>
								</ul> --}} -->
							</li>
							@auth
							<li><a href="{{url('logout')}}">LogOut</a></li>
							@endauth

							@guest
							<li><a href="{{url('logini')}}">Login</a></li>
							@endguest
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</nav>

