function salvar() {
    let nome = document.getElementById("nome").value;
    let email = document.getElementById("email").value;
    let msg = document.getElementById("msg").value;


    if (nome == "" || email =="" || msg == ""){
      alert("Preencha todos os dados corretamente.");
    }else{
      alert("Mensagem Enviada!");
    }
}
    
  // Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootst rap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()