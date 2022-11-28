let perguntas = [
  {
    titulo:
      "Qual é a sintaxe correta para gerar 'Hello World' em Python?",
    alternativas: ["print('Hello World')", "echo('Hello World')", "p('Hello World')", "echo 'Hello World'"],
    correta: 0,
  },
  {
    titulo:
      "Python é uma linguagem extremamente robusta e utilizada nas mais diversas soluções, como:",
    alternativas: ["Processamento pesado de efeitos do cinema","Back-end de sistemas web	, crms e erps","Aprendizado de maquina,soluções de análise de dados", "Todas as anteriores"],
    correta: 3,
  },
  {
    titulo: "Como declaramos uma variável em phython?",
    alternativas: ["echo", "var", "def", "$"],
    correta: 2,
  },
  {
    titulo: "Qual é o melhor atalho para incrementar a variável 'a=0' em Python?",
    alternativas: ["a+= 1", "a= a+1", "a++", "a= a+1 if a else 1"],
    correta: 0,
  },
];

// objeto app com seus métodos
//funcao de começo do jogo
let app = {
  start: function () {
    this.placar = 0;
    // posicao da pergunta atual
    this.AtualPos = 0;
    let alts = document.querySelectorAll(".alternativas");
    alts.forEach((element, index) => {
      element.addEventListener("click", () => {
        this.checaResposta(index);
      });
    });
    this.checaPlacar();
    app.mostraPergunta(perguntas[this.AtualPos]);
  },

  mostraPergunta: function (q) {
    this.qatual = q;
    // mostrando titulo
    let titleDiv = document.getElementById("titulo");
    titleDiv.textContent = q.titulo;
    // mostrando alternativas
    let alts = document.querySelectorAll(".alternativas");
    alts.forEach(function (element, index) {
      element.textContent = q.alternativas[index];
    });
  },

  ProximaPerg: function () {
    let alt = document.getElementsByClassName("alternativas");
    this.AtualPos++;
    for (i = 0; i < alt.length; i++) {
      alt[i].style.backgroundColor = "white";
    }
    if (this.AtualPos == perguntas.length) {
      this.finalizaGame()
    }
  },

  checaResposta: function (user) {
    let alt = document.getElementsByClassName("alternativas");
    if (this.qatual.correta == user) {
      alt[user].style.backgroundColor = "green";
      this.placar++;
    } else {
      let pergunta = perguntas[this.AtualPos];
      // obter indice da resposta correta
      let cindice = pergunta.correta;
      alt[user].style.backgroundColor = "red";
      // mostrar qual a correta
      alt[cindice].style.backgroundColor = "green";
    }
    // intervalo de tempo para mudar a pergunta
    setTimeout(() => {
      this.ProximaPerg();
      this.mostraPergunta(perguntas[this.AtualPos]);
    }, 1000);
    this.checaPlacar();
  },
  // funcao para checar o placar
  checaPlacar: function () {
    if (this.placar > 0) {
      let NumPlacar = document.getElementById("NumPlacar");
      NumPlacar.innerText = this.placar;
    }
  },
  // funcao para finalizar o game, necessário buscar uma lógica para mostrar o encerramento do game na tela
  finalizaGame: function(){
    localStorage.setItem("pontos", this.placar)
    window.location.href = "endgame.html";
  }
};

app.start();

// bind = fazer a fixação do this ao objeto que referenciarmos. Pode ser substituido pela arrow function
// this = faz referencia a aquilo que desejamos
