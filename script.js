// Mengambil elemen tombol login dari HTML
var buttonLogin = document.getElementById('button-login');

// Mengambil elemen field password dari HTML
const passwordField = document.getElementById('password');

// Mengambil elemen ikon mata dari HTML
const togglePassword = document.getElementById('togglePassword');

// Menambahkan event listener pada tombol login
buttonLogin.addEventListener('click', (e) => {
    // Mencegah perilaku default dari form submit
    e.preventDefault();

    // Mengambil nilai username dan password dari input form
    var username = document.querySelector('#email').value;
    var password = document.querySelector('#password').value;

    // Regular expression untuk validasi email dan password
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    var passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

    // Pengecekan validitas input
    if (!username || !password) {
        tampilkanDialog("Email dan password wajib diisi");
    } else if (!emailRegex.test(username)) {
        tampilkanDialog("Email tidak sesuai");
        document.getElementById('email').value = '';
        document.getElementById('password').value = '';
    } else if (!passwordRegex.test(password)) {
        tampilkanDialog("Password tidak sesuai kriteria");
        document.getElementById('password').value = '';
    } else {
        // Jika input valid, panggil fungsi untuk mengirim data ke PHP
        kirimPHP();
    }
});

// Fungsi untuk menampilkan dialog
function tampilkanDialog(message) {
    var dialog = document.getElementById('dialog');
    var dialogMessage = document.getElementById('dialog-message');
    dialogMessage.textContent = message;
    dialog.style.display = 'block';
}

// Mengambil elemen tombol tutup dialog dari HTML
var tutupDialog = document.getElementById('tutup-dialog');

// Menambahkan event listener pada tombol tutup dialog
tutupDialog.addEventListener('click', (e) => {
    var dialog = document.getElementById('dialog');
    dialog.style.display = 'none';
});

// Fungsi untuk mengirim data login ke PHP
function kirimPHP() {
    var username = document.querySelector('#email').value;
    var password = document.querySelector('#password').value;
    var rememberME = document.querySelector('#rememberMe').checked;

    fetch('validate_login.php', {
        method: 'post',
        headers: {
            "Content-Type": 'application/x-www-form-urlencoded'
        },
        body: `username=${username}&password=${password}&remember=${rememberME}`
    }).then(result => result.text().then(
        text => {
            cekBerhasil(text);
        }
    ));
}

// Fungsi untuk mengecek hasil dari validasi login di PHP
function cekBerhasil(keadaan) {
    if (keadaan === "Success") {
        // Jika login berhasil, arahkan ke halaman profile
        window.location.href = 'profile.php';
    } else {
        // Jika login gagal, tampilkan pesan error
        tampilkanDialog("Email atau Password Salah");
        document.querySelector('#password').value = '';
    }
}

// Event listener untuk mengubah tipe input password
togglePassword.addEventListener('click', function() {
    // Memeriksa tipe input saat ini
    const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
    // Mengubah tipe input
    passwordField.setAttribute('type', type);
    // Mengubah ikon mata sesuai dengan tipe input yang baru
    togglePassword.classList.toggle('fa-eye-slash');
});
