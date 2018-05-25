
<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-default navbar-fixed-top my-navbar" style="margin-bottom: 0px; z-index: 20" id="mainNav">
  <a class="navbar-brand" href="#">HelpYow</a>
  <button class="navbar-toggler js-scroll-trigger float-xs-right navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"  aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Cleaner</a>
      </li>
      <li class="nav-item">
        <a class="nav-link js-scroll-trigger" href="#">Technician</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#loginModal" role="button" data-toggle="modal">Join Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link js-scroll-trigger" href="#">Contact Us</a>
      </li>
    </ul>
{{--     <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" placeholder="Search" type="text">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form> --}}
  </div>
</nav>


<!-- Login modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
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