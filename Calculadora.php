<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('logo.png');
            background-size: 50%; 
            background-repeat: no-repeat; 
            background-position: center; 
            background-color: rgba(0, 0, 0, 0.2); /* Fondo negro con 70% de opacidad */
            height: 200vh; 
            position: relative;    
        }
        /*barra de menu*/
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

        .back-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: rgba(34, 153, 84, 0.8);
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            display: none; 
            transition: background 0.3s;
        }

        .back-to-top:hover {
            background-color: rgba(0, 86, 179, 0.8);
        }

        /* Estilo para el título */
        h1 {
            text-align: center;
            margin-top: 60px;
            color: #4CAF50; /* Color verde */
            font-size: 36px; /* Tamaño de fuente */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); /* Sombra */
        }

        h2 {
            text-align: center;
            color: #555;
            font-size: 24px; /* Tamaño de subtítulo */
            margin-top: 10px;
        }

        .logo {
    position: absolute;
    top: -50px;
    right: 10px;
    height: 100px;
    width: auto;
}

a {
    display: block;
}
/*Calculadora*/
form {
            background-color: #ffffff; /* Fondo blanco para el formulario */
            border: 1px solid #e0e0e0; /* Borde gris suave */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Sombra ligera */
            max-width: 400px;
            margin: 0 auto;
        }



        label {
            color: #2e7d32; /* Verde para etiquetas */
            font-weight: bold;
        }

        input[type="date"], select {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
            background-color: #f1f8e9; /* Verde claro */
        }

        button {
            background-color: #4caf50; /* Verde vivo */
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #388e3c; /* Verde oscuro en hover */
        }

        #resultado {
            margin-top: 20px;
            font-weight: bold;
            color: #1b5e20; /* Verde oscuro */
            text-align: center;
        }

        /* Estilos adicionales para mayor elegancia */
        body::before {
            content: "";
            background: url('plant-pattern.png') repeat;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0.05; /* Fondo decorativo sutil */
            z-index: -1;
        }

        footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 1rem;
    margin-top: 20px;
}
    </style>
</head>
<body>
    <h1>Calculadora</h1>
    
    <form id="calendarioForm">
        <label for="plantDate">Fecha de siembra/plantación:</label>
        <input type="date" id="plantDate" name="plantDate" required>

        <label for="tipoPlanta">Selecciona la planta:</label>
        <select id="tipoPlanta" name="tipoPlanta" required>
            <option value="">--Selecciona una planta--</option>
            <option value="manzana" data-madurez="150">Manzana (150 días)</option>
            <option value="tomate" data-madurez="75">Tomate (75 días)</option>
            <option value="zanahoria" data-madurez="80">Zanahoria (80 días)</option>
            <option value="lechuga" data-madurez="45">Lechuga (45 días)</option>
        </select>

        <button type="button" onclick="calcularMadurez()">Calcular Madurez</button>
    </form>

    <div id="resultado"></div>


    <div class="overlay"></div>

    <a href="index.php"> 
        <img src="logo.png" alt="Logo" class="logo">
    </a>
<button class="menu-toggle" id="menu-toggle">☰ Menú</button>
<ul class="nav-list" id="nav-list">
    <li>
        <a href="index.php">Inicio</a>
        <ul class="sub-menu">
            
            <li><a href="#contact">Contactanos</a></li>
        
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
</ul>
    
    <button class="back-to-top" id="back-to-top">↑ Volver Arriba</button>

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

    function calcularMadurez() {
            // Obtén la fecha de plantación
            const fechaPlantacion = document.getElementById("plantDate").value;
            const tipoPlanta = document.getElementById("tipoPlanta");
            const diasMadurez = tipoPlanta.options[tipoPlanta.selectedIndex].getAttribute("data-madurez");

            // Verifica si se ingresó una fecha y se seleccionó una planta
            if (!fechaPlantacion || !diasMadurez) {
                alert("Por favor, ingrese una fecha de plantación y seleccione una planta.");
                return;
            }

            // Convierte la fecha de plantación a un objeto Date
            const fechaInicial = new Date(fechaPlantacion);
            
            // Añade los días de madurez a la fecha de plantación
            fechaInicial.setDate(fechaInicial.getDate() + parseInt(diasMadurez));

            // Formatea la fecha de madurez
            const opcionesFecha = { year: 'numeric', month: 'long', day: 'numeric' };
            const fechaMadurez = fechaInicial.toLocaleDateString('es-ES', opcionesFecha);

            // Muestra el resultado
            document.getElementById("resultado").innerText = `La planta estará madura el ${fechaMadurez}.`;
        }


</script>


</body>
</html>
