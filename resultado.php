<?php
include_once "conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SpotUp - Resultado</title>
    <meta name="description" content="Material educativo e informativo sobre energia solar residencial
         em um site moderno e responsivo.">
    <link rel="icon" href="img/ico/icone_orca.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Cabeçalho -->
    <header id="inicio">
        <div class="Container Flex">
            <div id="logo">
                <img src="img/front/spotup.png" alt="hal 9000">
            </div>
            <nav>
                <input type="checkbox" id="check">
                <label for="check">&#9776;</label><!-- código para caractere especial -->
                <ul>
                    <li><a href="index.html">Início</a></li>
                    <li><a href="index.html">Conteúdo</a></li>
                    <li><a href="index.html">Financiamento</a></li>
                    <li><a href="#contato">Contato</a></li>
                    <li><a href="#admin">Administrativo</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- Destaque -->
    <main>
        <div class="Container">
            <h1>SpotUp - Energia Solar</h1>
            <h3>Provendo informações para todos!</h3><br><br>
        </div>
    </main>
    <!-- Conteúdo -->
    <section id="conteudo">
        <div class="Container">
            <h2>Resultado</h2>
            <div class="Cards Flex4">
                <div class="Card"><br><br>
                    <img src="img/front/calc.png" alt="" width="80" height="80"><br><br><br>
                    <form action="" method="post">




                    </form><br><br>
                </div>
            </div>
        </div>
    </section>
    <!-- Rodapé -->
    <address>
        <div class="Container Flex6">
            <div id="contato">
                <a href="https://api.whatsapp.com/send?phone=5511942283880" target="_blank">
                    <img src="img/sociais/whatsapp.png" alt="whatsapp" title="Abrir no WhatsApp">
                    <p>(11) 94228-3880</p>
                </a>
                <img src="img/sociais/fone.png" alt="">
                    <p>(11) 96149-8653</p>
            </div>
            <div id="endereco">
                <a href="https://goo.gl/maps/LBKnJzigKWnPUH538">
                    <img src="img/sociais/mapa.png" alt="Mapa" id="iconeMapa">
                    <img src="img/sociais/location32.png" alt="local" id="iconeLocal">
                    <p>Av. Pereira Barreto, 400</p>
                    <p>Baeta Neves - Centro, São Bernardo do Campo</p>
                    <p>CEP: 09751-000</p>
                    <p>São Paulo</p>
                    <a href="mailto:spotup@spotup.com?subject=Contato">
                        <img src="img/sociais/email.png" alt="Enviar E-mail">
                        <p>spotup@spotup.com</p>
                    </a>
                    <p id="dados">&#128064; Av. Pereira Barreto, 400 Baeta Neves - Centro</p>
            </div>
            <div id="googleMaps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14613.800000343363!2d-46.5469041!3d-23.6956191!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xde1bd4c03c58dcd6!2sFatec%20SBC%20-%20Fatec%20S%C3%A3o%20Bernardo%20do%20Campo%20%22Adib%20Mois%C3%A9s%20Dib%22!5e0!3m2!1spt-BR!2sbr!4v1673364695755!5m2!1spt-BR!2sbr" 
                        width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </address>
    <footer>
        <div class="Container Flex5">
            <div id="copyright">
                <p>&#169; 2023 - Fatec - "Adib Moisés Dib"</p>
            </div>
            <div id="social">
                <a href="https://www.youtube.com/watch?v=Re_UFEhX_EY"
                target="_blank"><img src="img/sociais/youtube.png" alt="youtube"></a>
                <a href="https://www.linkedin.com/search/results/all/?heroEntityKey=urn%3Ali%3Aorganization%3A66261461&keywords=fatec%20s%C3%A3o%20bernardo%20do%20campo%20adib%20moises%20dib&origin=RICH_QUERY_SUGGESTION&position=1&searchId=c4e4aee8-45b8-442f-a36e-0d41fe6da310&sid=g5v"
                target="_blank"><img src="img/sociais/linkedin.png" alt="linkedin"></a>
                <a href="https://www.instagram.com/fatecsbc/"
                target="_blank"><img src="img/sociais/instagram.png" alt="Instagram"></a>
                <a href="https://twitter.com/paulasouzasp"
                target="_blank"><img src="img/sociais/twitter.png" alt="twitter"></a>
                <a href="https://www.facebook.com/pages/Fatec-S%C3%A3o-Bernardo-do-Campo/187665795059044"
                target="_blank"><img src="img/sociais/facebook.png" alt="facebook"></a>
            </div>
        </div>
    </footer>
    <a href="#inicio" id="topo"><img src="img/front/topo.png" alt="topo do site"></a>
</body>
</html>