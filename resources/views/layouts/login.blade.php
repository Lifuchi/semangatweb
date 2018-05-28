
<div align="center">
          <div class="col-md-12">
            @if(\Session::has('alert'))
                <div class="alert alert-danger">
                    <div>{{Session::get('alert')}}</div>
                </div>
            @endif
            @if(\Session::has('alert-success'))
                <div class="alert alert-success">
                    <div>{{Session::get('alert-success')}}</div>
                </div>
            @endif
            <form action="{{ url('/loginPost') }}" method="post">
              {{ csrf_field() }}
              <div>
                <img src="img/helpyow.png" alt="Logo">
                <h3>LOG IN</h3><br>
              </div>
              <div class="form-group">
                <!-- <label for="inputEmail">Email Address</label> -->
                <input type="text" class="form-control" name="username" aria-describedby="unameHelp" placeholder="Enter Username">
                <small id="unameHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                <!-- <label for="inputPassword">Password</label> -->
                <!-- hhhh -->
                <!-- jsdhjkashsajhd -->
                <input type="password" class="form-control" name="password" placeholder="Password">
              </div><br>
              <div>
                Belum Punya Akun? <a href="{{ url('registeri') }}">Register Sekarang</a>
              </div><br>
              <button type="submit" class="btn btn-primary">Log In</button>
            </form>
          </div>
    </div>

