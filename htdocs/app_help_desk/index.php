<?php
  if (isset($_GET['login']) && $_GET['login'] == 'error2'){
  ?>
  <script>
    alert("Você precisa realizar login para acessar essa sessão.")
  </script>
<?php } ?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-login {
        padding: 30px 0 0 0;
        width: 350px;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Login
            </div>
            <div class="card-body">
              <!-- Action: script que será executado -->
              <!-- method="post" evita que os dados sejam passados pela URL e fiquem expostos -->
              <form action="validalogin.php" method="post">
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="E-mail" name="email">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" placeholder="Senha" name="senha">
                </div>
                <?php
                if (isset($_GET['login']) && $_GET['login'] == 'error'){
                ?>
                <div class="text-danger">
                  Usuário ou senha inválido(s).
                </div>
                <?php } ?>
                <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
              </form>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>