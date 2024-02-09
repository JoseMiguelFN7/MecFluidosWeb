<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mecanica de Fluidos</title>
    <link rel="stylesheet" href="/MecFluidos/Styles/Index.css">
    <link rel="stylesheet" href="/MecFluidos/Styles/Header.css">
</head>
<body>
    <header>
        <div class="info">
            <div class="materia"><a href="/MecFluidos/Index.php">Mecánica de Fluidos</a></div>
            <div class="autor">© Copyright José Ferreira. V-28.315.655</div>
        </div>
        <div class="logo-container"><a href="https://portalunimar.unimar.edu.ve"><img src="/MecFluidos/imagenes/logounimar.jpg" class="logo-unimar"></a></div>
    </header>
    <hr class="line">
    <div class="titulo">
        <div class="audio-container">
            <img id="audio-icon" src="/MecFluidos/imagenes/no-audio-icon.png" onclick="playAudio()"> <audio id="bg-music" src="/MecFluidos/musica/wiiMusic.mp3" loop>
        </div>
        <h2 class="titulo-text">Lista de Contenidos</h2>
    </div>
    <div class="list-container">
        <ol class="lista-contenidos">
            <a class="tema-link" href="/MecFluidos/temas/tema1.php"><li class="tema">Tema 1: Densidad.</li></a>
            <a class="tema-link" href="/MecFluidos/temas/tema6.php"><li class="tema">Tema 6: Manómetro.</li></a>
            <a class="tema-link" href="/MecFluidos/temas/tema2.php"><li class="tema">Tema 2: Peso específico.</li></a>
            <a class="tema-link" href="/MecFluidos/temas/tema7.php"><li class="tema">Tema 7: Barómetro.</li></a>
            <a class="tema-link" href="/MecFluidos/temas/tema3.php"><li class="tema">Tema 3: Gravedad específica.</li></a>
            <a class="tema-link" href="/MecFluidos/temas/tema8.php"><li class="tema">Tema 8: Superficie plana horizontal bajo líquido.</li></a>
            <a class="tema-link" href="/MecFluidos/temas/tema4.php"><li class="tema">Tema 4: Presión.</li></a>
            <a class="tema-link" href="/MecFluidos/temas/tema9.php"><li class="tema">Tema 9: Paredes rectangulares.</li></a>
            <a class="tema-link" href="/MecFluidos/temas/tema5.php"><li class="tema">Tema 5: Viscosidad.</li></a>
            <a class="tema-link" href="/MecFluidos/temas/tema10.php"><li class="tema">Tema 10: Áreas planas sumergidas general.</li></a>
        </ol>
    </div>
    <div class="contador-container"><div class="contador">Número de visitas: <b class="visit-number"><?php include 'Scripts/contador.php';?></b></div></div>
    <div class="video-container"><iframe width="560" height="315" src="https://www.youtube.com/embed/_lMbKpYXQUw?si=cuAidst2QsOgIaCv" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
    <div class="pie-pagina">En esta página podrá conseguir información referente a distintos contenidos de la materia Mecánica de fluidos vistos hasta ahora: definiciones, fórmulas, ejercicios resueltos, entre otros.</div>
    <script src="/MecFluidos/Scripts/play-music.js"></script>
</body>
</html>