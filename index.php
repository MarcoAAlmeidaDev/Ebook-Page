<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css" type="text/css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Ebook Page</title>
</head>
<body>
    <header>
        <div class="logo"><img src="img/jovem-dev-logo.png" alt=""></div>
        <div class="nav-buttons">
            <button onclick="location.href='ebooks.html'">Ebooks</button>
            <button onclick="location.href='contato.html'">Contato</button>
        </div>
    </header>

    <section class="hero fade-in">
        <img src="ebook-image/ebook-image-1.png" alt="Capa do Ebook">
        <div class="hero-content">
            <h1><strong style="font-weight: 800;">Start Code:</strong> O Guia Inovador para Iniciantes em Programação</h1>
            <p>Descubra como dominar a programação do zero utilizando a linguagem Java Script com este eBook incrível. Ganhe habilidades valiosas e prepare-se para oportunidades no mercado de tecnologia. Aproveite agora e dê o próximo passo rumo ao sucesso!</p>
            <button onclick="location.href='compra.html'">Compre Agora</button>
        </div>
    </section>

    <section class="life-change-section fade-in">
        <div class="life-change-content">
            <h2>Como a Programação Pode Transformar sua Vida</h2>
            <img src="liberdade-image/liberdade-programa.webp" alt="Liberdade com programação">
            <p style="font-size: 15px; margin-top: -20px;">Imagem gerada com inteligencia artificial, ensino a usar no eBook</p>
            <div class="change-life">   
                <p>A programação não é apenas uma habilidade, é uma porta para a liberdade financeira e geográfica. Podendo trabalhar de onde quiser, quando quiser, e sendo dono do seu tempo. Ao comprar nosso eBook, você ainda ganha um bônus exclusivo: <strong style="font-weight: 800;">"50 Projetos para Ganhar Dinheiro com Programação"</strong>, que vai te ajudar a transformar seu conhecimento em lucro. Não perca esta oportunidade de mudar sua vida!</p>
                <button onclick="location.href='compra.html'">Aproveite Agora</button>
            </div>
        </div>
    </section>

    <section class="products fade-in">
        <div class="product-card">
            <img src="ebook-image/ebook-card-1.png" alt="Ebook 1">
            <h3><strong style="font-weight: 800;">Start Code: </strong> Iniciando na Programação com JS</h3>
            <p>Aprenda o básico de programação e comece sua carreira na tecnologia.</p>
            <button onclick="location.href='compra.html'">Compre Agora</button>
        </div>
        <div class="product-card">
            <img src="ebook-image/ebook-card-1.png" alt="Ebook 2">
            <h3><strong style="font-weight: 800;">Start Code: </strong Projetos Práticos</h3>
            <p>50 projetos para ganhar dinheiro com programação.</p>
            <button onclick="location.href='compra.html'">Compre Agora</button>
        </div>
        <div class="product-card">
            <img src="ebook-image/ebook-card-1.png" alt="Ebook 3">
            <h3><strong style="font-weight: 800;">Start Code: </strong Avançando na Carreira</h3>
            <p>Estratégias para se destacar e crescer na área de tecnologia.</p>
            <button onclick="location.href='compra.html'">Compre Agora</button>
        </div>
    </section>

    <section class="testimonials fade-in">
        <h2>O que nossos leitores dizem</h2>
        <div class="testimonial-cards">
            <div class="testimonial-card">
                <img src="depoimentos-img/print-1.PNG" alt="Depoimento 1">
                <p>"Este eBook mudou minha perspectiva sobre programação. Super recomendo!"</p>
                <div class="stars">★★★★★</div>
            </div>
            <div class="testimonial-card">
                <img src="depoimentos-img/print-1.png" alt="Depoimento 2">
                <p>"Consegui meu primeiro trabalho como desenvolvedor graças aos ensinamentos."</p>
                <div class="stars">★★★★★</div>
            </div>
            <div class="testimonial-card">
                <img src="depoimentos-img/print-1.png" alt="Depoimento 3">
                <p>"Os projetos práticos me ajudaram a ganhar uma renda extra rapidamente."</p>
                <div class="stars">★★★★★</div>
            </div>
            <div class="testimonial-card">
                <img src="depoimentos-img/print-1.png" alt="Depoimento 4">
                <p>"Material didático e super fácil de entender. Parabéns pelo trabalho!"</p>
                <div class="stars">★★★★★</div>
            </div>
            <div class="testimonial-card">
                <img src="depoimentos-img/print-1.png" alt="Depoimento 5">
                <p>"A qualidade do conteúdo é excelente. Valeu cada centavo!"</p>
                <div class="stars">★★★★★</div>
            </div>
            <div class="testimonial-card">
                <img src="depoimentos-img/print-1.png" alt="Depoimento 6">
                <p>"Finalmente entendi programação de forma clara e prática. Obrigado!"</p>
                <div class="stars">★★★★★</div>
            </div>
        </div>
    </section>

    <footer>
        <div class="footer-container fade-in">
            <!-- Logo -->
            <div class="footer-logo">
                <img src="img/jovem-dev-logo.png" alt="Logo Jovem Dev">
            </div>
    
            <!-- Contact Links -->
            <div class="footer-links">
                <a href="mailto:seuemail@exemplo.com">
                    <i class='bx bx-envelope' ></i> persolidenterprise@gmail.com
                </a>
                <a href="https://www.instagram.com/suaPagina" target="_blank">
                    <i class='bx bxl-instagram' ></i> @jovem.dev
                </a>
                <!-- <a href="https://wa.me/seuNumero" target="_blank">
                    <i class='bx bxl-whatsapp'></i>
                </a> -->
            </div>
        </div>
    
        <!-- Copyright and Button -->
        <div class="footer-bottom fade-in">
            <p>© 2024 Jovem Dev - Todos os direitos reservados</p>
            <button onclick="location.href='ebooks.html'">Ver lista de eBooks</button>
        </div>
    </footer>
    <script src="script/script.js"></script>
</body>
</html>
