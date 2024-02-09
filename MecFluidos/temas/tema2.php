<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mecanica de Fluidos</title>
    <link rel="stylesheet" href="/MecFluidos/Styles/header-tema.css">
    <link rel="stylesheet" href="/MecFluidos/Styles/tema2.css">
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
        <h2>Tema 2: Peso específico.</h2>
        <br>
        <div class="texto">El peso específico es la relación existente entre el peso y el volumen que ocupa una sustancia en el espacio. En otras palabras, es la cantidad de peso por unidad de volumen de una sustancia. Se denota por la letra griega γ:</div>
        <div class="formula-container"><img class="PE-formula" src="/MecFluidos/imagenes/formula-PE.png"></div>
        <div class="leyenda-formula">
            <ul>
                <li><div class="texto">w: Peso [N], [Lb]</div></li>
                <li><div class="texto">V: Volumen [m<sup>3</sup>], [pies<sup>3</sup>]</div></li>
                <li><div class="texto">γ: Peso específico [N/m<sup>3</sup>], [Lb/pies<sup>3</sup>]</div></li>
            </ul>
        </div>
        <br>
        <h3>Relación Peso específico-densidad (γ-ρ)</h3>
        <div class="formula-container"><img class="relacionPE-densidad" src="/MecFluidos/imagenes/relacionPE-densidad.png"></div>
        <h3>Ejemplo:</h3>
        <div class="texto">Un recipiente posee una masa de 825 kg. Si el recipiente tiene un volumen de 0,917 m<sup>3</sup>. Calcule el peso específico y la densidad de la sustancia.</div>
        <br>
        <div class="ejercicio">
            <img class="imagen-procedimiento" src="/MecFluidos/imagenes/ejercicio-PE.png">
        </div>
        <div class="texto"><b>Respuesta:</b> La sustancia tiene un peso específico de 8828,79 N/m<sup>3</sup> y una densidad de 899,67 kg/m<sup>3</sup>.</div>
        <br>
        <h3 class="enlaces-interes">Enlaces de Interés</h3>
        <ol>
            <li class="texto"><a href="https://concepto.de/peso-especifico/" class="enlace">https://concepto.de/peso-especifico/</a></li>
            <li class="texto"><a href="https://www.fisimat.com.mx/densidad-y-peso-especifico/" class="enlace">https://www.fisimat.com.mx/densidad-y-peso-especifico/</a></li>
            <li class="texto"><a href="https://www.ejemplode.com/37-fisica/4922-peso_especifico.html" class="enlace">https://www.ejemplode.com/37-fisica/4922-peso_especifico.html</a></li>
        </ol>
    </div>
    <script src="/MecFluidos/Scripts/play-music.js"></script>
</body>
</html>