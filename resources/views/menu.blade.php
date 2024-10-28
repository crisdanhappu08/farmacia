<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Profesional de Farmacia</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f5f7fa;
        }

        .navbar {
            background-color: #2c3e50;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar-nav {
            display: flex;
            justify-content: flex-start;
            align-items: center;
        }

        .nav-link {
            color: white;
            font-weight: 500;
            transition: color 0.3s ease, transform 0.3s ease;
            padding: 10px 15px;
            border-radius: 5px;
        }

        .nav-link:hover {
            color: #ecf0f1;
            background-color: #34495e;
            transform: scale(1.1);
        }

        .nav-right {
            display: flex;
            align-items: center;
        }

        .user-info {
            display: flex;
            align-items: center;
            margin-right: 10px;
            color: #ecf0f1;
        }

        .user-info img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .content {
            padding: 30px;
            margin-top: 80px;
        }

        .card {
            margin-bottom: 20px;
            border-radius: 12px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease;
        }

        .card:hover {
            box-shadow: 0px 6px 16px rgba(0, 0, 0, 0.15);
        }

        .card-header {
            background-color: #34495e;
            color: white;
            font-size: 1.25rem;
            font-weight: 600;
            border-bottom: none;
            padding: 20px;
        }

        .card-body {
            padding: 20px;
        }

        .icon {
            font-size: 45px;
            color: #bdc3c7;
        }

        footer {
            margin-top: 40px;
            text-align: center;
            color: #7f8c8d;
            font-size: 0.9rem;
        }

        .chart-container {
            width: 55%;
            margin: 30px auto;
        }

        h1 {
            color: #2c3e50;
            font-weight: 600;
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <div class="navbar-nav">
                <a class="nav-link" href="/menu"><i class="fas fa-home"></i> Inicio</a>
                <a class="nav-link" href="/tabla-medicamento"><i class="fas fa-pills"></i> Registro Medicamentos</a>
                <a class="nav-link" href="/compra"><i class="fas fa-shopping-cart"></i> Compra</a>
                <a class="nav-link" href="/usuario"><i class="fas fa-users"></i> Usuario</a>
                <a class="nav-link" href="reportes"><i class="fas fa-chart-line"></i> Reportes</a>
                <a class="nav-link" href="acercade"><i class="fas fa-info-circle"></i> Acerca de</a>
            </div>
            <div class="nav-right">
                <div class="user-info">
                    <img src="https://via.placeholder.com/40" alt="Foto de perfil">
                    <div>
                        <span><strong>Usuario:</strong> Admin</span><br>
                        <span><strong>Rol:</strong> Administrador</span>
                    </div>
                </div>
                <a class="nav-link" href="/sesion"><i class="fas fa-sign-out-alt"></i> Cerrar Sesión</a>
            </div>
        </div>
    </nav>

    <!-- Content Area -->
    <div class="content">
        <h1 class="text-center"> Farmacia Cadesoft</h1>

        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="fas fa-pills icon"></i> Medicamentos
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Total Disponibles: 12</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="fas fa-dollar-sign icon"></i> Ventas
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Total Ventas: $5000</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="fas fa-user-friends icon"></i> Pacientes
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Total Registrados: 80</h5>
                    </div>
                </div>
            </div>
        </div>

        <!-- Chart Area -->
        <div class="chart-container">
            <canvas id="myChart"></canvas>
        </div>

        <footer>
            <p>&copy; 2024 CADESOFT. Todos los papuderechos reservados.</p>
        </footer>
    </div>


    <script>
        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Ventas', 'Medicamentos', 'Pacientes'],
                datasets: [{
                    label: 'Totales',
                    data: [5000, 12, 80],
                    backgroundColor: [
                        'rgba(52, 152, 219, 0.7)',
                        'rgba(46, 204, 113, 0.7)',
                        'rgba(231, 76, 60, 0.7)'
                    ],
                    borderColor: [
                        'rgba(52, 152, 219, 1)',
                        'rgba(46, 204, 113, 1)',
                        'rgba(231, 76, 60, 1)'
                    ],
                    borderWidth: 1,
                    hoverBorderWidth: 2, // Aumentar el grosor de las barras cuando pase el cursor
                    hoverBorderColor: 'rgba(0, 0, 0, 0.9)'  // Cambiar el color del borde al pasar el cursor
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: true,
                        labels: {
                            color: '#34495e'
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            color: '#34495e'
                        }
                    },
                    x: {
                        ticks: {
                            color: '#34495e'
                        }
                    }
                },
                animation: {
                    duration: 800,
                    easing: 'easeOutBounce'
                }
            }
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

