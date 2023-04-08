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

<body>
  <?php include("nav.php") ?>
  <main class="mt-5">
    <section class="pt-5 bg-light" id="sobre">
      <div class="text-center container color-exclusive fontOld my-5">
        <div class="bg-dark py-3 rounded-3">
          <h1>Best Studio Tattoo</h1>
          <div>
            <img src="img/logotattoo.png" width="180px"> <br>
            <br>
          </div>
          <div class="text-light text-center mx-md-3 mb-md-4 container">
            <h5>O tatuador é uma pessoa cuja ocupação é
              principalmente tatuar <br class="d-md-block d-none"> o estilo do cliente
              e tatuar a pele de cliente
              e de rapaz. O local de trabalho <br class="d-md-block d-none"> do tatuador é
              conhecido como "Tattoo" ou "tatuagem" sa riscar<br> também
              são locais de interação social e discurso sampa em público. <br class="d-md-block d-none">
              Em alguns casos, tatuadores também são fóruns públicos.
            </h5>
          </div>
          <a class="bg-button" href=""><button class="btn btn-outline-dark my-2 p-3 bg-button" type="button">Orçamento</button></a>
        </div>
      </div>
    </section>
    <section id="destaque" class="my-5 py-5">
      <div class="container-fluid my-5 py-5 fontOld bg-destaque">
        <div class="pt-5 mt-5">
          <h1 class="text-center mt-4">Fazer você bem
            são os quesitos determinantes<br> de um
            tatuador de sucesso.
          </h1>
          <br>
          <div class="d-flex justify-content-center">
              <button class="btn btn-outline-light p-3" type="button"><h5>Orçamento</h5></button>
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php include("footer.php") ?>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="js/jsTattoo.js"></script>
</body>

</html>