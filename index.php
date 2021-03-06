<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!--link google fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+SC:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <!--link google fonts-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <!--Link font awesome-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!--Css AOS-->
    <title>Ateliê Boneca</title>
</head>

<body>

    <header>
        <!--Seção Header-->
        <div class="container">
            <div class="logo"><a href="./index.php">
                    <h2>Ateliê Boneca</h2>
                </a></div>
            <!--Bloco logo-->
            <div class="redessociais">
                <!--Bloco redes sociais-->
                <i class="fab fa-facebook-square"></i>
                <i class="fab fa-instagram-square"></i>
                <i class="fab fa-twitter"></i>
            </div>
            <div class="menu">
                <!--Bloco menu desktop-->
                <i id="iconmenu" class="fas fa-bars"></i>
                <nav class="menu-desktop">
                    <ul>
                        <li href="#artista">Artista</li>
                        <li href="#servicos">Serviços</li>
                        <li href="#contato">Contato</li>
                    </ul>
                </nav>
            </div>
        </div>

    </header>
    <div class="clear"></div>
    <!--Limpar flutuação-->

    <nav class="menu-mobile">
        <!--Bloco menu mobile-->
        <ul>
            <li href="#artista">Artista</li>
            <li href="#servicos">Serviços</li>
            <li href="#contato">Contato</li>
        </ul>
    </nav>
    <div class="clear"></div>
    <!--Limpar flutuação-->



    <section class="first">
        <!--Seção de entrada-->
        <div class="texto1">
            <h1>Lorem ipsum dolor sit amet</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ullamcorper in tortor eu pulvinar.
                Donec aliquam euismod mauris at aliquam. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <button>Fale Conosco</button>
        </div>
    </section>
    <div class="clear"></div>
    <!--limpar flutuação-->

    <section data-aos="fade-up" id="artista" class="second">
        <!--Segunda Seção(artista)-->
        <div class="container">
            <div class="img"></div>
            <div class="texto2">
                <h2>Lorem ipsum dolor sit amet</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ullamcorper in tortor eu pulvinar.
                    Donec aliquam euismod mauris at aliquam. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ullamcorper in tortor eu pulvinar.
                    Donec aliquam euismod mauris at aliquam. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
    </section>
    <div class="clear"></div>
    <!--Limpar flutuação-->

    <section data-aos="fade-up" id="servicos" class="third">
        <!--Terceira Seção(serviços)-->
        <div class="container">
            <h2>Serviços</h2>
            <div><img src="imagens/boneca.png">
                <h3>Bonecas</h3>
            </div>
            <div><img src="imagens/caneta.png">
                <h3>Canetas</h3>
            </div>
            <div><img src="imagens/chapeu-de-festa.png">
                <h3>Festa</h3>
            </div>
        </div>
    </section>
    <div class="clear"></div>
    <!--Limpar flutuação-->

    <section data-aos="fade-up" class="fourth">
        <!--Quarta seção(depoimentos)-->
        <div class="container">
            <h2>Depoimentos</h2>
            <div>
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras at aliquam quam. Ut pretium nibh ac auctor mollis. Integer laoreet quis orci vulputate suscipit.Per inceptos himenaeos.</p>
                <div class="img-1"></div>
                <h6>Marina Fernandes</h6>
            </div>
            <div>
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras at aliquam quam. Ut pretium nibh ac auctor mollis. Integer laoreet quis orci."</p>
                <div class="img-2"></div>
                <h6>João Oliveira</h6>
            </div>
            <div>
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras at aliquam quam. Ut pretium nibh ac auctor mollis. Integer laoreet quis orci vulputate suscipit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos."</p>
                <div class="img-3"></div>
                <h6>Paula Martins</h6>
            </div>
        </div>
    </section>
    <div class="float"></div>
    <!--Limpa flutuação-->

    <section id="contato" class="fifth">
        <!--Quinta seção (contato)-->
        <form method="POST">
            <legend>Fale conosco</legend>
            <input id="nome" type="text" placeholder="Digite seu nome!" name="nome" require><br>
            <input id="email" type="text" placeholder="Digite seu email!" name="email" require><br>
            <textarea id="mensagem" type="text" placeholder="Digite sua mensagem!" name="mensagem" require></textarea><br>
            <input type="submit" placeholder="Enviar" name="acao">
        </form>
        <?php
        $pdo = new PDO('mysql:host=localhost;dbname=bd_atelieboneca','root', '');
        if(isset($_POST['acao'])){
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $msg = $_POST['mensagem'];

            $sql = $pdo->prepare("INSERT INTO `contatos` VALUES (null,?,?,?)");
            $sql->execute(array($nome,$email,$msg));
            echo "<p class='form-success'>Seus dados foram enviados com sucesso!</p>";
        }
        ?>

    </section>


    <footer>
        <p>Desenvolvido por Alexandre Oliveira<br />alexandreoliveiradvp@gmail.com</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!--Cdn Jquery-->
    <script type="text/javascript" src="./Js/functions.js"></script>
    <!--Link arquivo JS-->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!--Cdn AOS-->
    <script>
        //função AOS
        AOS.init();
    </script>

</body>

</html>