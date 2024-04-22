// Mengambil data yang dikirimkan melalui metode POST
$username = $_POST['username'];
$password = $_POST['password'];
$rememberMe = $_POST['remember'];

// Array yang berisi informasi akun pengguna
$akun = array(
    "fadhly@gmail.com" => "@Fadhly023",
    "bismillah@gmail.com" => "@Qwerty123"
);

// Memeriksa apakah akun pengguna ada dalam daftar akun dan passwordnya sesuai
if (isset($akun[$username]) && $akun[$username] === $password) {
    // Jika benar, membuat sesi dengan menyimpan alamat email pengguna
    $_SESSION['email'] = $username;
    
    // Jika opsi Remember Me dicentang, buat cookie dengan masa berlaku 24 jam
    if ($rememberMe === "true") {
        setcookie("user", $username, time() + 3600 * 24);
        // Mengirim respons ke klien bahwa proses login berhasil
        echo 'Success';
    } else {
        // Jika opsi Remember Me tidak dicentang, hanya mengirim respons ke klien bahwa proses login berhasil
        echo 'Success';
    }
} else {
    // Jika username atau password tidak sesuai, mengirim respons ke klien bahwa proses login gagal
    echo 'Failed';
}
?>
