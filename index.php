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

    <div class="loginform p-3">
        <h3 class="text-center mt-2 mb-4">Login</h3>
        <div class="container">
            <form id="loginForm">
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" id="email" class="form-control" placeholder="Masukkan email">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" id="password" class="form-control" placeholder="Masukkan password">
                    <i class="fas fa-eye" id="togglePassword"></i>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="rememberMe">
                    <label class="form-check-label" id="">Remember me</label>
                </div>
                <button type="submit" id="button-login" class="btn col-lg-12 mt-2 mb-3">Login</button>
            </form>
        </div>
    </div>
    <div id="dialog" class="dialog-container">
        <div class="dialog-content d-flex justify-content-center align-item-center flex-column">
            <p id="dialog-message"></p>
            <button class="btn btn-primary" id="tutup-dialog">Close</button>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>

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
            position: relative;
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