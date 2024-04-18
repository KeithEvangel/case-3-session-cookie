<?php
session_start();

if (!isset($_COOKIE['user'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>CASE 3 PEMROGRAMAN WEB</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <header>
        <div class="header" style="background-color:DodgerBlue;">
            <h3>Tugas Case 3</h3>
        </div>
    </header>

    <style>
        .header {
            background-color: #3498db;
            color: #fff;
            padding-top: 30px;
            padding-bottom: 20px;
            text-align: center;
            font-size: 30px;
            font-family: 'Segoe UI', Tahoma, Verdana, sans-serif;
            border-bottom: 10px solid #2980b9;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }

        .header {
            margin: 0px;
        }

        .header {
            font-size: 20px;
            margin-top: 0px;
        }
    </style>

    <div class="profil-body">
        <div class="card-profil card text-center">
            <div class="card-header" style="border-top-left-radius: 10px;
    border-top-right-radius: 10px;">
                Halaman Profil
            </div>
            <div class="card-body d-flex flex-column justify-content-between">
                <h5 class="card-title"> Anda Login Dengan Menggunakan Email</h5>
                <p class="card-text">
                    <?php
                    echo $_SESSION['email'];
                    ?>
                </p>
                <a href="logout.php" class="btn logout">Log Out</a>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="identitskelompok">
            <div class="kelompok">Nama Anggota Kelompok</div>
            <div class="anggotakelompok"></div>
            <div class="anggota1">
                <span>
                    <span class="anggota1-span">Natanael Isaac Pardamean Pardede</span>
                    <span class="anggota1-span2">225150401111036</span>
                </span>
            </div>
            <div class="anggota2">
                <span>
                    <span class="anggota2-span">Fadhly Andriawan Kairupan</span>
                    <span class="anggota2-span2">225150407111031</span>
                </span>
            </div>
            <div class="anggota3">
                <span>
                    <span class="anggota3-span">Keith Evangel Samuel</span>
                    <span class="anggota3-span2">225150407111100</span>
                </span>
            </div>
            <div class="line"></div>
            <div class="copyright">Created by Kelompok 10 - PEMROGRAMAN WEB KELAS SI E</div>
        </div>
    </footer>

    <style>
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #3498db;
            color: #fff;
            text-align: center;
            padding: 20px;
            padding-top: 10px;
            font-size: 15px;
            font-family: 'Segoe UI', Tahoma, Verdana, sans-serif;
            border-top: 10px solid #2980b9;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }

        .footer p {
            margin: 0;
        }

        .anggota3 {
            margin-bottom: 10px;
        }

        .line {
            border-top: 3px solid white;
            border-bottom: 3px;
            width: 100%;
        }

        .copyright {
            margin-top: 10px;
        }
    </style>
</body>

</html>