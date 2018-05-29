
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
              <div class="row">
              <div class="form-group" style="margin-left:300px;margin-right:300px;">
                <!-- <label for="inputEmail">Email Address</label> -->
                <input type="text" class="form-control" name="username" aria-describedby="unameHelp" placeholder="Enter Email">
                <!-- <small id="unameHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
              </div>
              <br>
              <div class="row">
              <div class="form-group" style="margin-left:300px;margin-right:300px;">
                <!-- <label for="inputPassword">Password</label> -->
                <!-- hhhh -->
                <!-- jsdhjkashsajhd -->
                <input type="password" class="form-control" name="password" placeholder="Password">
              </div>
              </div><br>
              <div>
                Belum Punya Akun? <a href="{{ url('registerx') }}">Register Sekarang</a>
              </div><br>
              <button type="submit" class="btn btn-primary">Log In</button>
            </form>
            <br>
          </div>
    </div>

