<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - Frutas, Verduras y Plantas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e9f5e9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .register-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        .register-container h2 {
            color: #4caf50;
        }

        .register-container input[type="text"],
        .register-container input[type="email"],
        .register-container input[type="password"] {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .register-container input[type="submit"] {
            background-color: #4caf50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        .register-container input[type="submit"]:hover {
            background-color: #45a049;
        }

        .register-container p {
            margin-top: 15px;
        }

        .logo {
            position: absolute;
            top: 10px;
            right: 10px;
            max-height: 80px;
            max-width: 100px;
        }

        a {
            display: block;
        }

        .error {
            color: red;
            font-size: 14px;
        }

        .password-requirements {
            text-align: left;
            margin: 10px 0;
            font-size: 12px;
        }

        .password-requirements .requirement {
            display: flex;
            align-items: center;
        }

        .password-requirements .requirement span {
            margin-left: 5px;
        }

        .valid {
            color: green;
        }

        .invalid {
            color: red;
        }

        .show-password {
            margin-top: 10px;
            font-size: 14px;
        }

        .menu-toggle {
            position: fixed;
            top: 10px;
            left: 20px;
            background-color: rgba(34, 153, 84, 0.8); 
            color: white;
            border: none;
            padding: 20px;
            cursor: pointer;
            border-radius: 5px;
            transition: background 0.3s;
        }

        .menu-toggle:hover {
            background-color: rgba(0, 86, 179, 0.8);
        }

        .nav-list {
            list-style: none;
            position: fixed;
            top: 60px;
            left: 20px; 
            background-color: rgba(34, 153, 84, 0.8);
            border-radius: 5px;
            padding: 10px;
            display: none; 
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }

        .nav-list li {
            margin: 5px 0;
            position: relative; 
        }

        .nav-list a {
            color: #fff;
            text-decoration: none;
            padding: 5px 10px;
            display: block; 
            border-radius: 3px;
            transition: background 0.3s;
        }

        .nav-list a:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }

        .sub-menu {
            display: none; 
            position: absolute;
            top: 0;
            left: 100%; 
            background-color: rgba(34, 153, 84, 0.8);
            border-radius: 5px;
            padding: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .nav-list li:hover .sub-menu {
            display: block; 
        }
    </style>
    
</head>
<body>
    <a href="index.php"> 
        <img src="logo.png" alt="Logo" class="logo">
    </a>

    <div class="overlay"></div>

    <button class="menu-toggle" id="menu-toggle">☰ Menú</button>
    <ul class="nav-list" id="nav-list">
    <li>
        <a href="index.php">Inicio</a>
        <ul class="sub-menu">
            
            <li><a href="index.php">Contactanos</a></li>
        
        </ul>
    </li>
    <li>
        <a href="index.php">Sobre Nosotros</a>
        <ul class="sub-menu">
            <li><a href="index.php">Nuestro Equipo</a></li>
            <li><a href="index.php">Misión y Visión</a></li>
        </ul>
    </li>
    <li>
        <a href="Fruta.php">Frutas</a>
        <ul class="sub-menu">
            <li><a href="Fruta.php">Acidas</a></li>
            <li><a href="Fruta.php">Semiacidas</a></li>
	        <li><a href="Fruta.php">Dulces</a></li>
	        <li><a href="Fruta.php">Neutras</a></li>
        </ul>
    </li>
    <li>
        <a href="Verdura.php">Verduras</a>
        <ul class="sub-menu">
            <li><a href="Verdura.php">Hojas</a></li>
            <li><a href="Verdura.php">Raices</a></li>
	        <li><a href="Verdura.php">Flores</a></li>
            <li><a href="Verdura.php">Tallos</a></li>
        </ul>
    </li>
    <li>
        <a href="plantas.php">Plantas</a>
        <ul class="sub-menu">
            <li><a href="plantas.php">Hojas</a></li>
            <li><a href="plantas.php">Raices</a></li>
	        <li><a href="plantas.php">Flores</a></li>
            <li><a href="plantas.php">Tallos</a></li>
        </ul>
    </li>
    <li>
        <a>Material</a>
        <ul class="sub-menu">
        <li><a href="Tutoriales.html">Tutoriales</a></li>
            <li><a href="Calculadora.php">Calculadora</a></li>
            <li><a href="mapa.php">Mapa</a></li>
            <li><a href="calendario.php">Calendario</a></li>
            <li><a href="Minijuego.php">Quizz</a></li>
        </ul>
    </li>
    <li>
        <a>Material</a>
        <ul class="sub-menu">
            <li><a href="Calculadora.php">Calculadora</a></li>
            <li><a href="mapa.php">Mapa</a></li>
            <li><a href="calendario.php">Calendario</a></li>
            <li><a href="Minijuego.php">Quizz</a></li>
        </ul>
    </li>
    </ul>

    


    <div class="register-container">
        <h2>Crear Cuenta</h2>
        <form name="registerForm" action="conexion.php" method="post" onsubmit="return validateForm()">
            <input type="text" name="fullname" placeholder="Nombre Completo" required 
            pattern="[a-zA-Z\s]+" title="Solo se permiten letras en el nombre completo">
            <input type="email" name="email" placeholder="Correo Electrónico" required>
            <input type="text" name="username" placeholder="Nombre de Usuario" required>
            <input type="password" name="password" placeholder="Contraseña" required oninput="checkPasswordStrength()">
            <input type="password" name="confirm_password" placeholder="Confirmar Contraseña" required>
            <div class="show-password">
                <input type="checkbox" onclick="togglePasswordVisibility()"> Mostrar contraseña
            </div>
            <input type="submit" value="Registrarse" >
        </form>

        <!-- Requisitos de contraseña -->
        <div class="password-requirements">
            <div class="requirement">
                <span id="lowercase" class="invalid">&#10008;</span>
                <span>1 letra minúscula</span>
            </div>
            <div class="requirement">
                <span id="uppercase" class="invalid">&#10008;</span>
                <span>1 letra mayúscula</span>
            </div>
            <div class="requirement">
                <span id="number" class="invalid">&#10008;</span>
                <span>1 número</span>
            </div>
            <div class="requirement">
                <span id="specialChar" class="invalid">&#10008;</span>
                <span>1 carácter especial</span>
            </div>
        </div>

        <div id="errorMessages"></div>
        <p>¿Ya tienes una cuenta? <a href="login.html">Inicia Sesión</a></p>
    </div>

    <script>
        const menuToggle = document.getElementById('menu-toggle');
    const navList = document.getElementById('nav-list');
    const backToTop = document.getElementById('back-to-top');

    menuToggle.addEventListener('click', () => {
        navList.style.display = navList.style.display === 'none' || navList.style.display === '' ? 'block' : 'none';
    });

    window.addEventListener('scroll', () => {
        if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
            backToTop.style.display = 'block';
        } else {
            backToTop.style.display = 'none';
        }
    });

    backToTop.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
        </script>
    <script>
        function validateForm() {
            const fullname = document.forms["registerForm"]["fullname"].value;
            const email = document.forms["registerForm"]["email"].value;
            const username = document.forms["registerForm"]["username"].value;
            const password = document.forms["registerForm"]["password"].value;
            const confirm_password = document.forms["registerForm"]["confirm_password"].value;
            let errors = [];

            if (fullname.length < 3) {
                errors.push("El nombre completo debe tener al menos 3 caracteres.");
            }

            const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            if (!emailPattern.test(email)) {
                errors.push("Por favor ingrese un correo electrónico válido.");
            }

            if (username.length < 3) {
                errors.push("El nombre de usuario debe tener al menos 3 caracteres.");
            }

            const passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{6,}$/;
            if (!passwordPattern.test(password)) {
                errors.push("La contraseña debe tener al menos 6 caracteres.");
            }

            if (password !== confirm_password) {
                errors.push("Las contraseñas no coinciden.");
            }

            const errorContainer = document.getElementById("errorMessages");
            errorContainer.innerHTML = "";
            if (errors.length > 0) {
                errors.forEach(error => {
                    const errorElement = document.createElement("p");
                    errorElement.classList.add("error");
                    errorElement.textContent = error;
                    errorContainer.appendChild(errorElement);
                });
                return false; 
            }

alert("Se ha registrado correctamente. ¡Bienvenido!");

            return true; 
        }

        function checkPasswordStrength() {
            const password = document.forms["registerForm"]["password"].value;

            const lowercasePattern = /[a-z]/;
            const uppercasePattern = /[A-Z]/;
            const numberPattern = /\d/;
            const specialCharPattern = /[\W_]/;

            document.getElementById("lowercase").className = lowercasePattern.test(password) ? "valid" : "invalid";
            document.getElementById("uppercase").className = uppercasePattern.test(password) ? "valid" : "invalid";
            document.getElementById("number").className = numberPattern.test(password) ? "valid" : "invalid";
            document.getElementById("specialChar").className = specialCharPattern.test(password) ? "valid" : "invalid";
        }

        function togglePasswordVisibility() {
            const passwordField = document.querySelector('input[name="password"]');
            const confirmPasswordField = document.querySelector('input[name="confirm_password"]');
            const type = passwordField.type === 'password' ? 'text' : 'password';
            passwordField.type = type;
            confirmPasswordField.type = type;
        }
    </script>
</body>
</html>

