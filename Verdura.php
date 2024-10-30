<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verduras</title>
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

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
        }

        .category {
            width: 100%;
            text-align: center;
            margin: 20px 0;
        }

        .category h2 {
            font-size: 28px;
            color: #4CAF50;
        }

        .fruit {
            width: 300px;
            background-color: white;
            margin: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s ease;
        }

        .fruit:hover {
            transform: scale(1.05);
        }

        .fruit img {
            width: 100%;
            border-radius: 10px 10px 0 0;
        }

        .fruit h3 {
            margin: 10px 0;
            color: #4CAF50;
        }

        .fruit p {
            padding: 0 10px 20px;
            color: #555;
        }

        h1 {
            text-align: center;
            margin-top: 60px;
            color: #4CAF50;
            font-size: 36px;
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

.novedades-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
}

.verdura-card {
    background-color: white;
    padding: 20px;
    margin: 15px;
    width: 300px;
    height: 450px;
    border-radius: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
    transition: transform 0.3s, background-color 0.3s;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.verdura-card:hover {
    transform: scale(1.05);
    background-color: GREEN;
}

.verdura-card img {
    width: 100%;
    height: 250px; /* Tamaño fijo para todas las imágenes */
    object-fit: cover;
    border-radius: 10px;
    cursor: pointer;
}

.verdura-card h3 {
    color: BLACK;
    margin-top: 10px;
    text-align: center;
}

.verdura-card p {
    color: BLACK;
    font-weight: bold;
    text-align: center;
}
.search-bar {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 20px;
}

#search-input {
    width: 250px;
    height: 35px;
    padding: 0 15px;
    border: none;
    border-bottom: 2px solid #ccc;
    font-size: 16px;
    outline: none;
    background-color: transparent;
    transition: border-color 0.3s ease;
}

#search-input:focus {
    border-bottom-color: #000;
}

.search-button {
    margin-left: 10px;
    padding: 0 20px;
    height: 35px;
    border: none;
    background-color: transparent;
    color: #000;
    font-size: 16px;
    cursor: pointer;
    transition: color 0.3s ease;
}

.search-button:hover {
    color: #555;
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
    
    <h1>Verduras</h1>

    <button class="back-to-top" id="back-to-top">↑ Volver Arriba</button>
    <li class="search-bar">
                <input type="text" id="search-input" placeholder="Buscar...">
                <button id="search-button" class="search-button">BUSCAR</button>
            </li>
   
    <?php
$conexion = mysqli_connect("localhost", "root", "", "registro"); 

if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
}

$verduras = []; 

$query = "SELECT * FROM verduras"; 
$result = mysqli_query($conexion, $query); 

while ($row = mysqli_fetch_assoc($result)) {
    $verduras[] = $row; 
}

mysqli_close($conexion);
?>
            
<div class="novedades-container">
    <?php foreach ($verduras as $verdura): ?>
        <div class="verdura-card">
            <?php if ($verdura['imagen']): ?>
                <img src="data:image/png;base64,<?= base64_encode($verdura['imagen']); ?>" alt="<?= htmlspecialchars($verdura['nombre']); ?>">
            <?php else: ?>
                <img src="images/no-image.png" alt="No disponible">
            <?php endif; ?>
            <h3><?= htmlspecialchars($verdura['nombre']); ?></h3>
            <p class="descripcion-corta"><?= htmlspecialchars($verdura['descripcion']); ?></p>
        </div>
    <?php endforeach; ?>
</div>

    <button class="back-to-top" id="back-to-top">↑ Volver Arriba</button>
    
<script>
    document.getElementById("search-button").addEventListener("click", function() {
    var input = document.getElementById("search-input").value.toLowerCase();
    var items;
    
    if (document.querySelector('.frutas-page')) {
        items = document.getElementsByClassName("fruit-item");
    } else if (document.querySelector('.verduras-page')) {
        items = document.getElementsByClassName("vegetable-item");
    }

    for (var i = 0; i < items.length; i++) {
        var itemName = items[i].getElementsByClassName("fruit-info")[0]?.getElementsByTagName("p")[0].innerText.toLowerCase() ||
                       items[i].getElementsByClassName("vegetable-info")[0]?.getElementsByTagName("p")[0].innerText.toLowerCase();
        
        if (itemName.indexOf(input) > -1) {
            items[i].style.display = "";
        } else {
            items[i].style.display = "none";
        }
    }
});
</script>

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

    document.getElementById('search-button').addEventListener('click', function() {
    const searchText = document.getElementById('search-input').value
        .toLowerCase()
        .normalize('NFD')
        .replace(/[\u0300-\u036f]/g, ''); // Eliminar acentos
    
    // Buscar tarjetas de frutas
    const fruitCards = document.querySelectorAll('.fruta-card');
    fruitCards.forEach(card => {
        const fruitName = card.querySelector('h3').innerText
            .toLowerCase()
            .normalize('NFD')
            .replace(/[\u0300-\u036f]/g, ''); // Eliminar acentos
        card.style.display = fruitName.includes(searchText) ? 'block' : 'none';
    });

    // Buscar tarjetas de verduras
    const vegetableCards = document.querySelectorAll('.verdura-card');
    vegetableCards.forEach(card => {
        const vegetableName = card.querySelector('h3').innerText
            .toLowerCase()
            .normalize('NFD')
            .replace(/[\u0300-\u036f]/g, ''); // Eliminar acentos
        card.style.display = vegetableName.includes(searchText) ? 'block' : 'none';
    });
});
  
</script>

</body>
</html>
