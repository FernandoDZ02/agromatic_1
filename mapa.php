<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('logo.png');
            background-size: 50%;
            background-repeat: no-repeat;
            background-position: center;
            height: 200vh;
            position: relative;
        }
        .menu-toggle {
            position: fixed;
            background-color: rgba(34, 153, 84, 0.8);
            top: 10px;
            left: 20px;
            color: white;
            border: none;
            padding: 20px;
            cursor: pointer;
            border-radius: 5px;
            transition: background 0.3s;
            z-index: 1000;
        }
        .menu-toggle:hover {
            background-color: rgba(0, 86, 179, 0.8);
        }
        .nav-list {
            list-style: none;
            background-color: rgba(34, 153, 84, 0.8);
            border-radius: 5px;
            padding: 10px;
            display: none;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            position: fixed;
            top: 60px;
            left: 20px; 
            z-index: 1000; 
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

        .menu-container {
            position: fixed;
            top: 10px;
            left: 20px;
            z-index: 1000;
        }


        #info {
            position: absolute;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 5px;
            padding: 10px;
            display: none;
            z-index: 1000;
        }

        h1 {
            text-align: center;
            margin-top: 60px;
            color: #4CAF50;
            font-size: 36px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        h2 {
            text-align: center;
            color: #555;
            font-size: 24px;
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
    </style>
</head>

<body>
    <a href="index.php"> 
        <img src="logo.png" alt="Logo" class="logo">
    </a>
    <button class="menu-toggle" id="menu-toggle">☰ Menú</button>
    <ul class="nav-list" id="nav-list">
        <li>
            <a href="index.html">Inicio</a>
            <ul class="sub-menu">
                <li><a href="index.html">Contactanos</a></li>
                <li><a href="buscador.html">Buscador</a></li>
            </ul>
        </li>
        <li>
            <a href="index.html">Sobre Nosotros</a>
            <ul class="sub-menu">
                <li><a href="index.html">Nuestro Equipo</a></li>
                <li><a href="index.html">Misión y Visión</a></li>
            </ul>
        </li>
        <li>
            <a href="Fruta.html">Frutas</a>
            <ul class="sub-menu">
                <li><a href="Fruta.html">Acidas</a></li>
                <li><a href="Fruta.html">Semiacidas</a></li>
                <li><a href="Fruta.html">Dulces</a></li>
                <li><a href="Fruta.html">Neutras</a></li>
            </ul>
        </li>
        <li>
            <a href="Verdura.html">Verduras</a>
            <ul class="sub-menu">
                <li><a href="Verdura.html">Hojas</a></li>
                <li><a href="Verdura.html">Raices</a></li>
                <li><a href="Verdura.html">Flores</a></li>
                <li><a href="Verdura.html">Tallos</a></li>
            </ul>
        </li>
        <li>
            <a href="plantas.html">Plantas</a>
            <ul class="sub-menu">
                <li><a href="#projects">Hojas</a></li>
                <li><a href="#testimonials">Raices</a></li>
                <li><a href="#projects">Flores</a></li>
                <li><a href="#testimonials">Tallos</a></li>
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

<h1>AGROMATIC</h1>
<h2>Ubicación</h2>
<div id="map" style="height: 400px; width: 100%;"></div>
<div id="info"></div>

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

    // Datos de estados
    const estados = {
        "Aguascalientes": {
            frutas: ["Fresa", "Durazno"],
            verduras: ["Zanahoria", "Pepino"],
            plantas: ["Cebolla", "Tomate"],
            clima: "Semiárido",
            suelo: "Arcilloso",
            lat: 21.8853,
            lng: -102.2916
        },
        "Baja California": {
            frutas: ["Uva", "Cítricos"],
            verduras: ["Lechuga", "Brócoli"],
            plantas: ["Chiles", "Ajo"],
            clima: "Seco",
            suelo: "Arenoso",
            lat: 30.8390,
            lng: -115.5520
        },
        // Agregar más estados aquí...
    };

    function initMap() {
        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 5,
            center: { lat: 23.6345, lng: -102.5528 },
        });

        for (const [nombre, info] of Object.entries(estados)) {
            const marker = new google.maps.Marker({
                position: { lat: info.lat, lng: info.lng },
                map: map,
                title: nombre,
            });

            marker.addListener('click', () => {
                const content = `
                    <h3>${nombre}</h3>
                    <p><strong>Frutas:</strong> ${info.frutas.join(", ")}</p>
                    <p><strong>Verduras:</strong> ${info.verduras.join(", ")}</p>
                    <p><strong>Plantas:</strong> ${info.plantas.join(", ")}</p>
                    <p><strong>Clima:</strong> ${info.clima}</p>
                    <p><strong>Características del suelo:</strong> ${info.suelo}</p>
                `;
                
                const infoWindow = new google.maps.InfoWindow({
                    content: content,
                    position: { lat: info.lat, lng: info.lng }
                });
                infoWindow.open(map);
            });
        }
    }
</script>

<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBgbh9gYnNR2pdWmd-SV3U8vrMj0LWNWZ0&callback=initMap">
</script>
 

</body>
</html>