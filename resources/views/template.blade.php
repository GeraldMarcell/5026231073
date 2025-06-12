<!DOCTYPE html>
<html lang="en">

<head>
    <title>Gerald Marcell Van Rayne : 5026231073</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <style>
        .jumbotron {
            background: linear-gradient(135deg, #9de2e2, #6bb9b9);
            color: white;
            text-shadow: 1px 1px 3px rgba(0,0,0,0.3);
            padding: 2rem 1rem;
            margin-bottom: 0;
            border-radius: 0;
        }

        .navbar {
            background-color: #f8f9fa;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .nav-link {
            color: #495057;
            font-weight: 500;
            padding: 0.5rem 1rem;
            transition: all 0.3s;
        }

        .nav-link:hover {
            color: #6bb9b9;
            transform: translateY(-2px);
        }

        .container {
            padding: 20px;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            margin-top: 20px;
            margin-bottom: 20px;
        }

        body {
            background-color: #f5f7fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .navbar-brand {
            font-weight: bold;
            color: #6bb9b9 !important;
        }

        .active {
            color: #6bb9b9 !important;
            border-bottom: 2px solid #6bb9b9;
        }
    </style>
</head>

<body>
    <div class="jumbotron text-center">
        <h1 class="display-4">5026231073 : Gerald Marcell Van Rayne</h1>
    </div>

    <nav class="navbar navbar-expand-md bg-light navbar-light sticky-top">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/frontend"><i class="fas fa-laptop mr-2"></i>All Front End</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/pegawai"><i class="fas fa-users mr-2"></i>Pegawai</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/obat"><i class="fas fa-tasks mr-2"></i>Tugas CRUD</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-graduation-cap mr-2"></i>EAS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-book mr-2"></i>Latihan 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/karyawan"><i class="fas fa-book mr-2"></i>Latihan 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-book mr-2"></i>Latihan 3</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <footer class="bg-light text-center text-lg-start mt-5">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.1);">
            © 2023 Gerald Marcell Van Rayne - 5026231073
            <a class="text-dark mx-2" href="https://github.com/GeraldMarcell/5026231073"><i class="fab fa-github"></i></a>
        </div>
    </footer>

</body>

</html>
