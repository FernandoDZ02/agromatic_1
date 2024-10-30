<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario</title>
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
        .seasonal-calendar {
    background-color: #f0f8ff;
    padding: 40px;
    text-align: center;
}

.seasonal-calendar h2 {
    font-size: 28px;
    color: #4CAF50;
    margin-bottom: 20px;
}

.fruit-calendar {
    width: 100%;
    max-width: 800px;
    margin: 0 auto;
    border-collapse: collapse;
}

.fruit-calendar th, .fruit-calendar td {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: center;
}

.fruit-calendar th {
    background-color: #4CAF50;
    color: white;
    font-weight: bold;
}

.fruit-calendar td {
    background-color: #ffffff;
    color: #333;
}

.fruit-calendar td:nth-child(odd) {
    background-color: #f9f9f9;
}

.fruit-calendar td:empty {
    background-color: #f0f0f0;
}

@media (max-width: 768px) {
    .fruit-calendar th, .fruit-calendar td {
        padding: 8px;
    }
}
.seasonal-calendar {
    background-color: #f0f8ff;
    padding: 40px;
    text-align: center;
}

.seasonal-calendar h2 {
    font-size: 28px;
    color: #4CAF50;
    margin-bottom: 20px;
}

.vegetable-calendar {
    width: 100%;
    max-width: 800px;
    margin: 0 auto;
    border-collapse: collapse;
}

.vegetable-calendar th, .vegetable-calendar td {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: center;
}

.vegetable-calendar th {
    background-color: #4CAF50;
    color: white;
    font-weight: bold;
}

.vegetable-calendar td {
    background-color: #ffffff;
    color: #333;
}

.vegetable-calendar td:nth-child(odd) {
    background-color: #f9f9f9;
}

.vegetable-calendar td:empty {
    background-color: #f0f0f0;
}

@media (max-width: 768px) {
    .vegetable-calendar th, .vegetable-calendar td {
        padding: 8px;
    }
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
            <li><a href="Calculadora.php">Calculadora</a></li>
            <li><a href="mapa.php">Mapa</a></li>
            <li><a href="calendario.php">Calendario</a></li>
            <li><a href="Minijuego.php">Quizz</a></li>
        </ul>
    </li>
</ul>
    
    <button class="back-to-top" id="back-to-top">↑ Volver Arriba</button>

<h1>Calendario</h1>
<section class="seasonal-calendar">
    <h2>Calendario de Temporadas de Frutas</h2>
    <table class="fruit-calendar">
        <thead>
            <tr>
                <th>Fruta</th>
                <th>Primavera</th>
                <th>Verano</th>
                <th>Otoño</th>
                <th>Invierno</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Fresa</td>
                <td>✔️</td>
                <td>✔️</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Mango</td>
                <td></td>
                <td>✔️</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Manzana</td>
                <td></td>
                <td></td>
                <td>✔️</td>
                <td>✔️</td>
            </tr>
            <tr>
                <td>Uva</td>
                <td></td>
                <td></td>
                <td>✔️</td>
                <td>✔️</td>
            </tr>
            <tr>
                <td>Naranja</td>
                <td></td>
                <td></td>
                <td>✔️</td>
                <td>✔️</td>
            </tr>
            <tr>
                <td>Plátano</td>
                <td>✔️</td>
                <td>✔️</td>
                <td>✔️</td>
                <td>✔️</td>
            </tr>
            <tr>
                <td>Melón</td>
                <td></td>
                <td>✔️</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Sandía</td>
                <td></td>
                <td>✔️</td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
</section>

<section class="seasonal-calendar">
    <h2>Calendario de Temporadas de Verduras</h2>
    <table class="vegetable-calendar">
        <thead>
            <tr>
                <th>Verdura</th>
                <th>Primavera</th>
                <th>Verano</th>
                <th>Otoño</th>
                <th>Invierno</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Espinaca</td>
                <td>✔️</td>
                <td></td>
                <td>✔️</td>
                <td></td>
            </tr>
            <tr>
                <td>Zanahoria</td>
                <td>✔️</td>
                <td></td>
                <td>✔️</td>
                <td>✔️</td>
            </tr>
            <tr>
                <td>Calabacín</td>
                <td></td>
                <td>✔️</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Brócoli</td>
                <td>✔️</td>
                <td></td>
                <td>✔️</td>
                <td></td>
            </tr>
            <tr>
                <td>Lechuga</td>
                <td>✔️</td>
                <td>✔️</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Coliflor</td>
                <td></td>
                <td></td>
                <td>✔️</td>
                <td>✔️</td>
            </tr>
            <tr>
                <td>Puerro</td>
                <td></td>
                <td></td>
                <td>✔️</td>
                <td>✔️</td>
            </tr>
            <tr>
                <td>Pepino</td>
                <td></td>
                <td>✔️</td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
</section>


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

</body>
</html>
