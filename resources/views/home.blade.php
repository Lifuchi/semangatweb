
<!DOCTYPE html>
<html>
<head>


    <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Mr+Dafoe" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <link href="{{ asset('css/default.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title> HelpYow </title>

    </head>
  
<body>

  @include('layouts.app')
  @include('layouts.versi2')

  @include('layouts.slide2')
    <script >

        setTimeout(function() {
  $('.inner div').addClass('done'); 
  
  setTimeout(function() {
    $('.inner div').addClass('page'); 
    
    setTimeout(function() {
        $('.pageLoad').addClass('off'); 
      
      $('body, html').addClass('on'); 
      
      
    }, 500)
  }, 500)
}, 1500)
    </script>

</body>
</html>