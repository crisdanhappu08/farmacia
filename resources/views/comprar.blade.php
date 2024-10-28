<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra de Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f9f9f9;
            font-family: 'Verdana', sans-serif;
        }

        .btn-back {
            position: fixed;
            top: 20px;
            left: 20px;
            background-color: #0073bb;
            color: white;
            font-weight: bold;
            border-radius: 50px;
            padding: 10px 20px;
            text-decoration: none;
        }

        .btn-back:hover {
            background-color: #005c93;
        }

        .purchase-card {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        .section-title {
            font-weight: bold;
            font-size: 1.3em;
            color: #333;
            margin-top: 20px;
        }

        .form-label {
            font-weight: bold;
            color: #555;
        }

        .btn-confirm {
            background-color: #28a745;
            color: white;
            font-weight: bold;
            width: 100%;
            border: none;
            padding: 10px;
            transition: background-color 0.3s ease;
        }

        .btn-confirm:hover {
            background-color: #218838;
        }

        .product-info {
            color: #333;
            font-size: 1.2em;
            margin-bottom: 20px;
        }

        .price-info {
            font-size: 1.8em;
            color: #b12704;
            font-weight: bold;
        }

        .checkbox-label {
            font-size: 0.9em;
            color: #555;
        }

        .form-select, .form-control {
            border-radius: 5px;
            border: 1px solid #ddd;
        }

        .text-muted {
            font-size: 0.9em;
            margin-top: 10px;
        }

        .icon {
            font-size: 50px;
            color: #0073bb;
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <!-- Botón de regreso -->
    <a href="javascript:history.back()" class="btn btn-back">
        <i class="fas fa-arrow-left"></i> Regresar
    </a>

    <!-- Contenedor principal -->
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="purchase-card">
                    <!-- Icono de Compra -->
                    <div class="icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <!-- Información del Producto -->
                    <h4 class="product-info">Compra de Producto</h4>
                    <p class="section-title">Producto Seleccionado</p>
                    <p><strong>Nombre:</strong> Producto Ejemplo</p>
                    <p class="price-info">$199.99</p>

                    <!-- Cantidad a Comprar -->
                    <p class="section-title">Cantidad</p>
                    <div class="mb-4">
                        <label for="cantidad" class="form-label">Cantidad:</label>
                        <input type="number" id="cantidad" class="form-control" min="1" value="1">
                    </div>

                    <!-- Método de Pago -->
                    <p class="section-title">Método de Pago</p>
                    <div class="mb-4">
                        <label for="metodoPago" class="form-label">Método de Pago:</label>
                        <select id="metodoPago" class="form-select">
                            <option value="tarjeta">Tarjeta de Crédito/Débito</option>
                            <option value="paypal">PayPal</option>
                            <option value="transferencia">Transferencia Bancaria</option>
                        </select>
                    </div>

                    <!-- Dirección de Envío -->
                    <p class="section-title">Dirección de Envío</p>
                    <div class="mb-4">
                        <label for="direccion" class="form-label">Dirección:</label>
                        <textarea id="direccion" class="form-control" rows="2" placeholder="Ingrese su dirección"></textarea>
                        <small class="text-muted">Entrega en 2-3 días hábiles.</small>
                    </div>

                    <!-- Opciones adicionales -->
                    <p class="section-title">Opciones Adicionales</p>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="giftWrap">
                        <label class="form-check-label checkbox-label" for="giftWrap">Agregar envoltura de regalo (+$5.00)</label>
                    </div>
                    <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" id="saveInfo">
                        <label class="form-check-label checkbox-label" for="saveInfo">Guardar mis datos para futuras compras</label>
                    </div>

                    <!-- Confirmación de Compra -->
                    <button class="btn btn-confirm">Confirmar Compra</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
