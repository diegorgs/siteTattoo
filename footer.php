<footer>
  <div class="container-fluid bg-black">
    <div class="row text-light">
      <div class="col-md-auto col-2"> <img src="img/logotattoo.png" class="p-3" width="130px"></div>
      <div class="col-md-6 ms-5 col-6 my-4">
        <small>Copyright <strong>Gato Negro Estúdio</strong>.
          Todos os direitos reservados
          <br>
          Desenvolvido por Diego Rodrigues
        </small>
      </div>
      <div class="justify-content-end mb-2 d-flex d-md-none d-block">
        <a href="https://www.instagram.com/gatonegrosjc/" target="_blank"><i class="bi bi-instagram mx-2 my-auto tam3"></i></a>
        <a href="" target="_blank"><i class="bi bi-whatsapp mx-2 my-auto tam4"></i></a>
        <a href="" target="_blank"><i class="bi bi-facebook mx-2 my-auto tam2"></i></a>
        <a href="" target="_blank"><i class="bi bi-pinterest mx-2 my-auto tam4"></i></a>
      </div>
      <div class="col-4 p-md-5 d-md-block d-none">
        <div class="justify-content-end d-flex">
          <a href="https://www.instagram.com/gatonegrosjc/" target="_blank"><i class="bi bi-instagram mx-2 my-auto tam3"></i></a>
          <a href="" target="_blank"><i class="bi bi-whatsapp mx-2 my-auto tam4"></i></a>
          <a href="" target="_blank"><i class="bi bi-facebook mx-2 my-auto tam2"></i></a>
          <a href="" target="_blank"><i class="bi bi-pinterest mx-2 my-auto tam4"></i></a>
        </div>

      </div>
    </div>
  </div>
</footer>

<script>
    let cat = document.getElementById('catReceber');
    let tot = document.querySelector('.valor-total');
    let nomeSaida = document.getElementsByClassName('card-nome');
    let btn = document.getElementsByClassName('btn btn-primary');
    let carrinho = document.querySelector('p#cont');
    let nome = document.getElementById('nome-card');
    let valor = document.getElementsByClassName('card-valor');
    let receberPay = document.getElementById('payReceber')


    function categoria(id) {
      id = id;
      $.ajax({
        url: 'http://localhost/SiteTattoo/model/cat.php',
        method: 'GET',
        data: {
          id: id,
        },
        dataType: 'json'
      }).done((dados) => {
        cat.innerHTML = '';
        for (let i = 0; i < dados.length; i++) {
          let valor = Number(dados[i].valor);
          let idProduto = dados[i].idProduto;
          $("#catReceber").append(`<div class="row">
                          <div class="col-3 align-self-center">

                            <!-- Image -->
                            <div class="ratio ratio-1x1">
                              <img class="object-fit-cover" src="imgProdutos/${dados[i].img}" alt="...">
                            </div>

                          </div>
                          <div class="col-7">
                            <!-- Heading -->
                            <h5 class="card-nome">${dados[i].nome}</h5>

                            <!-- Text -->
                            <p class="mb-0">
                            ${dados[i].descr}
                            </p>

                          </div>
                          <div class="col-2">

                            <!-- Price -->
                            <div class="fs-4 font-serif text-center text-black">
                              R$<h4 class="card-valor p-0 m-0">${valor.toFixed(2)}</h4>
                              
                              <div class="py-2">
                                <button type="button" key="${[i]}" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                  Comprar
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>`);
        }

        total = Number(tot.innerHTML);
        listar(total, nomeSaida)

      })
    }

    function listar(total, nomeSaida) {

      for (var i = 0; i < btn.length; i++) {
        btn[i].addEventListener("click", function() {

          let key = this.getAttribute('key');
          total += Number(valor[key].innerHTML);
          tot.innerHTML = total.toFixed(2);
          //alert(nomeSaida[1].innerHTML) 
          nome.innerHTML += nomeSaida[key].innerHTML + ' R$' + Number(valor[key].innerHTML).toFixed(2) + '<br>';
        });
       
      }
      
    }
    function Comprar(total, nomeSainda){
   
    }
  </script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="js/anime.js"></script>
<script src="js/jsTattoo.js"></script>
<script src="js/navAnimate.js"></script>

</body>