<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Ejemplo</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    
    <h1>Ejemplos</h1>
    <br><br>



    <form id="categorieForm">
        <div class="mb-3">
          <label for="name" class="form-label">Nombre</label>
          <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
        <div class="mb-3">
          <label for="descripcion" class="form-label">Correo</label>
          <input type="text" class="form-control" id="descripcion" name="descripcion">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

    <ul id="categorieList"></ul>

    <script>
        $(document).ready(function(){
            function loadCategories() {
                $.ajax({
                    url: "{{route('categories.index')}}",
                    type: 'GET',
                    dataType 
                    success: function(categories){
                        console.log(categories);
                        alert(categories);
                    },
                    error: function(xhr) {
                        console.log('Error:' xhr);
                    }
                });
            }

            loadCategories();
            
        // $('#categorieForm').on('submit', function(event){
        //     event.preventDefault();

        //     $.ajax({
        //         url: "{{route('categories.store')}}",
        //         method: 'POST',
        //         data: $(this).serialize(),
        //         success: function(categorie) {
        //             loadCategories();
        //             $('#categorieForm')[0].reset();
        //         },
        //         error: function(xhr) {
        //             console.log('Error:', xhr);
        //         }
        //     });
        // });

        // $(document).on('click', '.deleteCategorie', function() {
        //     const categorieId = $(this).data('id');

        //     $.ajax({
        //         url: '/categories/' + categorieId,
        //         method: 'DELETE',
        //         success: function(response) {
        //             loadCategories();
        //             alert(response.message);
        //         },
        //         error: function(xhr) {
        //             console.log('Error:' xhr);
        //         }
        //     });
        // });

        $.ajaxSetup({
            headers:
            {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        });
    </script>

</body>
</html>