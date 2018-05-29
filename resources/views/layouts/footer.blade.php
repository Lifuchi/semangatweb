<footer id="fh5co-footer" class="fh5co-bg" style="background-image: url(../../../public/img/img_bg_1.jpg);" role="contentinfo">
		<div class="overlay"></div>
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-4 fh5co-widget">
					<h3>Tentang HelpYow.</h3>
					<p>HelpYow merupakan aplikasi web yang dapat mempertemukan pekerja (<em>cleaner</em> dan <em>technician</em>) dengan pengguna jasa.</p>
					<p><a class="btn btn-primary" style="background-color:#0cad9d" href=" {{URL::route('daftarView')}} ">Bergabung sebagai pekerja</a></p>
				</div>
				<div class="col-md-8">					
					<div class="col-md-4 col-sm-4 col-xs-6">
						<h3><a href=" {{URL::route('cleanerView')}} ">Cleaner</a></h3>
						<ul class="fh5co-footer-links">
							<li>ART</a></li>
							<li>Nanny</a></li>
							<li>Baby Sitter</a></li>
						</ul>
					</div>
					
					<div class="col-md-4 col-sm-4 col-xs-6">
						<h3><a href=" {{URL::route('technicianView')}} ">Technician</a></h3>
						<ul class="fh5co-footer-links">
							<li>Elektronika</a></li>
							<li>Mekanika</a></li>
							<li>Handyman</a></li>
						</ul>
					</div>

					<div class="col-md-4 col-sm-4 col-xs-6">
						<h3 style="color: #72ffe2">Pengguna Jasa</h3>
						<ul class="fh5co-footer-links">
							<li><a href="{{url('loginx')}}">Login</a></li>
							<li><a href="{{url('registerx')}}">Register</a></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">Copyright &copy; 2018 HelpYow. All Rights Reserved.</small>
						<!-- <small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a></small> -->
					</p>
					<p>
						<!-- <ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul> -->
					</p>
				</div>
			</div>

		</div>
	</footer>

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
	      </div>

	    </div>
	  </div>
	</div>

<script src="{{ asset('js/login.js') }}"></script>