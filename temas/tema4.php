<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mecánica de Fluidos</title>
    <link rel="icon" type="image/x-icon" href="/MecFluidos/imagenes/unimar-icono.ico">
    <link rel="stylesheet" href="/MecFluidos/Styles/header-tema.css">
    <link rel="stylesheet" href="/MecFluidos/Styles/tema4.css">
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
        <h2>Tema 4: Presión.</h2>
        <br>
        <div class="texto">La presión es la cantidad de fuerza ejercida sobre un área unitario de una sustancia.</div>
        <div class="formula-container"><img class="presion-formula" src="/MecFluidos/imagenes/formula-presion1.png"></div>
        <div class="leyenda-formula">
            <ul>
                <li><div class="texto">F: Fuerza [N], [Lb]</div></li>
                <li><div class="texto">A: Área [m<sup>2</sup>], [pulg<sup>2</sup>]</div></li>
                <li><div class="texto">P: Presión [N/m<sup>2</sup>]=[Pa], [Lb/pulg<sup>2</sup>]</div></li>
            </ul>
        </div>
        <br>
        <h3>Ejemplo 1:</h3>
        <div class="texto">Sobre un líquido encerrado en un recipiente se aplica una fuerza con una magnitud de 95 N mediante un pistón de área igual a 0.041 m<sup>2</sup> ¿Cuál es la presión?</div>
        <br>
        <div class="ejercicio">
            <img class="imagen-dibujo" src="/MecFluidos/imagenes/ejercicio-presion1.jpg">
            <img class="imagen-procedimiento1" src="/MecFluidos/imagenes/ejercicio-presion2.png">
        </div>
        <div class="texto"><b>Respuesta:</b> La presión sobre el líquido es de 2,32 kPa.</div>
        <br>
        <h3>Compresibilidad</h3>
        <div class="texto">Se refiere al cambio de volumen (V) de una sustancia que está sujeta a un cambio de presión que se ejerce en ella. Se utiliza el módulo volumétrico de elasticidad (módulo volumétrico, E)</div>
        <div class="formula-container"><img class="compresibilidad-formula" src="/MecFluidos/imagenes/formula-compresibilidad.png"></div>
        <div class="leyenda-formula">
            <ul>
                <li><div class="texto">∆P: Variación de presión [Pa], [Lb/pulg<sup>2</sup>]</div></li>
                <li><div class="texto">V: Volumen [m<sup>3</sup>], [pies<sup>3</sup>]</div></li>
                <li><div class="texto">∆V: Variación de volumen [m<sup>3</sup>], [pies<sup>3</sup>]</div></li>
                <li><div class="texto">E: Módulo volumétrico [Pa], [Lb/pulg<sup>2</sup>]</div></li>
            </ul>
        </div>
        <div class="list-container">
        <ul class="tabla-Compresibilidad">
            <li class="campo">Líquido</li></a>
            <li class="campo">Lb/pulg<sup>2</sup></li></a>
            <li class="campo">MPa</li></a>
            <li class="campo">Alcohol etílico</li></a>
            <li class="campo">130000</li></a>
            <li class="campo">896</li></a>
            <li class="campo">Benceno</li></a>
            <li class="campo">154000</li></a>
            <li class="campo">1062</li></a>
            <li class="campo">Aceite industrial</li></a>
            <li class="campo">189000</li></a>
            <li class="campo">1303</li></a>
            <li class="campo">Agua</li></a>
            <li class="campo">316000</li></a>
            <li class="campo">2179</li></a>
            <li class="campo">Glicerina</li></a>
            <li class="campo">654000</li></a>
            <li class="campo">4509</li></a>
            <li class="campo">Mercurio</li></a>
            <li class="campo">3590000</li></a>
            <li class="campo">24750</li></a>
        </ul>
    </div>
        <h3>Ejemplo 2:</h3>
        <div class="texto">Calcule el cambio de presión requerido para ocasionar una disminución en el volumen de alcohol Etílico de 1%. Exprese el resultado en MPa.</div>
        <br>
        <div class="ejercicio">
            <img class="imagen-procedimiento2" src="/MecFluidos/imagenes/ejercicio-compresibilidad.png">
        </div>
        <div class="texto"><b>Respuesta:</b> El cambio de presión requerido son 8,96 MPa.</div>
        <br>
        <h3>Relación presión-elevación</h3>
        <div class="texto">Consiste en el cambio de presión en un líquido homogéneo en reposo debido al cambio de elevación. Un aumento de la elevación ocasiona una disminución en la presión y viceversa.</div>
        <div class="formula-container"><img class="presion-elevacion-formula" src="/MecFluidos/imagenes/formula-presion-elevacion.png"></div>
        <div class="leyenda-formula">
            <ul>
                <li><div class="texto">γ: Peso específico [N/m<sup>3</sup>], [Lb/pulg<sup>3</sup>]</div></li>
                <li><div class="texto">h: Elevación [m], [pulg]</div></li>
                <li><div class="texto">∆P: Variación de presión [Pa], [Lb/pulg<sup>2</sup>]</div></li>
            </ul>
        </div>
        <h3>Ejemplo 3:</h3>
        <div class="texto">Calcule el cambio de presión de agua desde la superficie hasta una profundidad de 5m.</div>
        <br>
        <div class="ejercicio">
            <img class="imagen-procedimiento3" src="/MecFluidos/imagenes/ejercicio-presion-elevacion.png">
        </div>
        <div class="texto"><b>Respuesta:</b> La presión aumentó 49,05 kPa.</div>
        <br>
        <h3 class="enlaces-interes">Enlaces de Interés</h3>
        <ol>
            <li class="texto"><a href="https://concepto.de/presion-2/" class="enlace">https://concepto.de/presion-2/</a></li>
            <li class="texto"><a href="https://www.fisimat.com.mx/presion-hidrostatica/" class="enlace">https://www.fisimat.com.mx/presion-hidrostatica/</a></li>
            <li class="texto"><a href="https://www.fisicalab.com/tema/fuerza-y-presion-en-los-fluidos/ejercicios" class="enlace">https://www.fisicalab.com/tema/fuerza-y-presion-en-los-fluidos/ejercicios</a></li>
            <li class="texto"><a href="https://www.youtube.com/watch?v=loU4jzMPiw4" class="enlace">https://www.youtube.com/watch?v=loU4jzMPiw4</a></li>
        </ol>
    </div>
    <script src="/MecFluidos/Scripts/play-music.js"></script>
</body>
</html>