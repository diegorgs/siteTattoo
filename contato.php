<!doctype html>
<html lang="pt-br">

<?php include ('header.php') ?>

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
                <textarea name="msg" id="msg" class="form-control" placeholder="Escreva um comentario" required rows="6"></textarea>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <button class="btn btn-dark" type="button" onclick="salvar();" data-bs-toggle="modal" data-bs-target="#enviarMensagem">
              Enviar Mensagem <i class="bi bi-reply"></i>
            </button>
          </div>
        </form>
      </div>
    </div>
  </section>
  <?php include("footer.php") ?>

</body>

</html>