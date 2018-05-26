
	<nav class="fh5co-nav" role="navigation">
	
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-2">
						<div id="fh5co-logo"><a href="index.html">HELPYOW</a></div>
					</div>
					<div class="col-xs-10 text-right menu-1">
						<ul>
							<li class="active"><a href="index.html">Home</a></li>
							<li><a href='@Url.Action("Cleaner","nav")' class="elements">Cleaner</a></li>
							<li><a href="about.html">Technician</a></li>
							<li class="has-dropdown">
								<a href="blog.html">Cara Kerja</a>
							{{-- 	<ul class="dropdown">
									<li><a href="#">Web Design</a></li>
									<li><a href="#">eCommerce</a></li>
									<li><a href="#">Branding</a></li>
									<li><a href="#">API</a></li>
								</ul> --}}
							</li>
							<li><a href="#loginModal" data-toggle="modal" role="button">Login</a></li>
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