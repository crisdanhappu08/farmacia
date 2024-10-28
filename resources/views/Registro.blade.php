<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            background-color: #f0f2f5;
            font-family: 'Roboto', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .register-container {
            background-color: #ffffff;
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 450px;
            position: relative;
        }

        .register-container::before {
            content: '';
            position: absolute;
            top: -30px;
            left: calc(50% - 30px);
            width: 60px;
            height: 60px;
            background-color: #007bff;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 0 20px rgba(0, 123, 255, 0.5);
        }

        .register-container::before i {
            color: white;
            font-size: 28px;
        }

        h3 {
            font-weight: 500;
            margin-bottom: 30px;
            text-align: center;
            color: #343a40;
        }

        .form-control {
            border-radius: 10px;
            padding: 12px;
            border: 1px solid #ced4da;
            transition: border-color 0.3s;
        }

        .form-control:focus {
            border-color: #007bff;
            box-shadow: none;
        }

        .register-btn {
            background-color: #007bff;
            color: white;
            border-radius: 10px;
            border: none;
            padding: 12px;
            transition: background-color 0.3s;
        }

        .register-btn:hover {
            background-color: #0056b3;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .text-center {
            margin-top: 20px;
        }

        .text-muted {
            color: #6c757d;
        }

        .text-primary {
            color: #007bff;
        }

        .text-primary:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="register-container">
        <i class="fas fa-user-edit"></i> <!-- Icono de registro de usuario -->
        <h3>Registro de Usuario</h3>
        <form action="/registros" method="POST">
            @csrf <!-- Directiva de Blade para CSRF -->
            <div class="form-group">
                <label for="first_name">Nombre</label>
                <input type="text" class="form-control" name="nombre" placeholder="Ingresa tu nombre" required>
            </div>

            <div class="form-group">
                <label for="last_name">Apellido</label>
                <input type="text" class="form-control" name="apellido" placeholder="Ingresa tu apellido" required>
            </div>

            <div class="form-group">
                <label for="username">Nombre de usuario</label>
                <input type="text" class="form-control" name="username" placeholder="Crea un nombre de usuario" required>
            </div>

            <div class="form-group">
                <label for="email">Correo electrónico</label>
                <input type="email" class="form-control" name="email" placeholder="Ingresa tu correo electrónico" required>
            </div>

            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" class="form-control" name="password" placeholder="Crea una contraseña" required>
            </div>

            <div class="form-group">
                <label for="confirm_password">Confirmar Contraseña</label>
                <input type="password" class="form-control" name="confirmpassword" placeholder="Confirma tu contraseña" required>
            </div>

            <button type="submit" class="btn register-btn w-100">Registrar</button>
            <div class="text-center mt-3">
                <p class="text-muted">¿Ya tienes una cuenta? <a href="/login" class="text-primary">Inicia sesión aquí</a></p>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
