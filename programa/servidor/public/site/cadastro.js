$(document).ready(function () {
  $("#form-cadastrar").validate({
    rules: {
      log: {
        required: true,
        email: true,
      },
      user: {
        required: true,
      },
      password: {
        required: true,
        minlength: 8,
      },
      confpassword: {
        required: true,
        minlength: 8,
        equalTo: password,
      },
    },
    messages: {
      log: {
        required: "<br>O campo de e-mail é obrigatório",
        email: "<br>Insira um e-mail válido!!!",
      },
      user: {
        required: "<br>O campo nome é obrigatório!!!",
      },
      password: {
        required: "<br>O campo senha é obrigatório!!!",
        minlength: "<br>Senha deve possuir no mínimo 8 caracteres!!!",
      },
      confpassword: {
        required: "<br>O campo senha é obrigatório!!!",
        minlength: "<br>Senha deve possuir no mínimo 8 caracteres!!!",
        equalTo: "<br>Senhas precisam ser iguais!!!",
      },
    },
  });
});

