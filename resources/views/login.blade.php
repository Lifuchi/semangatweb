<!DOCTYPE html>
<html>
<head>
    <title>HelpYow - Login</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <style type="text/css" style="background-color:#deeaee; width: 100%"></style>
</head>
<body>
    <div align="center">
        <div class="col-md-4">
            <form action="#" method="post">
                <div>
                    <img src="helpyow.png" alt="Logo">
                    <h3>LOG IN</h3><br>
                </div>
                <div class="form-group">
                    <!-- <label for="inputEmail">Email Address</label> -->
                    <input type="text" class="form-control" id="inputUname" aria-describedby="unameHelp" placeholder="Enter Username">
                    <small id="unameHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <!-- <label for="inputPassword">Password</label> -->
                    <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                </div><br>
                <div>
                    Not Registered yet? <a href="{{ url('reg') }}">Register Now</a>
                </div><br>
                <button type="submit" class="btn btn-primary">Log In</button>
            </form>
        </div>
    </div>
</body>
</html>