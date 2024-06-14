<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Adote um Amigo: Encontre o seu novo melhor amigo peludo. Adote cães e gatos de todas as idades e sexos.">
    <meta name="keywords" content="adoção de animais, cães, gatos, filhotes, adultos">
    <meta name="author" content="Adote um Amigo">
    <title>Adote um Amigo</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <?php include 'includes/menu.html'; ?>

    <main>
        <section class="hero">
            <h1>Adote um Amigo: Encontre o Seu Novo Melhor Amigo Peludo</h1>
            <div class="hero-images">
                <img src="images/animal1.jpg" alt="Animal feliz" aria-label="Animal feliz">
                <img src="images/animal2.jpg" alt="Animal saudável" aria-label="Animal saudável">
            </div>
        </section>

        <section class="search">
            <h2>Encontre seu Amigo</h2>
            <form action="search_results.php" method="GET">
                <label for="search">Procure por um animal:</label>
                <input type="text" id="search" name="search" placeholder="Procure por um animal...">
                <label for="category">Categoria:</label>
                <select id="category" name="category">
                    <option value="dog">Cão</option>
                    <option value="cat">Gato</option>
                </select>
                <label for="age">Idade:</label>
                <select id="age" name="age">
                    <option value="puppy">Filhote</option>
                    <option value="adult">Adulto</option>
                </select>
                <label for="sex">Sexo:</label>
                <select id="sex" name="sex">
                    <option value="male">Macho</option>
                    <option value="female">Fêmea</option>
                </select>
                <button type="submit">Buscar</button>
            </form>
        </section>

        <section class="action-buttons">
            <a href="adopt.php" class="button">Adotar</a>
            <a href="learn_more.php" class="button">Saiba Mais</a>
            <a href="donate.php" class="button">Doe Agora</a>
        </section>

        <section class="success-stories">
            <h2>Histórias de Sucesso</h2>
            <div class="stories">
                <div class="story">
                    <img src="images/success1.jpg" alt="Animal adotado" aria-label="Animal adotado">
                    <p>"Adotei o Max há um ano e ele transformou a minha vida!" - João</p>
                </div>
                <div class="story">
                    <img src="images/success2.jpg" alt="Animal adotado" aria-label="Animal adotado">
                    <p>"A Luna é a melhor companhia que eu poderia ter!" - Maria</p>
                </div>
            </div>
        </section>

        <section class="about">
            <h2>Sobre Nós</h2>
            <p>Nome da Organização</p>
            <img src="images/logo.png" alt="Logotipo da Organização" aria-label="Logotipo da Organização">
            <p>Missão: Nossa missão é encontrar lares amorosos para cada animal.</p>
            <p>Contato: <a href="mailto:contato@adoteumamigo.org">contato@adoteumamigo.org</a></p>
        </section>

        <section class="additional-resources">
            <h2>Recursos Adicionais</h2>
            <div class="videos">
                <video controls aria-label="Vídeo de um animal">
                    <source src="videos/animal1.mp4" type="video/mp4">
                    Seu navegador não suporta o vídeo.
                </video>
            </div>
            <div class="testimonials">
                <blockquote>
                    <p>"Adotar foi a melhor decisão que tomei!" - Pedro</p>
                </blockquote>
            </div>
            <div class="blog">
                <a href="blog.php" class="button">Leia nosso Blog</a>
            </div>
            <div class="social-media">
                <a href="https://facebook.com" class="button" aria-label="Compartilhar no Facebook">Compartilhar no Facebook</a>
                <a href="https://twitter.com" class="button" aria-label="Compartilhar no Twitter">Compartilhar no Twitter</a>
            </div>
        </section>
    </main>

    <?php include 'includes/menu.html'; ?>

    <script src="js/script.js"></script>
</body>
</html>


