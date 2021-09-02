<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <title>Cadastro de Clientes</title>
  </head>
  <body>
      <div class="container">
        <div class='row'>
          <div class='col'>
            <h1>Cadastro de clientes</h1>
            <form action="cadasto_script.php" method="POST">
            <div class="form-group">
                <label for="nome">Nome Completo</label>
                <input type="text" class="form-control" name='nome'>
            </div>
            <div class="from-group">
                <label for="cpf">CPF</label>
                <input type="text" class="form-control" name='cpf'>
            </div>
            <div class="form-group">
                <label for="onboarding">Onboarding</label>
                <input type="text" class="form-control" name='onboarding'><br>
            </div>
            <button type="submit" class="btn btn-success">Enviar</button>
            </form>
          </div>
        </div>
      </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
     <!--
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
  </body>
</html>
