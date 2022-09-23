$(document).ready(function () {
  $("#form-log").validate({
    rules: {
      email: {
        required: true,
      },
      password: {
        required: true,
        minlength: 8,
      },
    },
    messages: {
      email: {
        required: "<br>O campo e-mail é obrigatório!!!",
      },
      password: {
        required: "<br>O campo senha é obrigatório!!!",
        minlength: "<br>Senha deve possuir no mínimo 8 caracteres!!!",
      },
    },
  });
});

function cadastrar() {
  location.href = "cadastro.php";
}
