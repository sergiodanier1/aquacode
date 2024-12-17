<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Black Dashboard</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">

      <!-- Importar Chart.js desde CDN -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        /* Estilos CSS */
/* Estilos CSS */
body, html {
    margin: 0;
    padding: 0;
    font-family: 'Arial', sans-serif;
    background-color: #1f1f2f; /* Fondo negro anterior */
    color: #FFFFFF; /* Texto blanco */
}

.container {
    display: flex;
    height: 100vh;
}

.sidebar {
    width: 250px;
    background-color: #009FE3; /* Azul claro del logo */
    padding: 20px;
}

.logo h1 {
    margin: 0;
    font-size: 24px;
    color: #FFFFFF; /* Blanco */
}

.logo span {
    display: block;
    margin-top: 5px;
    font-size: 14px;
    color: #D6EFFF; /* Un blanco/azulado más tenue */
}

.menu a {
    display: block;
    padding: 10px 20px;
    margin: 10px 0;
    text-decoration: none;
    color: #FFFFFF; /* Texto blanco */
    border-radius: 5px;
    background: none;
    transition: 0.3s;
}

.menu a:hover, .menu a.active {
    background-color: #006C9C; /* Azul oscuro del logo */
    color: #FFFFFF; /* Blanco */
}

.main-content {
    flex: 1;
    padding: 20px;
    background-color: #1f1f2f; /* Negro original */
    color: #FFFFFF; /* Texto blanco */
}

.top-bar {
    display: flex;
    justify-content: flex-end;
    gap: 10px;
    margin-bottom: 20px;
}

.btn {
    padding: 10px 20px;
    background-color: #009FE3; /* Azul claro */
    border: none;
    border-radius: 5px;
    color: #FFFFFF; /* Blanco */
    cursor: pointer;
    transition: 0.3s;
}

.btn:hover {
    background-color: #006C9C; /* Azul oscuro */
}

.btn-download {
    background-color: #006C9C; /* Azul oscuro */
}

.performance {
    margin-bottom: 20px;
}

.chart {
    height: 200px;
    background: #2a2a3c; /* Gris oscuro anterior */
    border-radius: 10px;
}

.stats {
    display: flex;
    gap: 20px;
}

.stat-box {
    flex: 1;
    padding: 20px;
    background: #009FE3; /* Azul claro */
    border-radius: 10px;
    text-align: center;
    color: #FFFFFF; /* Texto blanco */
}
.stat-box:hover{
    background-color: #e91e63;
    color: #fff;
}
    </style>
</head>
<body>
    <div class="container">
        <x-menudueno></x-menudueno>

        <main class="main-content">
            <header class="top-bar">
                <button class="btn">Operario</button>
                <button class="btn btn-download">Administrador</button>
            </header>

            <x-simple></x-simple>
            <x-triple></x-triple>
        </main>
    </div>
</body>
</html>
