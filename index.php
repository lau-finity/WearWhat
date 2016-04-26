<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Pocket Forecaster</title>
  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" 
  integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" 
  integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
  
  <link rel="stylesheet" type="text/css" href="css/custom.css">
</head>

<body> 

  <div class="container">

    <div class="row">

      <div class="col-md-6 col-md-offset-3 center">

          <h1 class="center black">Pocket Forecaster</h1>

          <p class="lead center black">Enter your city below to get forecast for the weather.</p>

          <form>

            <div class="form-group">

              <input type="text" class="form-control" name="city" id="city" placeholder="Eg. London, Paris, San Francisco, etc."/>

            </div>

            <button id="findMyWeather" class="btn btn-success btn-lg">Find My Weather</button>

          </form>

          <div id="success" class="alert alert-success" >Success!</div>
          <div id="fail" class="alert alert-danger">Could not find weather for that city. Please try again.</div>
          <div id="noCity" class="alert alert-danger">Please enter a city!</div>

      </div>      

    </div>

  </div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" 
  integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

  <script type="text/javascript" src="js/custom.js"></script>
</body>
</html>