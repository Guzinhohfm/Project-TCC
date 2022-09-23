let perguntas = [
    {
      titulo: "Qual a mulher mais linda do mundo?",
      alternativas: ["Fernanda Zuffo", "Joana", "Maria Vagabailer", "Neusa"],
      correta: 0,
    },
    {
      titulo: "Quanto é 2 + 2?",
      alternativas: ["0", "22", "4", "8"],
      correta: 2,
    },
    {
      titulo: "Qual a melhor skin?",
      alternativas: ["Sublime", "Saqueadora", "Sentinelas da luz", "Dragão"],
      correta: 1,
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
        this.AtualPos = 0;
        this.placar = 0;
        NumPlacar.innerText = this.placar;
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
  };
  
  app.start();
  
  // bind = fazer a fixação do this ao objeto que referenciarmos. Pode ser substituido pela arrow function
  // this = faz referencia a aquilo que desejamos
  