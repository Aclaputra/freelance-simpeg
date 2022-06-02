<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <!-- <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a> -->
            </li>
        </ul>
        </div>
    </div>
    </nav>
    <div style="text-align: center">
        <h1 class="m-2">LANDING PAGE</h1>
        <div style="width: 320px; margin: 0 auto;">
            <ul style=" text-align: left">
                <li>
                    <a href="{{ url('login') }}">
                        Pegawai Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{ url('pejabat_penilai/login') }}">
                        Pejabat Penilai Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{ url('/atasan_pejabat_penilai/login')}}">
                        Atasan Pejabat Penilai Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{ url('/kepala_urusan_kepegawaian/login') }}">
                        Kepala Urusan Kepegwaian Dashboard
                    </a>
                </li>
            </ul>
        </div>
    </div>
</body>
</html>