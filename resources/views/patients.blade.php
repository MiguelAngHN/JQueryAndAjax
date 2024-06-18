<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    

    <h1>Examples GET - POST</h1>
    <br><br>

    <form id="patientForm" class="form-control">
        <div class="mb-3">
          <label for="name" class="form-label">Nombre</label>
          <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Correo</label>
          <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3">
          <label for="age" class="form-label">Edad</label>
          <input type="number" class="form-control" id="age" name="age">
        </div>
        <button type="submit" class="btn btn-primary">ENVIAR</button>
      </form>

      <br><h2>Lista de Pacientes</h2><br>
      <table class="table">
          <thead>
              <tr>
                  <th>Nombre</th>
                  <th>Correo Electronico</th>
                  <th>Edad</th>
              </tr>
          </thead>
  
          <tbody id="patientList">
          
          </tbody>
      </table>

    <script>
            $(document).ready(function() {

            function loadPatients() {
                $.ajax({
                    url: "{{ route('patients.index') }}",
                    method: 'GET',
                    success: function(patients) {
                        $('#patientList').empty();
                        patients.forEach(function(patient) {
                            $('#patientList').append(
                                '<tr>'+ 
                                    '<td>' + patient.name + '</td>' + 
                                    '<td>' + patient.email + '</td>' + 
                                    '<td>' + patient.age + '</td>' +
                                '</tr>'
                            );
                        });
                    },
                    error: function(xhr) {
                        console.log('Error en GET:', xhr);
                    }
                });
            }

            loadPatients(); 

            $('#patientForm').on('submit', function(event) {
                event.preventDefault();

                $.ajax({
                    url: "{{route('patients.store')}}",
                    method: 'POST',
                    data: $(this).serialize(),
                    success: function(patient){
                        loadPatients();
                        $('#patientForm')[0].reset();
                        // console.log(patient);
                    },
                    error: function(xhr) {
                        console.log('Error EN POST:', xhr);
                    }
                });
            });

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            
        });
    </script>      

</body>
</html>