<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nord P Black</title>
    <link rel="shortcut icon" type="imagex/png" href="img/ico.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">

        <div class="row">
          <div class="col">
            <div class="navbar navbar-light bg-light">
                <div class="container-fluid">
                  <a class="navbar-brand" href="index.php">
                    <img src="img/game.jpg" alt="" width="44" height="34" class="d-inline-block align-text-top">
                    Nord Project Black
                  </a>
                </div>
              </div>
          </div>
          
        </div>


        <div class="row">
          <div class="col">
            <nav style="padding-left: 20px;" class="navbar navbar-expand-lg navbar-dark bg-dark">
              <span></span>
              <a class="navbar-brand" href="index.php">HOME</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Máquinas Atuais:
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="index.php?opcao=1">PS5</a>
                      <a class="dropdown-item" href="index.php?opcao=2">Xbox Series X</a>
                      <a class="dropdown-item" href="index.php?opcao=3">PC</a>
                    </div>
                  </li>
                </ul>
              </div>
          </nav>
          </div>
        </div>

        <?php if(isset($_GET['opcao']) == FALSE){ ?>
            <div class="row">
          <div class="col">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="img/spider.webp" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="img/horizon.jpg"  alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="img/valhalla.jpg" alt="Third slide"  class="d-black w-100">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only"></span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only"></span>
              </a>
          </div>
          </div>
        </div>
      

      
        <div class="row">
          <div class="col">
            <div>
              &nbsp;
            </div>
          </div>
        </div>


        <div class="row align-items-start">
          <div class="col"  style="text-align: left;">
            <figure class="figure">
                <img src="img/mario.png" class="figure-img img-fluid rounded" alt="...">
                <figcaption class="figure-caption">Super Mario World(1990)</figcaption>
              </figure>
          </div>
          <div class="col"  style="text-align: center;">
            <figure class="figure"> 
                <img src="img/gta.png" class="figure-img img-fluid rounded" alt="...">
                <figcaption class="figure-caption">Grand Theft Auto: San Andreas(2004)</figcaption>
              </figure>
          </div>
          <div class="col" style="text-align: right;">
            <figure class="figure">
                <img src="img/rdd.jpg" class="figure-img img-fluid rounded" alt="...">
                <figcaption class="figure-caption">Red Dead Redemption 2(2018)</figcaption>
              </figure>
          </div>
        </div>

    </div>

        <?php } elseif($_GET['opcao'] == 1){ ?> 
            <div class="row">
          <div class="col">
              &nbsp;
          </div>
        </div>

        
        <div class="row">
          <div class="col">
              <img src="img/ps5.webp" class="d-black w-100">
              
              &nbsp;

              <h3>PS5</h3>
              <h5>Play Has No Limits!</h5>
              &nbsp;
              <p style="text-align: justify;">
                Lançado em 18 de novembro de 2020, essa é a resposta da Sony para a próxima geração de games.
                Com CPU e GPU extremamente aprimorados em função do seu antecessor, o PS5 passa a realidade de
                ser grande não só em tamanho, mas em poder. Com várias adições e aprimoramentos da Sony ao console
                temos uma máquina capaz de rodar quaisquer jogos atuais em 4k a 60fps, que é tão sonhado pelos gamers.
                Contando agora com o DualSense, não mais um Dualshock, o PS5 é capaz de adaptar sua experiência a qualquer
                jogo e deixar a jogatina ainda mais imersiva. Mas o que mais tem de novo?
              </p>
          </div>

          <div class="col">
              <h3>Novidades:</h3>

              &nbsp;

              <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Poder de Fogo
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>Além da GPU e CPU poderosas, o console conta com um SSD M2 de altissima velocidade, que diminui os carregamentos chatos em massa, e garante uma jogatina mais fluída. O PS5 é capaz de rodar jogos em 4k em até 120Hz com HDR, além de ter suporte a aúdio 3D.</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Retrocompatibilidade com o PS4
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>A tão sonhada Retrocompatibilidade sonhada pelos amantes de Playstation chegou, mas não exatamente do jeito que queriam. Aqui você poderá jogar apenas seus jogos antigos do PS4, e não do PS1, Ps2 E PS3 como tanto aguardavamos. Mas mesmo assim da pra aproveitar muito bem a biblioteca do antecessor(se você tiver migrado do PS4, claro).</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      DualSense
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>O DualSense representa a evolução tecnológica que não vimos em consoles novos como Xbox, que adiciona uma série de ferramentas de imersão para o usuario desfrutar. Ele conta com um microfone embutido que pode ser desligado por um botão, continua com o Touch Pad no centro, uma pegada ainda mais resistente e mais aderente pela construção, vibração adaptável com o game e os gatilhos adaptáveis que simulam perfeitamente um gatilho de uma arma por exemplo. Além dos sensores de movimento já vistos no PS4. O controle perfeito pra muitos...</p>
                    </div>
                  </div>
                </div>
              </div>
          </div>   
        </div>

        <?php } elseif($_GET['opcao'] == 2){ ?>
            <div class="row">
          <div class="col">
              &nbsp;
          </div>
        </div>

        
        <div class="row">
          <div class="col">
              <img src="img/xbox.jpg" class="d-black w-100">
              
              &nbsp;

              <h3>Xbox</h3>
              <h5>"O Xbox Series X funciona como um Xbox One que engoliu uma Lamborghini"</h5>
              &nbsp;
              <p style="text-align: justify;">Lançado em 10 de novembro de 2020, o Xbox Series X veio acompanhado de um irmão menor e menos poderoso, o Xbox Series S, para baratear os preços. Com o hardware mais poderoso entre os consoles atuais, o Xbox SX tem poder de sobra para rodar qualquer gameatual ou futuro. </p>
          </div>

          <div class="col">
              <h3>Novidades:</h3>

              &nbsp;

              <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Hardware mais potente do mercado de consoles
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>Juntos, o novo sistema em um chip (SOC) e o Xbox Velocity Architecture colocam a velocidade na ponta dos dedos, e o SSD e CPU personalizados de 1TB colocam o volante em suas mãos para que você possa ir de 0 a 60 em até 120 FPS.</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Retrocompatibilidade Completa
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>O Xbox Series X é compatível com milhares de jogos entre quatro gerações do Xbox. E com os jogos com a Entrega Inteligente, você compra um jogo uma vez e recebe a melhor versão do jogo para o console em que está jogando. Para jogar um jogo retrocompatível, insira o disco ou pesquise na biblioteca e selecione o jogo que deseja jogar.</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Xbox Game Pass
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>Mergulhe em uma biblioteca de mais de 100 jogos de alta qualidade. Aproveite os benefícios do Xbox Live Gold, do EA Play e jogue em vários dispositivos usando a nuvem ao ingressar no Xbox Game Pass Ultimate. Jogue com amigos e junte-se à maior comunidade de jogadores na rede para vários jogadores mais avançada que existe. Receba de 2 a 4 jogos grátis todos os meses e economize 50% nas compras de jogos.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>    
        </div>

        <?php } else{ ?>
            <div class="row">
          <div class="col">
              &nbsp;
          </div>
        </div>

        
        <div class="row">
          <div class="col">
              <img src="img/pc.webp" class="d-black w-100">
              
              &nbsp;

              <h3>PC Gamer</h3>
              <h5>Poder inimaginável em um só lugar</h5>
              &nbsp;
              <p style="text-align: justify;">Já estamos cansados de ouvir falar de PCs Gamers que entregam um poder de fogo capaz de rodar simulações da NASA, e sabemos muito bem da versatilidade que os acompanha. Ter um PC gamer não é só ter um máquina capaz de rodar qualquer game atual, mas é ter um local de trabalho, estudo e necessidades diarias. Além da acessibilidade de preços maior que nos consoles, alguns apelam para a pirataria nos Pcs, o que o faz ganhar ainda mais popularidade, e o fato de não ser necessario pagar para jogar online com seus amigos. Atualmente o PC é a máquina mais poderosa que se pode montar para jogar, isso se você comprar as peças certas e no preço certo, já que os preços estão cada vez mais altos.</p>
          </div>

          <div class="col">
              <h3>Novidades:</h3>

              &nbsp;

              <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Potência da NASA
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>A potência de um PC varia de acordo com as suas peças de hardware, que são obtidos separadamente de acordo com a preferência e o uso de quem está montando. Mas com o maior dos orçamentos, você pode ter a maquina mais poderosa disponivel atualmente no mercado no seu quarto. Com resoluções de 4K a 120HZ ou mais, com suporte a HDR, aprimoramento de texturas e diferentes tipos de periféricos que podem aprimorar sua jogatina</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Upgrade Fácil
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>Os PCs não só são conehcidos pela sua potência que varia de máquina pra máquina, mas também pela facilidade de upgrade no seu hardware. Onde o usuario pode trocar a peça que desejar e quando desejar para aumentar ou diminuir seu poder de fogo, diminuindo os custos enormes de comprar um console novo por exemplo. Além do mais, sempre haverá atualizações gratuitas de software e suporte jamais estará ultrapassado em questões de tecnologia, já que basta apenas trocar algumas peças.</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Acesibilidade aos Games
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>Muitos dizem preferir um PC pela facilidade maior de obter seu game preferido, já que realmente os preços de jogos para computador são mais baratos que em consoles, além de ter promoções melhores e mais frequentes. Sem falar no multijogador gratuito para qualquer game, que não está presente nos consoles. Muitos também apelam para a pirataria, onde não precisam gastar um unico tostão, porém, sempre há um risco.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>    
        </div>
        <?php } ?> 


       

    <div class="row">
      <div class="col">
        <div>
          &nbsp;
        </div>
      </div>
    </div>

    
      <div class="row">
        <div class="col">
          <nav class="navbar navbar-light bg-light ml-auto">
            <a class="navbar-brand" href="#" style="text-align: center; width: 100%; font-size: 10pt">
              Nord Project Black - Copyright 2022 - Todos os direitos reservados
            </a>
          </nav>
        </div>
      </div>
    
</body>
</html>