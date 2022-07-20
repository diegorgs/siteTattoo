<!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500&display=swap" rel="stylesheet">
  <!-- Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/estilo.css">
  <title>Inkaos Tattoo</title>
</head>

<body>
  <?php include("nav.php") ?>
  <section id="contato" class="mt-5 pt-2">
      <div class="container fontOld text-dark bg-light pt-5 mt-5 my-5">
        <div class="card">
          <form class="needs-validation bg-light" novalidate method="post" action="./php/enviar-email.php">
            <div class="card-header">
              <h1>Contato para orçamentos</h1>
            </div>
            <div class="card-body">
              <div class="row g-3">
                <div class="col-md-5">
                  <label for="nome" class="form-label">Nome</label>
                  <input id="nome" name="nome" class="form-control" placeholder="Informe seu nome" type="text" required>
                  <div class="valid-feedback">Ok</div>
                  <div class="invalid-feedback">Informe o seu nome</div>
                </div>
                <div class="col-md-5">
                  <label for="email" class="form-label">Email </label>
                  <input type="email" id="email" name="email" class="form-control" placeholder="Informe email" required>
                  <div class="valid-feedback">Ok</div>
                  <div class="invalid-feedback">Informe seu email</div>
                </div>
                <div class="my-2 col-5">
                  <label for="Tatuadores" class="form-label">Tatuadores</label>
                  <select class="form-select" name="Tatuadoress" id="Tatuadoress">
                    <option>Escolha um Tatuador</option>
                    <option value="1">VIC</option>
                    <option value="2">HIRAM</option>
                    <option value="3">CARLOS</option>
                  </select>
                </div>
                <div class="col-md-12">
                  <label for="comentario" class="form-label">Mensagem</label>
                  <textarea name="msg" id="msg" class="form-control" placeholder="Escreva um comentario"
                    required rows="6"></textarea>
                </div>
              </div>
            </div>
            <div class="card-footer">
              <button class="btn btn-dark" type="button" onclick="salvar();" data-bs-toggle="modal"
                data-bs-target="#enviarMensagem">
                Enviar Mensagem <i class="bi bi-reply"></i>
              </button>
            </div>
          </form>
        </div>
      </div>
    </section>
    <?php include("footer.php") ?>
  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>