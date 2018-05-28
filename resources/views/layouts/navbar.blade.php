
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
							<!-- @auth
							<li><a href="#loginModal" data-toggle="modal" role="button">Logout</a></li>
							@else -->
							<li><a href="#loginModal" data-toggle="modal" role="button">Login</a></li>
							<!-- @endauth -->
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</nav>

<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">LOG IN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        @include('layouts.login')
        <!-- hhhhh -->
      </div>

    </div>
  </div>
</div>

<script src="{{ asset('js/login.js') }}"></script>