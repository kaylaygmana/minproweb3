<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="js.js"></script>
    <style>
      
        form {
            max-width: 400px;
            margin: 0 auto; 
            margin-top: 100px;
        }
        input, textarea {
            display: block;
            width: 100%;
            margin-bottom: 10px;
            padding: 8px;
            box-sizing: border-box;
        }
        button {
            padding: 10px 20px;
            background-color: rgb(81, 96, 81);
            color: #fff;
            border: none;
            cursor: pointer;
        }
 
        #contactMe {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }

        .navbar {
            position: sticky;
            top: 0;
            z-index: 1001;
            background-color: rgba(255, 255, 255, 0); 
        }

        .navbar-nav .nav-link.active:hover {
            color: #fff; 
            background-color: rgb(81, 96, 81); 
            transition: all 0.5s ease; 
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#program-kerja">Program Kerja</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#shelter">Shelter</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#kalender">Jadwal kegiatan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="adopsi.php">Adopsi kucing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="kritiksaran.php">Beri saran</a>
                </li>

            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <?php if (isset($_SESSION['username'])): ?>
                <li class="nav-item">
                    <a class="nav-link active" href="logout.php">Keluar</a>
                </li>
            <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link active" href="login.php">Masuk</a>
                </li>
            <?php endif; ?>
        </ul>

        </div>
    </div>
</nav>

<section id="kritiksaran" style="position: relative; ">
  <div style="text-align: center; background-color: rgb(81, 96, 81); color: white; padding:20px;">
    <span style="font-weight: bold;" class="h1">KRITIK & SARAN</span> <br> <span class="h5">Silahkan berikan saran maupun kritik untuk kami!</span>
  </div>

    <form action="https://api.web3forms.com/submit" method="POST">
        <input type="hidden" name="access_key" value="c37eaf2d-7107-4e48-9e41-2d9b16509172">
        <input type="text" name="nama" placeholder="Nama anda" required>
        <input type="email" name="email" placeholder="Email anda" required>
        <textarea name="message" placeholder="Tulis pesan anda"></textarea>
        <button type="submit"> Kriim</button>
    </form>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
