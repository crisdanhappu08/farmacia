<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Contraseña</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .forgot-password-container {
            background-color: #fff;
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }
        .forgot-password-container h3 {
            text-align: center;
            font-weight: bold;
            color: #00ff40;
            margin-bottom: 20px;
        }
        .form-control {
            border-radius: 25px;
        }
        .reset-btn {
            background-color: #00b33c;
            color: white;
            border-radius: 25px;
            padding: 10px;
            border: none;
        }
        .reset-btn:hover {
            background-color: #21b300;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .back-to-login {
            text-align: center;
            margin-top: 15px;
        }
        .back-to-login a {
            color: #0400ff;
            text-decoration: none;
        }
        .back-to-login a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="forgot-password-container">
        <h3>Recuperar Contraseña</h3>
        <p class="text-muted text-center mb-4">Ingresa tu correo electrónico para recibir un enlace de recuperación</p>
        <form action="/forgotPassword" method="POST">
            <!-- Protección CSRF si estás usando un framework como Laravel -->
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group">
                <label for="email">Correo Electrónico</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Ingresa tu correo electrónico" required>
            </div>

            <button type="submit" class="btn reset-btn w-100">Enviar Enlace</button>
            <div class="back-to-login mt-4">
                <p class="text-muted">¿Ya recuerdas tu contraseña? <a href="/login">Inicia sesión</a></p>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
