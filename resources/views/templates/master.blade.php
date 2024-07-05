<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    {{-- Link fuentes de google --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">

    {{-- Link bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <style>
        body {
            font-family: "Roboto Slab", serif;
            padding-top: 56px;
        }

        .navbar {
            font-weight: 600;
            font-size: 25px;
            height: 56px;
        }
    </style>

    @yield('style')



</head>



<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow">
        <div class="container-fluid">
            <a href="{{route('home.index')}}" class="navbar-brand"><span class="text-primary">Arriendos</span> La V</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-start"
                aria-controls="navbar-start" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar-start">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="{{route('vehiculos.index')}}">Vehiculos</a>
                    </li>

                    <li class="nav-item mx-2">
                        <a class="nav-link" href="{{route('arriendos.index')}}">Arrendar</a>
                    </li>

                    <li class="nav-item mx-2">
                        <a class="nav-link" href="{{route('tipos.index')}}">Tipos Vehiculos</a>
                    </li>
                </ul>


                <a href="#" class="btn btn-primary border-white mx-2">Iniciar Sesion</a>

            </div>
        </div>
    </nav>



    @yield('contenido')





    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    @yield('script')

</body>

</html>