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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/estilo.css">
  <title>Inkaos Tattoo</title>
</head>

<body class="bg-light">
  <?php include("nav.php") ?>
  <main>
    <div class="pt-lg-1 pt-5 mt-lg-1 mt-4 bg-dark">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/carousel11.png" class="d-sm-block d-none w-100 op bg-painel">
            <img src="img/carousel111.png" class="d-sm-none w-100 bg-painel">
            <div class="carousel-caption my-5 mb-3 mb-md-5 py-5"> <br>
              <h1 class="py-2 my-0">Tatuadores profissionas com projetos exclusivo</h1>
              <h4 class="my-2 py-0">Venha nos conhecer em Sao Jose dos Campos - SP.</h4>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/carousel22.png" class="d-sm-block d-none w-100 op bg-painel">
            <img src="img/carousel222.png" class="d-sm-none w-100 bg-painel">
            <div class="carousel-caption my-5 mb-3 mb-md-5 py-5">
              <h1 class="py-2 my-0">Todos os estilos de tattoo em um só estúdio</h1>
              <h4 class="my-2 py-0">Realismo - Mangá - Geometria - Oriental - Blackwork.</h4>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/carousel33.png" class="d-sm-block d-none w-100 op bg-painel">
            <img src="img/carousel333.png" class="d-sm-none w-100 bg-painel">
            <div class="carousel-caption my-5 mb-3 mb-md-5 py-5">
              <h1 class="py-2 my-0">Há uma década oferecendo serviços de alta qualidade</h1>
              <h4 class="my-2 py-0">Tatuadores Experientes para Realizar a Tatuagem de Seus Sonhos.</h4>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
        <span id="sobrenos"></span>
      </div>
    </div>

    <section id="sobre">
      <div class="text-center container color-exclusive fontOld my-5">
        <h5 class="text-dark">Apresentando</h5>
        <h1>Best Studio Tattoo</h1>
        <div>
          <img src="img/logotattoo.png" width="180px"> <br>
          <br>
        </div>
        <div class="text-dark text-center mb-md-4 container">
          <h5>O tatuador é uma pessoa cuja ocupação é
            principalmente tatuar <br class="d-md-block d-none"> o estilo do cliente
            e tatuar a pele de cliente
            e de rapaz. O local de trabalho <br class="d-md-block d-none"> do tatuador é
            conhecido como "Tattoo" ou "tatuagem" sa riscar<br> também
            são locais de interação social e discurso sampa em público. <br class="d-md-block d-none">
            Em alguns casos, tatuadores também são fóruns públicos.
          </h5>
        </div>
      </div>
    </section>

    <section id="Tatuadores"> <br>
      <h1 class="text-center text-dark"><strong>Artistas</strong> </h1> <br>
      <div class="container text-dark pt-4 fontOld">
        <div class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col">
            <div class="card h-100">
              <img src="img/tattoocard1.jpg" class="card-img-top w-100" alt="...">
              <div class="card-body bg-black text-light text-center">
                <h3 class="card-title text-center"><strong>VIC VIVID</strong></h3>
                <p class="card-text">This is a wider card with supporting text below as </p> <br>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="img/tattoocard2.jpg" class="card-img-top w-100" alt="...">
              <div class="card-body bg-black text-light text-center">
                <h3 class="card-title text-center"><strong>HIRAM CASAS </strong></h3>
                <p class="card-text">This is a wider card with supporting text below as </p> <br>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="img/tattoocard3.jpg" class="card-img-top w-100" alt="...">
              <div class="card-body bg-black text-light text-center">
                <h3 class="card-title text-center"> <strong>JOSE CARLOS</strong> </h3>
                <p class="card-text">This is a wider card with supporting text below as
                </p> <br>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="destaque" class="py-4">
      <div class="container-fluid mt-5 pt-5 fontOld bg-destaque">
        <div class="pt-5 mt-5"> 
          <h1 class="text-center mt-4">Fazer você bem
            são os quesitos determinantes<br> de um
            tatuador de sucesso.
          </h1>
          <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 m-5 p-5 pt-1 mt-md-0">
              <div class="m-md-5 my-md-0 p-md-5">
              <button class="btn btn-outline-light p-3" type="button">Orçamento</button>
              </div>
            </div>
            <div class="col-md-4"></div>
          </div>
        </div>
      </div>
    </section>


    <section id="contato">
      <div class="container fontOld text-dark bg-light pt-5 my-5">
        <div class="card">
          <form class="needs-validation bg-light" novalidate method="post" action="envio.html">
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
                  <label for="Tatuadores" class="form-label">Escolha o Tatuador</label>
                  <select class="form-select" name="Tatuadoress" id="tatuadores">
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
              <button class="btn btn-dark" type="submit" onclick="salvar();" data-bs-toggle="modal" data-bs-target="#enviarMensagem">
                Enviar Mensagem <i class="bi bi-reply"></i>
              </button>
            </div>
          </form>
        </div>
      </div>
    </section>

  </main>

  <?php include("footer.php") ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <script src="js/jsTattoo.js">
  </script>
</body>

</html>