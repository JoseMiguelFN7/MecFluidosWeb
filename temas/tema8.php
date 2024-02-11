<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mecánica de Fluidos</title>
    <link rel="icon" type="image/x-icon" href="/MecFluidos/imagenes/unimar-icono.ico">
    <link rel="stylesheet" href="/MecFluidos/Styles/header-tema.css">
    <link rel="stylesheet" href="/MecFluidos/Styles/tema8.css">
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
        <h2>Tema 8: Superficie plana horizontal bajo líquido.</h2>
        <br>
        <div class="texto">Si las partículas de fluido no están en movimiento no hay fuerzas tangenciales actuando sobre ellas. Consideremos un volumen de líquido sobre la superficie terrestre. Si de ese volumen aislamos otro más pequeño, V', sobre éste actúan sólo fuerzas perpendiculares a la superficie: las fuerzas debido a la presión que ejerce el líquido.</div>
        <div class="formula-container"><img class="SPH-formula" src="/MecFluidos/imagenes/formula-SPH.png"></div>
        <div class="leyenda-formula">
            <ul>
                <li><div class="texto">∑P: Suma de presiones de fluidos [Pa]</div></li>
                <li><div class="texto">∆P: Variación de presión [Pa]</div></li>
            </ul>
        </div>
        <br>
        <div class="formula-container"><img class="FH-formula" src="/MecFluidos/imagenes/formula-fuerza-hidrostatica.png"></div>
        <div class="leyenda-formula">
            <ul>
                <li><div class="texto">P: Presión [Pa]</div></li>
                <li><div class="texto">A: Área [m<sup>2</sup>]</div></li>
                <li><div class="texto">F<sub>H</sub>: Fuerza hidrostática [N]</div></li>
            </ul>
        </div>
        <br>
        <h3>Ejemplo:</h3>
        <div class="texto">Calcule la fuerza hidrostática en el fondo del tanque cilíndrico.</div>
        <br>
        <div class="ejercicio">
            <img class="imagen-dibujo" src="/MecFluidos/imagenes/ejercicio-SPH1.png">
            <img class="imagen-procedimiento1" src="/MecFluidos/imagenes/ejercicio-SPH2.png">
        </div>
        <div class="texto"><b>Respuesta:</b> la fuerza hidrostática en el fondo del tanque cilíndrico es de 253,76 kN.</div>
        <br>
        <h3 class="enlaces-interes">Enlaces de Interés</h3>
        <ol>
            <li class="texto"><a href="https://es.slideshare.net/RolyParionaSilva/ejercicios-resueltos-dinamica-de-fluidos" class="enlace">https://es.slideshare.net/RolyParionaSilva/ejercicios-resueltos-dinamica-de-fluidos</a></li>
            <li class="texto"><a href="https://www.u-cursos.cl/ingenieria/2007/2/CI31A/1/material_docente/bajar%3Fid_material%3D142194" class="enlace">https://www.u-cursos.cl/ingenieria/2007/2/CI31A/1/material_docente/bajar%3Fid_material%3D142194</a></li>
            <li class="texto"><a href="https://www.youtube.com/watch?v=_3lnGQpF9eM" class="enlace">https://www.youtube.com/watch?v=_3lnGQpF9eM</a></li>
        </ol>
    </div>
    <script src="/MecFluidos/Scripts/play-music.js"></script>
</body>
</html>