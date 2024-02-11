<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mecánica de Fluidos</title>
    <link rel="icon" type="image/x-icon" href="/MecFluidos/imagenes/unimar-icono.ico">
    <link rel="stylesheet" href="/MecFluidos/Styles/header-tema.css">
    <link rel="stylesheet" href="/MecFluidos/Styles/tema10.css">
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
        <h2>Tema 10: Áreas planas sumergidas general.</h2>
        <br>
        <div class="texto">Los muros de contención son ejemplos típicos de paredes rectangulares expuestas a una presión que varía desde cero, en la superficie del fluido, hasta un máximo, en la parte inferior de la pared.</div>
        <h3>Centro de presión</h3>
        <div class="texto">La fuerza real se distribuye sobre la superficie de la pared, pero para fines de análisis, es conveniente determinar la fuerza resultante y el sitio donde anda.</div>
        <div class="formula-container">
            <img class="diagrama-APSG" src="/MecFluidos/imagenes/diagrama-APSG.png">
            <img class="APSG1-formula" src="/MecFluidos/imagenes/formula-APSG1.png">
            <img class="APSG2-formula" src="/MecFluidos/imagenes/formula-APSG2.png">
            <img class="APSG4-formula" src="/MecFluidos/imagenes/formula-APSG4.png">
            <img class="APSG3-formula" src="/MecFluidos/imagenes/formula-APSG3.png">
        </div>
        <div class="leyenda-formula">
            <ul>
                <li><div class="texto">γ: Peso específico [N/m<sup>3</sup>], [Lb/pies<sup>3</sup>]</div></li>
                <li><div class="texto">d<sub>e</sub>: Profundidad vertical del centroide [m], [pies]</div></li>
                <li><div class="texto">A: Área [m<sup>2</sup>], [pies<sup>2</sup>]</div></li>
                <li><div class="texto">F<sub>r</sub>: Fuerza resultante [N], [Lb]</div></li>
                <li><div class="texto">L<sub>e</sub>: Distancia entre superficie del fluido y centroide del área [m], [pies]</div></li>
                <li><div class="texto">θ: Ángulo de elevación [°], [rad]</div></li>
                <li><div class="texto">I<sub>x</sub>: Momento de inercia [m<sup>4</sup>], [pies<sup>4</sup>]</div></li>
                <li><div class="texto">B, H: Dimensiones del área [m], [pies]</div></li>
                <li><div class="texto">L<sub>p</sub>: Distancia entre superficie del fluido y centro de presión [m], [pies]</div></li>
            </ul>
        </div>
        <br>
        <h3>Ejemplo:</h3>
        <div class="texto">El tanque contiene aceite lubricante con una gravedad de 0,91. El portillo rectangular con dimensiones B=4 pies y H=2 pies está situado a la pared inclinada del tanque (θ=60°). El centroide está ubicado a una profundidad de 5 pies a partir de la superficie de aceite. Calcule la magnitud de la fuerza resultante y la localización del centro de presión.</div>
        <br>
        <div class="ejercicio">
            <img class="imagen-procedimiento" src="/MecFluidos/imagenes/ejercicio-APSG.png">
        </div>
        <div class="texto"><b>Respuesta:</b> la fuerza resultante vale 2271,36 Lb y el centro de presión se encuentra a 5,83 pies.</div>
        <br>
        <h3 class="enlaces-interes">Enlaces de Interés</h3>
        <ol>
            <li class="texto"><a href="https://mecanicodelosfluidosudg.blogspot.com/2016/03/mecanica-de-fluidos-areas-planas.html" class="enlace">https://mecanicodelosfluidosudg.blogspot.com/2016/03/mecanica-de-fluidos-areas-planas.html</a></li>
            <li class="texto"><a href="https://prezi.com/rpxtsygoknwx/fuerzas-sobre-areas-planas-sumergidas-en-general/" class="enlace">https://prezi.com/rpxtsygoknwx/fuerzas-sobre-areas-planas-sumergidas-en-general/</a></li>
            <li class="texto"><a href="https://www.youtube.com/watch?v=snSJJvOAXro" class="enlace">https://www.youtube.com/watch?v=snSJJvOAXro</a></li>
        </ol>
    </div>
    <script src="/MecFluidos/Scripts/play-music.js"></script>
</body>
</html>