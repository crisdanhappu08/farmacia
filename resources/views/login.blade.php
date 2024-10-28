<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Enlace a Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <style>
        body {
            background-image: url('https://images.pexels.com/photos/593451/pexels-photo-593451.jpeg?auto=compress&cs=tinysrgb&w=600');
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            backdrop-filter: blur(5px);
        }

        .login-container {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 400px;
            transition: transform 0.2s;
        }

        .login-container:hover {
            transform: scale(1.02);
        }

        .login-container h3 {
            font-weight: bold;
            margin-bottom: 30px;
            text-align: center;
            color: #4A90E2;
        }

        .form-control {
            border-radius: 25px;
            border: 1px solid #ccc;
            transition: border-color 0.3s;
        }

        .form-control:focus {
            border-color: #4A90E2;
            box-shadow: 0 0 5px rgba(74, 144, 226, 0.5);
        }

        .login-btn {
            background-color: #4A90E2;
            color: #fff;
            border-radius: 25px;
            border: none;
            padding: 10px;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .login-btn:hover {
            background-color: #357ABD;
        }

        .register-link {
            color: #006eff;
            text-decoration: none;
        }

        .register-link:hover {
            text-decoration: underline;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .text-center {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="login-container">
        @if (session('alert'))
            <div class="alert alert-danger">
                <b>Usuario no encontrado</b>
            </div>
        @endif

        <h3>Iniciar Sesión</h3>
        <form action="/loginCreate" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Correo electrónico</label>
                <input type="text" class="form-control" name="email" placeholder="Ingresa tu correo" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <div class="input-group">
                    <input type="password" class="form-control" id="password" name="contrasena" placeholder="Ingresa tu contraseña" required>
                    <button type="button" class="btn btn-outline-secondary" onclick="togglePassword()">
                        <i id="toggleIcon" class="bi bi-eye"></i>
                    </button>
                </div>
            </div>
            <button type="submit" class="btn login-btn w-100">Iniciar Sesión</button>
            <i></i>
            <div class="text-center mt-3">
                <a href="/contrasena" class="text-muted">¿Olvidaste tu contraseña?</a>
            </div>
            <div class="text-center mt-3">
                <p class="text-muted">¿Aún no estás registrado? <a href="/registro" class="register-link">Regístrate aquí</a></p>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function togglePassword() {
            const passwordInput = document.getElementById("password");
            const toggleIcon = document.getElementById("toggleIcon");

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                toggleIcon.classList.remove("bi-eye");
                toggleIcon.classList.add("bi-eye-slash");
            } else {
                passwordInput.type = "password";
                toggleIcon.classList.remove("bi-eye-slash");
                toggleIcon.classList.add("bi-eye");
            }
        }
    </script>
</body>

</html>
