<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Granja</title>
    <style>
        /* Estilos CSS */
        body, html {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background-color: #1f1f2f;
            color: #fff;
        }

        .container {
            display: flex;
            height: 100vh;
        }

        .sidebar {
            width: 250px;
            background-color: #2a2a3c;
            padding: 20px;
        }

        .logo h1 {
            margin: 0;
            font-size: 24px;
            color: #e91e63;
        }

        .logo span {
            display: block;
            margin-top: 5px;
            font-size: 14px;
            color: #aaa;
        }

        .menu a {
            display: block;
            padding: 10px 20px;
            margin: 10px 0;
            text-decoration: none;
            color: #fff;
            border-radius: 5px;
            background: none;
            transition: 0.3s;
        }

        .menu a:hover, .menu a.active {
            background-color: #e91e63;
            color: #fff;
        }

        .main-content {
            flex: 1;
            padding: 20px;
        }

        .top-bar {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            margin-bottom: 20px;
        }

        .btn {
            padding: 10px 20px;
            background-color: #e91e63;
            border: none;
            border-radius: 5px;
            color: #fff;
            cursor: pointer;
        }

        .btn-download {
            background-color: #17c0eb;
        }

        .performance {
            margin-bottom: 20px;
        }

        .chart {
            height: 200px;
            background: #2a2a3c;
            border-radius: 10px;
        }

        .stats {
            display: flex;
            gap: 20px;
        }

        .stat-box {
            flex: 1;
            padding: 20px;
            background: #2a2a3c;
            border-radius: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <x-menudueno></x-menudueno>
        <main class="main-content">
            <x-triple></x-triple>
        </main>
    </div>
</body>
</html>
