<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mecánica de Fluidos</title>
    <link rel="icon" type="image/x-icon" href="/MecFluidos/imagenes/unimar-icono.ico">
    <link rel="stylesheet" href="/MecFluidos/Styles/header-tema.css">
    <link rel="stylesheet" href="/MecFluidos/Styles/tema6.css">
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
        <h2>Tema 6: Manómetro.</h2>
        <br>
        <div class="texto">El manómetro utiliza la relación que existe entre un cambio de presión y un cambio de elevación de un fluido estático.</div>
        <br>
        <h3>Ejemplo:</h3>
        <div class="texto">El agua dentro de un recipiente se presuriza con aire y la presión se mide con un manómetro de varios fluidos como se muestra en la figura. Determine la presión manométrica del aire en el recipiente si h1 = 0.2 m, h2 = 0.3 m y h3 = 0.46 m. considere las densidades del agua, el aceite y el mercurio como 1000 kg/m3, 850 kg/m3 y 13600 kg/m3, respectivamente.</div>
        <br>
        <div class="ejercicio">
            <img class="imagen-dibujo" src="/MecFluidos/imagenes/ejercicio-manometro1.png">
            <img class="imagen-procedimiento1" src="/MecFluidos/imagenes/ejercicio-manometro2.png">
            <img class="imagen-procedimiento2" src="/MecFluidos/imagenes/ejercicio-manometro3.png">
        </div>
        <div class="texto"><b>Respuesta:</b> la presión manométrica del aire en el recipiente son 56,81 kN/m<sup>2</sup>.</div>
        <br>
        <h3 class="enlaces-interes">Enlaces de Interés</h3>
        <ol>
            <li class="texto"><a href="http://www.unet.edu.ve/~fenomeno/F_DE_T-114.htm" class="enlace">http://www.unet.edu.ve/~fenomeno/F_DE_T-114.htm</a></li>
            <li class="texto"><a href="https://ingenieriaenlinea.files.wordpress.com/2012/08/ejercicios-de-manometria4.pdf" class="enlace">https://ingenieriaenlinea.files.wordpress.com/2012/08/ejercicios-de-manometria4.pdf</a></li>
            <li class="texto"><a href="https://www.studocu.com/bo/document/universidad-autonoma-juan-misael-saracho/hidraulica-2/ejercicios-de-manometros-1-compress/20528310" class="enlace">https://www.studocu.com/bo/document/universidad-autonoma-juan-misael-saracho/hidraulica-2/ejercicios-de-manometros-1-compress/20528310</a></li>
        </ol>
    </div>
    <script src="/MecFluidos/Scripts/play-music.js"></script>
</body>
</html>