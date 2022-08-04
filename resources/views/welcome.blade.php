<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kursus Mengemudi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.csss">

    <style>
        .margin-top {
            margin-top: 6rem;
        }
    </style>

</head>

<body class="bg-dark">
    <div class="margin-top text-secondary px-4 py-5 text-center">
        <div class="py-5">
        <img class="d-block mx-auto mb-4" src="{{URL('logo.png')}}" alt="" width="120" height="120">
            <h1 class="display-5 fw-bold text-white">NYETIR YUK</h1>
            <div class="col-lg-6 mx-auto">
                <p class="fs-5 mb-0">1 Bulan Belum Bisa Pake Mobil = Uang Kembali</p>
                <p class="fs-5 mb-4">Website Kursus Mengemudi kota Samarinda yang telah diakui oleh Perkumpulan Kursus Mobil Indonesia (PKMI).</p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <a href="{{ route('login') }}" class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold">Login</a>
                    <a href="{{ route('register') }}" class="btn btn-outline-light btn-lg px-4">Register</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>