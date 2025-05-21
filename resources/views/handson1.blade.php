<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Grid Pweb</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylehandson1.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <div class="d-flex">
        <nav class="sidebar bgcolor vh-100 p-3 collapse" id="sidebar">
            <br>
            <div class="user-info d-flex align-items-center">
                <img src="materialD/user.svg" class="rounded-circle user-img mr-3" alt="User" width="50" height="50">
                <div>
                    <p class="text-white mb-0">User</p>
                    <small class="text-white-50">user@mail.com</small>
                </div>
            </div>
            <br>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="#" class="nav-link text-white active d-flex align-items-center">
                        <img src="materialD/clipboard.svg" class="icon mr-2"> Helperlog
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white d-flex align-items-center">
                        <img src="materialD/search.svg" class="icon mr-2"> Helperfind
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white d-flex align-items-center">
                        <img src="materialD/message-square.svg" class="icon mr-2"> Helperassist
                    </a>
                </li>
            </ul>
            <div class="d-flex align-items-center">
                <p class="jarak">

                </p>
            </div>
            <div class="d-flex align-items-center">
                <a href="#" class="nav-link logout text-white"><img src="materialD/log-out.svg" alt="logo-logout"> Log Out</a>
            </div>
        </nav>

        <div class="content p-4">
            <h3 class="mb-4"><button class="toggle-btn" data-toggle="collapse" data-target="#sidebar">☰</button> Helperlog Dashboard</h3>
            <br>
            <div class="p-3 mb-3 d-flex flex-row align-items-center shadow-sm rounded">
                <img src="materialD/Frame 40792-3.png" class="rounded-circle user-sm" alt="Intan Permata">
                <div class="ml-3">
                    <h5 class="mb-0">Intan Permata</h5>
                    <small class="text-muted" class="pekerjaan"><i><strong>Sitter</strong></i></small><br>
                    <small class="text-muted">Masa Kontrak: 12 bulan</small>
                </div>
                <div class="ml-auto">
                    <div class="container">
                        <span class="text-stars text-primary font-weight-bold mr-2"></span>
                        <div class="align-items-center">
                            <span class="stars text-muted mr-3">☆☆☆☆☆</span>
                            <br>
                            <small><center>Beri Penilaian untuk Intan 👍</center></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-3 d-flex flex-row align-items-center shadow-sm rounded">
                <img src="materialD/Frame 40792-1.png" class="rounded-circle user-sm" alt="Budi Dorami">
                <div class="ml-3">
                    <h5 class="mb-0">Budi Dorami</h5>
                    <small class="text-muted"><i><strong>Satpam</strong></i></small><br>
                    <small class="text-muted">Masa Kontrak: 6 bulan</small>
                </div>
                <div class="ml-auto">
                    <div class="container">
                        <span class="text-stars text-primary font-weight-bold mr-2">4.3</span>
                        <div class="align-items-center">
                            <!--<span class="text-stars text-primary font-weight-bold">4.3</span>-->
                            <span class="stars text-warning mr-3">★★★★☆</span>
                            <br>
                            <small><center>Sudah diberi Penilaian 👍</center></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
