<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css local -->
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <link rel="stylesheet" type="text/css" href="./css/slick.css" />
    <!-- css online -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="shortcut icon" href="images/icons/favicon.ico" />
    <!-- css responsive
    <link rel="stylesheet" type="text/css" href="./css/css_500.css">
    <link rel="stylesheet" type="text/css" href="./css/css_1150.css"> -->
    <title>OrgWork</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <a class="navbar-brand" href="#">
            OrgWork
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="conteudoNavbarSuportado">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="#">Inicio<span class="sr-only">(pagina atual)</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#download">Download</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#about">Sobre</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#help">Ajuda</a>
                </li>
            </ul>
        </div>
    </nav>

    <div align="center" class="embed-responsive embed-responsive-16by9">
        <video class="video-fluid z-depth-1" autoplay loop controls muted>
            <source src="video/animação.mp4" type="video/mp4">
        </video>
    </div>

    <div class="container text-destak" id="about">
        <h1>Sobre nós</h1>
        <p>Nossa história começa agora no ano de 2020, onde iniciamos nossa empreitada no desenvolvimento de aplicativos e com
            a oportunidade de desenvolver um projeto para apresentação no trabalho de conclusão de curso. Criamos aplicativos
            para a Plataforma Android sob medida para atender as necessidades de cada cliente. Trabalhando forte para entregar
            às pessoas e empresas a melhor aplicação, buscando assim facilitar o cotidiano e a qualidade de vida das pessoas.
        </p>

        <div class="row">
            <div class="col-sm-4 text-block">
                <img src="./images/icons/ic_mision.png" alt="">
                <h3>Missão</h3>
                <p>
                    Engajar às pessoas em seu foco nos estudos, buscando facilitar seu meio de organização academica
                    e também ser seu melhor caminho nos quisitos de informação segura e confiavel para que possam realizar
                    seus sonhos, sem jamais desistirem.
                </p>
            </div>
            <div class="col-sm-4 text-block" id="center-card">
                <img src="./images/icons/ic_vision.png" alt="">
                <h3>Visão</h3>
                <p>
                    Ser uma empresa transparente, que tenha total confiança de seus clientes,
                    sendo mais próximo dos mesmos e podendo ajudar as pessoas com seus problemas como a
                    falta de foco, desmotivação, e se possivel erradicar esses problemas.
                </p>
            </div>
            <div class="col-sm-4 text-block">
                <img src="./images/icons/ic_values.png" alt="">
                <h3>Valores</h3>
                <p>
                    Trabalhar com clareza, integridade, responsabilidade, foco, competência e seriedade, sempre com respeito à vida
                    e as coisas boas que vem com ela, ser uma empresa fiel à veracidade das informações que são passadas.
                </p>
            </div>
        </div>
    </div>

    <div class="separate">
        <img src="images/icons/ic8_up.png" alt="">
    </div>

    <div class="row things" id="download">
        <div class="col-sm-6 social_download">
            <div class="download">
                <h3>Download</h3>
                <a href='https://play.google.com/store/apps/details?id=com.orgwork.renewed'>
                    <img width="150px" alt='Disponível no Google Play' src='https://play.google.com/intl/en_us/badges/static/images/badges/pt-br_badge_web_generic.png' />
                </a>
            </div>

            <div class="social">
                <h3 id="so">Social</h3>
                <div class="btn_social">
                    <a href="https://www.facebook.com/orgworkBR/" class="fa fa-facebook"></a>
                    <a href="https://twitter.com/OrgWork_?s=20" class="fa fa-twitter"></a>
                </div>
            </div>
        </div>

        <div class="col-sm-4" id="help">
            <h3>Contato</h3>
            <?php
            if ($_SERVER['REQUEST_METHOD'] !== 'POST') {

            ?>
                <form action="testmail.php" method="POST">
                    <div class="form-group">
                        <label for="exampleInputName">nome</label>
                        <input type="text" class="form-control" id="InputName" name="InputName" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">email</label>
                        <input type="email" class="form-control" id="InputEmail" name="InputEmail" aria-describedby="emailHelp" placeholder="Your email">

                    </div>
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-secondary active">
                            <input type="radio" name="options" id="option1" value="Answer" autocomplete="off">Duvida
                        </label>
                        <label class="btn btn-secondary">
                            <input type="radio" name="options" id="option2" value="Sugest" autocomplete="off">Sugestão
                        </label>
                        <label class="btn btn-secondary">
                            <input type="radio" name="options" id="option3" value="Others" autocomplete="off">Outros
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Mensagem</label>
                        <textarea class="form-control" id="Comment" name="Comment" rows="3"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>

            <?php
            } else {
            }
            ?>
        </div>
    </div>

    <footer>
        <div id="contact-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>
                            <i data-v-f1757e86="">•</i>
                            <a href="">OrgWork®</a> - Todos os direitos reservados
                            <i data-v-f1757e86="">•</i>
                            <a data-v-f1757e86="" href="docs/termo de uso.pdf">Termos de Uso</a>
                            <i data-v-f1757e86="">•</i>
                            <a data-v-f1757e86="" href="docs/privacy.pdf">Política de Privacidade</a>
                            <i data-v-f1757e86="">•</i>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- online -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!-- locais -->

</body>

</html>