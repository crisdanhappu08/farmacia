<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Medicamentos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }

        .form-container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 50px auto;
            border-left: 5px solid #007bff;
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 28px;
            font-weight: bold;
            color: #007bff;
        }

        label {
            font-weight: 600;
            color: #333333;
        }

        .form-control {
            border-radius: 8px;
            padding: 12px;
            font-size: 16px;
            border: 1px solid #ced4da;
            transition: border-color 0.3s;
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #007bff;
        }

        .btn-primary {
            width: 100%;
            padding: 12px;
            border-radius: 8px;
            background-color: #007bff;
            border: none;
            font-size: 18px;
            transition: background-color 0.3s ease;
            color: white;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-regresar {
            width: 100%;
            padding: 12px;
            border-radius: 8px;
            background-color: #6c757d; /* Gris oscuro */
            border: none;
            font-size: 18px;
            color: rgb(255, 255, 255);
            transition: background-color 0.3s ease;
            margin-top: 10px;
        }

        .btn-regresar:hover {
            background-color: #5a6268;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group textarea {
            resize: none;
        }

        .icon {
            text-align: center;
            margin-bottom: 20px;
        }

        .icon i {
            font-size: 60px;
            color: #007bff;
        }

        /* Media Queries for Responsive Design */
        @media (max-width: 576px) {
            .form-container {
                padding: 20px;
            }

            h2 {
                font-size: 24px;
            }

            .btn-primary, .btn-regresar {
                font-size: 16px;
            }
        }
    </style>
</head>

<body>
    <div class="form-container">
        <div class="icon">
            <i class="fas fa-pills"></i>
        </div>
        <h2>Registro de Medicamentos</h2>
        <form action="/medicamento" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre del Medicamento</label>
                <input type="text" class="form-control" name="nombre" placeholder="Ingresa el nombre del medicamento" required>
            </div>
            <div class="form-group">
                <label for="url">URL del Producto</label>
                <input type="text" class="form-control" name="url" placeholder="Ingresa la URL del producto">
            </div>

            <div class="form-group">
                <label for="precio">Precio</label>
                <input type="number" class="form-control" name="precio" step="0.01" placeholder="Ingresa el precio del medicamento" required>
            </div>

            <div class="form-group">
                <label for="cantidad_disponible">Cantidad Disponible</label>
                <input type="number" class="form-control" name="cantidad_disponible" placeholder="Ingresa la cantidad disponible" required>
            </div>

            <div class="form-group">
                <label for="categoria">Categoría</label>
                <select class="form-control" name="categoria" required>
                    <option value="" disabled selected>Selecciona una categoría</option>
                    <option value="analgésico">Analgésico</option>
                    <option value="antibiótico">Antibiótico</option>
                    <option value="antihistamínico">Antihistamínico</option>
                    <option value="suplemento">Suplemento</option>
                    <option value="hidratante">Hidratante</option>
                </select>
            </div>

            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea class="form-control" name="descripcion" rows="4" placeholder="Ingresa una breve descripción del medicamento" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Agregar Medicamento</button>
        </form>
        <button class="btn btn-regresar" onclick="window.history.back()">
            <i class="fas fa-arrow-left"></i> Regresar
        </button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
