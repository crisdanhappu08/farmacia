<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .btn-back {
            position: fixed;
            top: 20px;
            left: 20px;
            background-color: #6c757d;
            color: white;
            font-weight: bold;
            border-radius: 50px;
            padding: 8px 15px;
        }

        .btn-back:hover {
            background-color: #5a6268;
        }

        .product-card {
            transition: transform 0.3s, box-shadow 0.3s;
            border-radius: 10px;
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            background-color: #fff;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }

        .product-image {
            height: 220px;
            object-fit: cover;
        }

        .product-name {
            font-weight: bold;
            color: #333;
            font-size: 1.2em;
        }

        .product-price {
            color: #4A90E2;
            font-weight: bold;
            font-size: 1.1em;
        }

        .product-description {
            font-size: 0.9em;
            color: #6c757d;
        }

        .btn-add-cart {
            background-color: #4A90E2;
            color: #fff;
            font-weight: bold;
            width: 100%;
            border-radius: 8px;
        }

        .btn-add-cart:hover {
            background-color: #357ABD;
        }
    </style>
</head>
<body>
    <form action="/compra" method="POST">
        @csrf
    <a href="javascript:history.back()" class="btn btn-back">&larr; Regresar</a>
    <div class="container py-5">
        <h2 class="text-center mb-5">Catálogo de Productos</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($medicamentos as $medicamento)
                <div class="col">
                    <div class="card product-card h-100">
                        <img src={{$medicamento['url']}} class="card-img-top product-image" alt="Producto {{ $medicamento['nombre'] }}">
                        <div class="card-body text-center">
                            <h5 class="product-name">{{ $medicamento['nombre'] }}</h5>
                            <p class="product-price">${{ $medicamento['precio'] }}</p>
                            <p class="product-description">{{ $medicamento['descripcion'] }}</p>
                            <a class="btn btn-add-cart mt-3" href="/comprar">Comprar</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
