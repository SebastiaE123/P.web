// Función para mostrar la sección de login
function showLoginSection() {
    document.getElementById('login-section').style.display = 'block';
    document.getElementById('register-section').style.display = 'none';
    document.getElementById('success-section').style.display = 'none';
}

// Función para mostrar la sección de registro
function showRegisterSection() {
    document.getElementById('login-section').style.display = 'none';
    document.getElementById('register-section').style.display = 'block';
    document.getElementById('success-section').style.display = 'none';
}

