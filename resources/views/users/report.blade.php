{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Report</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>

    <h2 class="text-center">Users List</h2>

    <img src="{{asset('img/AgSalud.png')}}" width="100" height="100">

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>User</th>
                    <th>Email</th>
                </tr>
            </thead>
    
            <tbody>
                <tr>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                        </tr>
                    @endforeach
                </tr>
            </tbody>
        </table>

</body>
</html> --}}


<!DOCTYPE html>
<html>
<head>
    <title>Reporte Detallado</title>
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        .container {
            width: 100%;
            margin: 0 auto;
        }
        .header, .footer {
            text-align: center;
            margin-bottom: 20px;
        }
        .header h1 {
            margin: 0;
            padding: 0;
        }
        .header p {
            margin: 0;
            padding: 0;
            font-size: 12px;
        }
        .section {
            margin-bottom: 20px;
        }
        .section h2 {
            border-bottom: 1px solid #000;
            padding-bottom: 5px;
            margin-bottom: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Título del Reporte</h1>
            <p>Fecha: {{ date('d/m/Y') }}</p>
        </div>

        <div class="section">
            <h2>Información General</h2>
            <p><strong>Nombre:</strong> Juan Pérez</p>
            <p><strong>ID:</strong> 123456</p>
            <p><strong>Departamento:</strong> Ventas</p>
        </div>

        <div class="section">
            <h2>Datos del Reporte</h2>
            <table>
                <thead>
                    <tr>
                        <th>Columna 1</th>
                        <th>Columna 2</th>
                        <th>Columna 3</th>
                        <th>Columna 4</th>
                        <th>Columna 5</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $item)
                        <tr>
                            <td>{{ $item->columna1 }}</td>
                            <td>{{ $item->columna2 }}</td>
                            <td>{{ $item->columna3 }}</td>
                            <td>{{ $item->columna4 }}</td>
                            <td>{{ $item->columna5 }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    
            <div class="section">
                <h2>Observaciones</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
    
            <div class="footer">
                <p>Pie de página del reporte</p>
            </div>
        </div>
    </body>
    </html>
