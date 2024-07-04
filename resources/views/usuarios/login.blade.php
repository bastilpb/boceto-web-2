<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio de sesion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <style>
        body{
            background: linear-gradient(#023E8A,#0196C7);
            background-repeat: no-repeat;
            background-image: url('/images/fondo.png');
        }
    </style>
    
</head>

<body>



    {{-- Container invisible --}}
    <div class="container-fluid d-flex justify-content-center align-items-center min-vh-100">

        <div class="card">

            <h3 class="card-header border-0 text-center">Inicio de Sesion</h3>

            <div class="card-body">
                <div class="row">

                    <form method="POST" action="{{ route('usuarios.autenticar')}}">
                        @csrf
                        <div class="row">
                            <div class="col-6 my-3">
                                <label for="email" class="form-label">Email: </label>
                                <input type="email" class="form-control border-primary" id="email" name="email">
                            </div>

                            <div class="col-6 my-3">
                                <label for="password" class="form-label">Contraseña: </label>
                                <input type="password" class="form-control border-primary" id="password" name="password">
                            </div>

                            <div class="col-12 mx-auto d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary mx-3">Iniciar Sesion</button>
                            </div>
                        </div>



                    </form>


                    

                </div>
            </div>
        </div>

    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>



</body>

</html>