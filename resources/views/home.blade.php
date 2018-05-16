
<!DOCTYPE html>
<html>
<head>
    <title> HelpYow </title>
    <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Mr+Dafoe" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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