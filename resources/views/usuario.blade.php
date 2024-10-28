<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #e9ecef;
            font-family: 'Arial', sans-serif;
            padding: 40px;
        }

        .table-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .table {
            margin-top: 20px;
            border-collapse: collapse;
        }

        .table th {
            background-color: #007bff;
            color: white;
            font-weight: bold;
        }

        .table td {
            vertical-align: middle;
            border-top: 1px solid #dee2e6;
        }

        .btn {
            border-radius: 5px;
            font-size: 14px;
        }

        .btn-edit {
            background-color: #28a745;
            color: white;
        }

        .btn-edit:hover {
            background-color: #218838;
        }

        .btn-delete {
            background-color: #dc3545;
            color: white;
        }

        .btn-delete:hover {
            background-color: #c82333;
        }

        .btn-info {
            background-color: #17a2b8;
            color: white;
        }

        .btn-info:hover {
            background-color: #138496;
        }

        .text-muted {
            font-size: 0.85rem;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container table-container">
        <h2>Lista de Usuarios</h2>
        <div class="d-flex justify-content-between mb-3">
            <a href="/registro" class="btn btn-info">Crear usuario</a>
            <a href="/menu" class="btn btn-info">Salir</a>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th>Rol</th>
                    <th>Nombre de Usuario</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usuarios as $usuario)
                <tr>
                    <td>{{$usuario['id']}}</td>
                    <td>{{$usuario['nombre']}}</td>
                    <td>{{$usuario['apellido']}}</td>
                    <td>{{$usuario['email']}}</td>
                    <td>{{$usuario['rol']}}</td>
                    <td>{{$usuario['nombreUsuario']}}</td>
                    <td>
                        <button class="btn btn-edit"><i class="fas fa-edit"></i> Editar</button>
                        <button class="btn btn-delete"><i class="fas fa-trash"></i> Eliminar</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <p class="text-muted">Total de usuarios: {{ count($usuarios) }}</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
