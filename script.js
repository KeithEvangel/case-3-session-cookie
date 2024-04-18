var buttonLogin = document.getElementById('button-login');
const passwordField = document.getElementById('password');
const togglePassword = document.getElementById('togglePassword');

buttonLogin.addEventListener('click', (e) => {
    e.preventDefault();
    var username = document.querySelector('#email').value;
    var password = document.querySelector('#password').value;

    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    var passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

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
        kirimPHP();
    }
});

function tampilkanDialog(message) {
    var dialog = document.getElementById('dialog');
    var dialogMessage = document.getElementById('dialog-message');
    dialogMessage.textContent = message;
    dialog.style.display = 'block';
}

var tutupDialog = document.getElementById('tutup-dialog');
tutupDialog.addEventListener('click', (e) => {
    var dialog = document.getElementById('dialog');
    dialog.style.display = 'none';
});

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

function cekBerhasil(keadaan) {
    if (keadaan === "Success") {
        window.location.href = 'profile.php';
    } else {
        tampilkanDialog("Email atau Password Salah");
        document.querySelector('#password').value = '';
    }
}

togglePassword.addEventListener('click', function() {
    // Memeriksa tipe input saat ini
    const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
    // Mengubah tipe input
    passwordField.setAttribute('type', type);
    // Mengubah ikon mata sesuai dengan tipe input yang baru
    togglePassword.classList.toggle('fa-eye-slash');
});