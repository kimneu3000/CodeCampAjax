<?php

if(!@mysql_connect('127.0.0.1', 'root', 'your_password'))
{
    echo "mysql not connected ".mysql_error();
    exit;

}
echo 'great work';

 ?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body>
    <div id="ajax">
      <div id="level_0" class="container">
        <div class="col-12">
          <h1 class="elegantshd">Gimme musical inspiration</h1>
          <button type="button" class="btn btn-secondary">Let's Go</button>
        </div>
      </div>

      <div id="level_1" class="container">
        <div class="row">
          <div class="col-6 col-md-2">
            <button type="button" class="btn btn-secondary">Indie</button>
          </div>
          <div class="col-6 col-md-2">
            <button type="button" class="btn btn-secondary">Pop</button>
          </div>
          <div class="col-6 col-md-2">
            <button type="button" class="btn btn-secondary">Hip-Hop</button>
          </div>
          <div class="col-6 col-md-2">
            <button type="button" class="btn btn-secondary">Metal</button>
          </div>
          <div class="col-6 col-md-2">
            <button type="button" class="btn btn-secondary">Future</button>
          </div>
          <div class="col-6 col-md-2">
            <button type="button" class="btn btn-secondary">Techno</button>
          </div>
          <div class="col-6 col-md-2">
            <button type="button" class="btn btn-secondary">Hard-Rock</button>
          </div>
        </div>
      </div>


      <div class="container">
        <div class="row">
          <div class="col-*-*"></div>
          <div class="col-*-*"></div>
          <div class="col-*-*"></div>
        </div>
        <div class="row">
          ...
        </div>
      </div>






      <div id="level_2">

      </div>


    </div>


  <footer>
    <p>Eine Website von Fabian Rütsche, Kyle Smith und Kim Schläpfer</p>
    <!-- jQuery first, then Tether, then Bootstrap JS, then custom JS... -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
  </footer>
  </body>
</html>
