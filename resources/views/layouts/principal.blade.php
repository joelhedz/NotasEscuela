<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/principal.css">
    <title>Notas Escuela</title>

</head>

<body class="bg-body-tertiary">
    <header>
        <h1 class="bg-primary text-white-50 text-center fs-3 p-2 h-100">Notas UNICAH</h1>
    </header>
    <main>
        <div class="row w-100 ">
            <nav class="colorNav m-0 ">

                <p class="fw-semibold fs-4 mt-4 mx-4">Usuario </p>
                <hr>
                <ul class="nav flex-column ">
                    <li class="nav-item disabled mt-3">
                        <a data-bs-toggle="collapse" class="nav-link textColor " aria-current="page" href="#centroEdu">
                            <span class="">Centro Educativo</span>
                            <i class="fa-solid fa-caret-down ms-5  " style="color: #E4E4E4"></i>
                        </a>
                        <ul class="nav collapse ms-1" id="centroEdu" data-bs-parent="#menu">
                            <div class="flex-column colorDespliegue py-2 ">
                                <li class="nav-item">
                                    <a href="/seccion" class="nav-link text-white-50 " aria-current="page">Registrar Secciones</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/clase" class="nav-link text-white-50 " aria-current="page">Registrar Clases</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/curso" class="nav-link text-white-50 " aria-current="page">Registrar Cursos</a>
                                </li>
                            </div>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link textColor " href="/alumno">Alumnos</a>
                    </li>
                    <li class="nav-item disabled">
                        <a data-bs-toggle="collapse" class="nav-link textColor " aria-current="page" href="#docentes">
                            <i></i>
                            <span class="me-5">Docentes</span>
                            <i class="fa-solid fa-caret-down ms-5  " style="color: #E4E4E4"></i>
                        </a>
                        <ul class="nav collapse ms-1" id="docentes" data-bs-parent="#menu">
                            <div class="flex-column colorDespliegue py-2">
                                <li class="nav-item">
                                    <a href="#" class="nav-link text-white-50" aria-current="page">Registrar Docentes</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link text-white-50" aria-current="page">Asignar Clases</a>
                                </li>
                            </div>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link textColor" href="#">Matricula</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link textColor" href="#">Notas</a>
                    </li>
                </ul>
            </nav>

            <section class="sectionContainer">
                @yield('hijos')
            </section>

        </div>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/3258ee922d.js" crossorigin="anonymous"></script>

</body>

</html>