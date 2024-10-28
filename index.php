<?php
session_start();
include './conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
    <title>SweetGoals</title>
</head>

<body>
    <header>
        <nav class="nav">
            <a class="logo" href="home.php"><img src="./img/sweetgoals-logo2 .png" alt=""></a>

            <ul class="nav-list">
            <?php
                if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
                    echo '<div class="btn-a">';
                    echo '<a class="btn-sair" href="./back-end/logout.php"><ion-icon name="exit-outline"></ion-icon>Sair</a>';
                    echo '</div>';
                } else {
                    echo '<li><a href="./login.php">Entrar</a></li>';
                }
            ?>
                <li><a href="#">Contatos</a></li>
                <li><a href="#">Cardápio</a></li>
            </ul>
        </nav>
        <nav class="marcas">
            <ul class="marcas-list">
                <li><a href="#">Marca A</a></li>
                <li><a href="#">Marca B</a></li>
                <li><a href="#">Marca C</a></li>
                <li><a href="#">Marca D</a></li>
                <li><a href="#">Marca E</a></li>
                <li><a href="#">Marca F</a></li>
                <li><a href="#">Marca F</a></li>
                <li><a href="#">Marca F</a></li>
                <li><a href="#">Marca F</a></li>
                <li><a href="#">Marca F</a></li>
            </ul>
        </nav>
    </header>

    <div class="carrossel">
    <input type="radio" name="radio-btn" id="slide1" checked>
    <input type="radio" name="radio-btn" id="slide2">
    <input type="radio" name="radio-btn" id="slide3">

    <div class="slides">
        <div class="slide first">
            <img src="./img/banners/1.png" alt="Promoção 1">
        </div>
        <div class="slide">
        <img src="./img/banners/2.png" alt="Promoção 1">
        </div>
        <div class="slide">
        <img src="./img/banners/3.png" alt="Promoção 1">
        </div>
    </div>

    <!-- Navegação das setas -->
    <a class="prev" onclick="mudarSlide(-1)">&#10094;</a>
    <a class="next" onclick="mudarSlide(1)">&#10095;</a>

    <!-- Indicadores -->
    <div class="indicadores">
        <label for="slide1" class="indicador"></label>
        <label for="slide2" class="indicador"></label>
        <label for="slide3" class="indicador"></label>
    </div>
</div>


    <main>
   
    </main>
    <script src="./js/index.js"></script>
</body>

</html>