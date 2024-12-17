<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Estilos CSS */
        body, html {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            height: 100%;
            background-image: url('/la_union.jpg'); /* Fondo de imagen */
            background-size: cover;
            background-position: center;
            color: #FFFFFF; /* Texto blanco */
        }

        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-box {
            background-color: rgba(31, 31, 47, 0.8); /* Fondo semi-transparente */
            padding: 30px;
            border-radius: 10px;
            width: 400px;
            text-align: center;
        }

        .logo {
            margin-bottom: 20px;
        }

        .logo img {
            width: 50%; /* Tamaño más grande para el logo */
            margin-bottom: 10px;
        }

        .logo h1 {
            font-size: 28px;
            color: #009FE3; /* Azul claro */
            margin: 0;
        }

        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }

        .form-group label {
            font-size: 14px;
            color: #D6EFFF; /* Blanco/azulado más tenue */
        }

        .form-group input {
            width: 100%;
            padding: 12px;
            background-color: #2a2a3c; /* Gris oscuro */
            border: none;
            border-radius: 5px;
            color: #FFFFFF;
            font-size: 16px;
        }

        .form-group input:focus {
            outline: none;
            border: 2px solid #009FE3; /* Azul claro */
        }

        .btn-login {
            width: 100%;
            padding: 12px;
            background-color: #009FE3; /* Azul claro */
            border: none;
            border-radius: 5px;
            color: #FFFFFF;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-login:hover {
            background-color: #006C9C; /* Azul oscuro */
        }

        .forgot-password {
            margin-top: 10px;
            color: #D6EFFF; /* Blanco/azulado más tenue */
            text-decoration: none;
            font-size: 14px;
        }

        .forgot-password:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <!-- Logo -->
            <div class="logo">
                <img src="/aquacode.png" alt="Logo">
                <h1>Mi Empresa</h1>
            </div>
            <!-- Formulario de Login -->
            <form action="/login" method="POST">
                @csrf
                <!-- Correo -->
                <div class="form-group">
                    <label for="email">Correo Electrónico</label>
                    <input type="email" id="email" name="email" required placeholder="Ingresa tu correo">
                </div>
                <!-- Contraseña -->
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" id="password" name="password" required placeholder="Ingresa tu contraseña">
                </div>
                <!-- Botón de Login -->
                <button type="submit" class="btn-login">Iniciar Sesión</button>
            </form>
            <!-- Enlace a la contraseña olvidada -->
            <a href="#" class="forgot-password">¿Olvidaste tu contraseña?</a>
        </div>
    </div>
</body>
</html>
