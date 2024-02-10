<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mecánica de Fluidos</title>
    <link rel="icon" type="image/x-icon" href="/MecFluidos/imagenes/unimar-icono.ico">
    <link rel="stylesheet" href="/MecFluidos/Styles/header-tema.css">
    <link rel="stylesheet" href="/MecFluidos/Styles/tema1.css">
</head>
<body>
    <header>
        <div class="info">
            <div class="materia"><a href="/MecFluidos/Index.php">Mecánica de Fluidos</a><div class="audio-container"><img id="audio-icon" src="/MecFluidos/imagenes/no-audio-icon.png" onclick="playAudio()"> <audio id="bg-music" src="/MecFluidos/musica/wiiMusic.mp3" loop></div></div>
            <div class="autor">© Copyright José Ferreira. V-28.315.655</div>
        </div>
        <div class="logo-container"><a href="https://portalunimar.unimar.edu.ve"><img src="/MecFluidos/imagenes/logounimar.jpg" class="logo-unimar"></a></div>
    </header>
    <hr>
    <div class="header-bottom">
    <a class="tema-button" href="tema1.php">
            <div>tema 1</div><div class="tooltip">Densidad</div>
        </a>
        <a class="tema-button" href="tema2.php">
            <div>tema 2</div><div class="tooltip">Peso específico</div>
        </a>
        <a class="tema-button" href="tema3.php">
            <div>tema 3</div><div class="tooltip">Gravedad específica</div>
        </a>
        <a class="tema-button" href="tema4.php">
            <div>tema 4</div><div class="tooltip">Presión</div>
        </a>
        <a class="tema-button" href="tema5.php">
            <div>tema 5</div><div class="tooltip">Viscosidad</div>
        </a>
        <a class="tema-button" href="tema6.php">
            <div>tema 6</div><div class="tooltip">Manómetro</div>
        </a>
        <a class="tema-button" href="tema7.php">
            <div>tema 7</div><div class="tooltip">Barómetro</div>
        </a>
        <a class="tema-button" href="tema8.php">
            <div>tema 8</div><div class="tooltip">Superficie plana horizontal bajo líquido</div>
        </a>
        <a class="tema-button" href="tema9.php">
            <div>tema 9</div><div class="tooltip">Paredes rectangulares</div>
        </a>
        <a id="T10" class="tema-button" href="tema10.php">
            <div>tema 10</div><div class="tooltip" id="T10">Áreas planas sumergidas general</div>
        </a>
    </div>
    <hr class="line">
    <div class="info-tema">
        <h2>Tema 1: Densidad.</h2>
        <br>
        <div class="texto">La densidad es una magnitud escalar referida a la cantidad de masa en un determinado volumen de una sustancia o un objeto sólido. En otras palabras, es la cantidad de masa por unidad de volumen de sustancia. Se denota por la letra griega ρ:</div>
        <div class="formula-container"><img class="densidad-formula" src="/MecFluidos/imagenes/formula-densidad.png"></div>
        <div class="leyenda-formula">
            <ul>
                <li><div class="texto">m: Masa [kg], [slug]</div></li>
                <li><div class="texto">V: Volumen [m<sup>3</sup>], [pies<sup>3</sup>]</div></li>
                <li><div class="texto">ρ: Densidad [kg/m<sup>3</sup>], [slug/pies<sup>3</sup>]</div></li>
            </ul>
        </div>
        <br>
        <h3>Ejemplo:</h3>
        <div class="texto">Un cubo sólido mide 6.00 m en cada lado y tiene una masa de 0.583 kg. ¿Cuál es su densidad en kg/m<sup>3</sup>?</div>
        <br>
        <div class="ejercicio">
            <img class="imagen-dibujo" src="/MecFluidos/imagenes/ejercicio-densidad1.jpg">
            <img class="imagen-procedimiento" src="/MecFluidos/imagenes/ejercicio-densidad2.png">
        </div>
        <div class="texto"><b>Respuesta:</b> El cubo tiene una densidad de 0,0027 kg/m<sup>3</sup>.</div>
        <br>
        <h3 class="enlaces-interes">Enlaces de Interés</h3>
        <ol>
            <li class="texto"><a href="https://concepto.de/densidad/" class="enlace">https://concepto.de/densidad/</a></li>
            <li class="texto"><a href="https://www.todamateria.com/densidad/" class="enlace">https://www.todamateria.com/densidad/</a></li>
            <li class="texto"><a href="https://quimiciencia3.blogspot.com/p/blog-page_10.html" class="enlace">https://quimiciencia3.blogspot.com/p/blog-page_10.html</a></li>
        </ol>
    </div>
    <script src="/MecFluidos/Scripts/play-music.js"></script>
</body>
</html>