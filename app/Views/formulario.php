<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  </head>
  <body>




    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>





<form action="formreceivedata" method="post">
  <div class="form-group">
    <div class="col-md-4 mb-3">
      <label for="marcaInputLabel">Marca:</label>
      <input type="text" class="form-control" id="marcaInputLabel" name="marca">
    </div>
  </div>
  <div class="form-group">
    <div class="col-md-4 mb-3">
      <label for="modeloInputLabel">Modelo:</label>
      <input type="text" class="form-control" id="modeloInputLabel" name = "modelo">
    </div>
  </div>
  <div class="form-group">
    <div class="col-md-4 mb-3">
      <label for="KmInputLabel">Km:</label>
      <input type="number" class="form-control" id="KmInputLabel" name="km">
    </div>
  </div>
  <div class="form-group">
    <div class="col-md-4 mb-3">
     <label for="AnoInputLabel">Ano:</label>
     <input type="number" class="form-control" id="AnoInputLabel" name="ano">
    </div>
  </div>

  <div class="form-group">
    <div class="col-md-4 mb-3">
      <label for="PrecoInputLabel">Preco:</label>
      <input type="number" class="form-control" id="PrecoInputLabel" name="preco">
    </div>
  </div>


  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>




  </body>
</html>