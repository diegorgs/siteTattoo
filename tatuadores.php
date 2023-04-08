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
  <section class="py-5" id="Tatuadores"> <br>
      <h1 class="text-center pt-5 text-dark"><strong>Artistas</strong> </h1> <br>
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
    <main class="mt-5">
    <section id="destaque">
      <div class="container-fluid mt-5 pt-5 fontOld bg-destaque">
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

    <section id="sobre">
      <div class="text-center container color-exclusive fontOld my-5">
        <h1>Best Studio Tattoo</h1>
        <div>
          <img src="img/logotattoo.png" width="180px"> <br>
          <br>
        </div>
        <div class="text-dark text-center mx-md-3 mb-md-4 container">
          <h5>O tatuador é uma pessoa cuja ocupação é
            principalmente cortar <br class="d-md-block d-none"> o estilo do noivo
            e barbear o cabelo de homem
            e de rapaz. O local de trabalho <br class="d-md-block d-none"> do barbeiro é
            conhecido como "barbearia" ou "barbeiro" sa barbee<br> também
            são locais de interação social e discurso sampa em público. <br class="d-md-block d-none">
            Em alguns casos, barbearias também são fóruns públicos.
          </h5>
        </div>
       <a class="bg-button" href=""><button class="btn btn-outline-dark my-2 p-3 bg-button" type="button">Orçamento</button></a> 
      </div>
    </section>

    <?php include("footer.php") ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="js/jsTattoo.js"></script>  

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>