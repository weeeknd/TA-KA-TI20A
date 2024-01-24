<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>
<body>
    {{-- <p>Selamat Datang, {{$isi_session}}</p> --}}
    {{-- <button id="btn_logout">Logout</button> --}}
    <!-- kode js -->
    
</body>
</html>

<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard IMOSY</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #000000;
        }

        header {
            background-color: #00367D;
            color: #fff;
            padding: 1em;
            text-align: center;
        }

        nav {
            background-color: #F9AD30;
            padding: 1em;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        nav li {
            margin-right: 1em;
        }

        main {
            padding: 2em;
        }

        h2 {
            color: #fff;
        }

        .card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 1em;
            margin-bottom: 1em;
        }

        footer {
            background-color: #00367D;
            color: #fff;
            padding: 1em;
            text-align: center;
        }
    </style>

<body>

    <header>
        <h1>Dashboard IMOSI</h1>
    </header>

    <nav>
        <ul>
            <li><a href="#">Beranda</a></li>
            <li><a href="#">Data Siswa</a></li>
            <li><a href="#">Jadwal Kelas</a></li>
            <li><a href="#">Nilai Siswa</a></li>
            <!-- Tambahkan menu lain sesuai kebutuhan -->
        </ul>
    </nav>

    <main>
        <h2>Selamat datang di Dashboard IMOSY</h2>

        <div class="card">
            <h3>Data IMOSY</h3>
            <!-- Tambahkan konten data mahasiswa di sini -->
        </div>

        <div class="card">
            <h3>Jadwal Kelas</h3>
            <!-- Tambahkan konten jadwal kuliah di sini -->
        </div>

        <div class="card">
            <h3>Nilai IMOSY</h3>
            <!-- Tambahkan konten nilai mahasiswa di sini -->
        </div>
        <div>
        <button id="btn_logout">Logout</button>
        </div>
    </main>
    <script>
        // deklarasi variabel komponen
        let btn_logout = document.querySelector("#btn_logout");
        // event untuk "btn_logout"
        btn_logout.addEventListener("click", function(){
            // alihkan ke halaman logout
            location.href = "{{url('logout')}}";
        });
    </script>

    <footer>
        <p>&copy; 2024 Dashboard IMOSY</p>
    </footer>

</body>
</html>