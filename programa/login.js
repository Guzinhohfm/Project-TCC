$(document).ready(function () {
  $("#meu-form").validate({
    rules: {
      user: {
        required: true,
      },
      password: {
        required: true,
        minlength: 8,
      },
      submitHandler: function () {
        alert("teste");
      },
    },
    messages: {
      user: {
        required: "<br>O campo e-mail é obrigatório!!!",
      },
      password: {
        required: "<br>O campo senha é obrigatório!!!",
        minlength: "<br>Senha deve possuir no mínimo 8 caracteres!!!",
      },
    },
  });
});

$(document).ready(function () {
  $("#btn-cadastro").click(function () {
    location.href = "cadastro.html";
  });
});
