<?php

    session_start();

    if(!isset($_SESSION['id_usuario']))
    {
        header("Location: /logar");
        exit;
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/icone.ico" type="image/x-icon">

</head>
<body>

    <header class="header">

        <a href="#" class="logo">
            <img src="images/logo2.png" alt="">
        </a>

        <nav class="navbar">
            <a href="#home">Início</a>
            <a href="#about">Sobre</a>
            <a href="#menu">Destaques</a>
            <a href="#products">Produtos</a>
            <a href="#review">Análises</a>
            <a href="#contact">Contato</a>
            <a href="sair.php">Sair</a>
        </nav>

        <div class="icons">
            <div class="fas fa-search" id="search-btn"></div>
            <div class="fas fa-shopping-cart" id="cart-btn"></div>
            <div class="fas fa-bars" id="menu-btn"></div>
        </div>

        <div class="search-form">
            <input type="search" id="search-box" placeholder="Pesquisar...">
            <label for="search-box" class="fas fa-search"></label>
        </div>

        <div class="cart-items-container">
            <div class="cart-item">
                <span class="fas fa-times"></span>
                <img src="images/mouse.png" alt="">
                <div class="content">
                    <h3>Item 1</h3>
                    <div class="price">R$116,99</div>
                </div>
            </div>
            <div class="cart-item">
                <span class="fas fa-times"></span>
                <img src="images/headsetHyperx.jpg" alt="">
                <div class="content">
                    <h3>Item 2</h3>
                    <div class="price">R$199,99</div>
                </div>
            </div>
            <div class="cart-item">
                <span class="fas fa-times"></span>
                <img src="images/ps5.png" alt="">
                <div class="content">
                    <h3>Item 3</h3>
                    <div class="price">R$3999,99</div>
                </div>
            </div>
            <div class="cart-item">
                <span class="fas fa-times"></span>
                <img src="images/amd5600g.jpg" alt="">
                <div class="content">
                    <h3>Item 4</h3>
                    <div class="price">R$1074,99</div>
                </div>
            </div>
            <a href="#" class="btn">Ir para o pagamento</a>
        </div>
        

    </header>

    <section class="home" id="home">

        <div class="content">
            <h3>placas de vídeo com até 30% de desconto</h3>
            <p>Venha conferir as melhores promoções na TechPower.</p>
            <a href="#menu" class="btn">Veja agora</a>
        </div>

    </section>

    
    <section class="about" id="about">
        <h1 class="heading"> sobre </h1>
        <div class="row">
            <div class="image">
                <img src="images/sobre.png" alt="">
            </div>
            <div class="content">
                <h3>Sobre a empresa</h3>
                <p>A empresa TechPower foi oficialmente inaugurada em 2022, o intuito sempre foi disponibilizar o melhor preço
                    em hardware para todos. Buscamos sempre estar a frente trazendo em primeira mão os melhores lançamentos do mercado.
                    Já são mais de 100 mil produtos vendidos por todo o país, e com ótimas avaliações do público geral.
                </p>
            </div>
        </div>
    </section>

    <section class="menu" id="menu">
        <h1 class="heading"> destaques </h1>
        <div class="box-container">
            <div class="box">
                <img src="images/mouse.png" alt="">
                <h3>Mouse Gamer Redragon Cobra, Chroma RGB, Preto - M711 V2</h3>
                <div class="price">R$116,99 <span>R$150,00</span></div>
                <a href="#" class="btn">Adicionar ao carrinho</a>
            </div>

            <div class="box">
                <img src="images/amd5600g.jpg" alt="">
                <h3>Processador AMD Ryzen 5 5600G, 3.9GHz, 6 Núcleos, 12 Threads Vid. Integrado</h3>
                <div class="price">R$1074,99 <span>R$2000,00</span></div>
                <a href="#" class="btn">Adicionar ao carrinho</a>
            </div>

            <div class="box">
                <img src="images/rtx2060.jpg" alt="">
                <h3>Placa de Vídeo Zotac Gaming NVIDIA GeForce RTX 2060, 6GB, GDDR6</h3>
                <div class="price">R$1499,99 <span>R$3000,00</span></div>
                <a href="#" class="btn">Adicionar ao carrinho</a>
            </div>

            <div class="box">
                <img src="images/teclado_kumara.jpg" alt="">
                <h3>Teclado Mecânico Gamer Redragon Kumara, LED Vermelho, Switch Outemu Blue</h3>
                <div class="price">R$199,99 <span>R$410.00</span></div>
                <a href="#" class="btn">Adicionar ao carrinho</a>
            </div>

            <div class="box">
                <img src="images/headsetHyperx.jpg" alt="">
                <h3>Headset Gamer HyperX Cloud Stinger, Drivers 50mm, Múltiplas Plataformas, P2 e P3</h3>
                <div class="price">R$199,99 <span>R$385,00</span></div>
                <a href="#" class="btn">Adicionar ao carrinho</a>
            </div>

            <div class="box">
                <img src="images/placaAsus.jpg" alt="">
                <h3>Placa-Mãe Asus TUF Gaming B450M-Pro II, AMD AM4, mATX, DDR4y</h3>
                <div class="price">R$849,99 <span>R$1050,00</span></div>
                <a href="#" class="btn">Adicionar ao carrinho</a>
            </div>

        </div>
    </section>

    <section class="products" id="products">
        <h1 class="heading"> outros <span>produtos</span> </h1>
        <div class="box-container">
            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="images/notebook.png" alt="">
                </div>
                <div class="content">
                    <h3>Notebook Asus AMD Ryzen 5-3500U, 8GB RAM, SSD 256GB, 15,6', Radeon Vega 8, Windows 11 Home, Cinza - M515DA</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="price">R$2499,99 <span>R$4199,99</span> </div>
                </div>
            </div>

            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="images/ps5.png" alt="">
                </div>
                <div class="content">
                    <h3>Console Sony PlayStation 5 Edição Digital + FIFA 23</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="price">R$3999,99 <span>R$4449,99</span> </div>
                </div>
            </div>

            <div class="box-container">
            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-shopping-cart"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="images/alexa.png" alt="">
                </div>
                <div class="content">
                    <h3>Echo (4ª Geração) com Alexa e Som Premium, Amazon Smart Speaker Branco - B085FXHQHY</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="price">R$649,99 <span>R$949,00</span> </div>
                </div>
            </div>

        </div>
    </section>

    <section class="review" id="review">
        <h1 class="heading"> customer's <span>review</span> </h1>
        <div class="box-container">
            <div class="box">
                <img src="images/detalhe.png" alt="" class="quote">
                <p>Produtos excelentes, atendimento impecável, entrega rápida e um ótimo suporte ao cliente.</p>
                <img src="images/usuario.png" class="user" alt="">
                <h3>Isabela R.</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>

            <div class="box">
                <img src="images/detalhe.png" alt="" class="quote">
                <p>Entrega rápida, chegou tudo certinho, um ótimo atendimento ao clinte e contém todos os lançamentos atuais.</p>
                <img src="images/usuario.png" class="user" alt="">
                <h3>Walter N.</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>

            <div class="box">
                <img src="images/detalhe.png" alt="" class="quote">
                <p>Tudo perfeito, entrega rápida, atendimento impecável, suporte ao cliente e grande varibilidade de produtos.</p>
                <img src="images/usuario.png" class="user" alt="">
                <h3>Carina B.</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>

        </div>
    </section>

    <section class="contact" id="contact">
        <h1 class="heading"> contato </h1>
        <div class="row">
            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1845.8138607472697!2d-48.56777371053451!3d-22.292087676675063!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c757fe1abe1399%3A0x3b0bd1dacc48457e!2sEtec%20Joaquim%20Ferreira%20do%20Amaral!5e0!3m2!1spt-BR!2sbr!4v1666614744031!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            
            <form action="">
                <h3>entrar em contato</h3>
                <div class="inputBox">
                    <span class="fas fa-user"></span>
                    <input type="text" placeholder="Nome">
                </div>
                <div class="inputBox">
                    <span class="fas fa-envelope"></span>
                    <input type="email" placeholder="Email">
                </div>
                <div class="inputBox">
                    <span class="fas fa-phone"></span>
                    <input type="number" placeholder="Número">
                </div>
                <input type="submit" value="Contate agora" class="btn">
            </form>
            
        </div>
    </section>

    <section class="footer">
        <div class="share">
            <a href="https://www.facebook.com/mateusgabriel.moreno" class="fab fa-facebook-f"></a>
            <a href="https://twitter.com/mateus_moreno04" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com/mateus_moreno04/" class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com/in/mateus-gabriel-moreno-585344240/" class="fab fa-linkedin"></a>
        </div>

        <div class="credit">TechPower© @2022 // Todos os direitos reservados. Criado por <span>Mateus Gabriel Moreno.</span></div>
    </section>
    

    <script src="js/script.js"></script>

</body>
</html>
