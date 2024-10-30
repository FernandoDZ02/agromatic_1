<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agromatic</title>
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
            z-index: 1000; /* Asegúrate de que el menú esté al frente */
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
            z-index: 1000; /* Asegúrate de que el menú esté al frente */
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
        .carousel-container {
    position: relative;
    max-width: 80%;
    margin: 50px auto;
    overflow: hidden;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.carousel {
    display: flex;
    transition: transform 0.5s ease-in-out;
    width: 300%;
}

.carousel-item {
    flex: 1;
    text-align: center;
    padding: 20px;
    background-color: white;
}

.carousel-item h2 {
    font-size: 24px;
    color: #4CAF50;
    margin-bottom: 20px;
}

.carousel-item img {
    width: 100%;
    max-height: 300px;
    object-fit: cover;
    border-radius: 10px;
}

.prev, .next {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: rgba(0, 0, 0, 0.5);
    color: white;
    border: none;
    padding: 10px;
    cursor: pointer;
    font-size: 18px;
    border-radius: 5px;
}

.prev {
    left: 10px;
}

.next {
    right: 10px;
}

.prev:hover, .next:hover {
    background-color: rgba(0, 0, 0, 0.8);
}

.curiosities-section {
    background-color: #f9f9f9; /* Fondo claro */
    padding: 50px 20px;
    text-align: center;
}

.curiosities-section h2 {
    font-size: 30px;
    color: #4CAF50; /* Color verde */
    margin-bottom: 30px;
    text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.1);
}

.curiosities-container {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
}

.curiosity-item {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    width: 30%;
    margin: 10px;
    transition: transform 0.3s ease-in-out;
}

.curiosity-item h3 {
    font-size: 24px;
    color: #4CAF50; /* Verde */
    margin-bottom: 15px;
}

.curiosity-item p {
    font-size: 16px;
    color: #555;
}

.curiosity-item:hover {
    transform: scale(1.05);
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
}

@media (max-width: 768px) {
    .curiosity-item {
        width: 100%; /* Elimina las columnas en pantallas pequeñas */
    }
}

.container {
    max-width: 800px;
    margin: 0 auto;
    text-align: center;
    background-color: #ffffff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    color: #4CAF50;
}

form {
    margin-bottom: 20px;
}

input[type="text"],
textarea {
    width: 100%;
    padding: 10px;
    margin: 5px 0;
    border: 1px solid #ddd;
    border-radius: 5px;
}

button {
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}

.topic {
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 10px;
    margin: 10px 0;
    text-align: left;
}

.topic h3 {
    margin: 0;
}

.comment-section {
    margin-top: 10px;
    border-top: 1px solid #ddd;
    padding-top: 10px;
}

.comment {
    border: 1px dashed #ccc;
    border-radius: 5px;
    padding: 5px;
    margin: 5px 0;
}

.comment-input {
    margin-top: 10px;
    display: flex;
}

.comment-input input {
    flex: 1;
    padding: 5px;
}

.comment-input button {
    padding: 5px;
}

.footer {
    background-color: #2E7D32; /* Color verde oscuro */
    color: white;
    padding: 40px 20px;
    font-size: 16px;
    text-align: center;
    margin-top: 40px;
    border-top: 5px solid #4CAF50; /* Línea superior verde */
}

.footer-container {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}

.footer-column {
    width: 30%;
    margin-bottom: 20px;
}

.footer-column h3 {
    font-size: 20px;
    margin-bottom: 10px;
    color: #FFD700; /* Color dorado para los títulos */
}

.footer-column p {
    line-height: 1.6;
}

.footer-column ul {
    list-style: none;
    padding: 0;
}

.footer-column ul li {
    margin: 10px 0;
}

.footer-column ul li a {
    color: white;
    text-decoration: none;
    transition: color 0.3s ease;
}

.footer-column ul li a:hover {
    color: #FFD700; /* Cambia el color de enlace al pasar el mouse */
}

.footer-bottom {
    text-align: center;
    margin-top: 20px;
    font-size: 14px;
    color: #CCCCCC;
}

@media (max-width: 768px) {
    .footer-column {
        width: 100%;
    }
}

.about-us {
    background-color: #f5f5f5; /* Fondo claro */
    padding: 60px 20px;
    text-align: center;
}

.about-container {
    max-width: 1200px;
    margin: 0 auto;
}

.about-content {
    margin-bottom: 40px;
}

.about-content h2 {
    font-size: 36px;
    color: #2E7D32; /* Verde oscuro */
    margin-bottom: 20px;
}

.about-content p {
    font-size: 18px;
    color: #555;
    line-height: 1.8;
    margin-bottom: 20px;
}

.team-section {
    background-color: #ffffff;
    padding: 40px 20px;
    text-align: center;
}

.team-section h3 {
    font-size: 28px;
    color: #2E7D32;
    margin-bottom: 30px;
}

.team-container {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
}

.team-member {
    text-align: center;
    margin-bottom: 30px;
}

.team-member img {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    margin-bottom: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.team-member h4 {
    font-size: 20px;
    color: #2E7D32;
}

.team-member p {
    font-size: 16px;
    color: #555;
}

.mission-vision-section {
    background-color: #f5f5f5;
    padding: 40px 20px;
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    margin-top: 40px;
}

.mission-vision-section h3 {
    font-size: 28px;
    color: #2E7D32;
    margin-bottom: 20px;
}

.mission, .vision {
    max-width: 500px;
    text-align: center;
}

.mission p, .vision p {
    font-size: 18px;
    color: #555;
    line-height: 1.8;
}

/* Diseño responsive */
@media (max-width: 768px) {
    .team-container {
        flex-direction: column;
    }

    .mission-vision-section {
        flex-direction: column;
        text-align: center;
    }

    .mission, .vision {
        margin-bottom: 30px;
    }
}

.contact-us {
    background-color: #e8f5e9; /* Fondo verde claro */
    padding: 60px 20px;
    text-align: center;
}

.contact-container {
    max-width: 1000px;
    margin: 0 auto;
}

.contact-us h2 {
    font-size: 36px;
    color: #2E7D32; /* Verde oscuro */
    margin-bottom: 20px;
}

.contact-us p {
    font-size: 18px;
    color: #555;
    margin-bottom: 40px;
}

.contact-form {
    background-color: #fff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    margin-bottom: 40px;
}

.contact-form form {
    display: flex;
    flex-direction: column;
}

.form-group {
    margin-bottom: 20px;
    text-align: left;
}

.form-group label {
    font-size: 16px;
    color: #333;
    margin-bottom: 5px;
    display: block;
}

.form-group input,
.form-group textarea {
    width: 100%;
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 5px;
    transition: border-color 0.3s;
}

.form-group input:focus,
.form-group textarea:focus {
    border-color: #4CAF50;
}

.btn-submit {
    background-color: #4CAF50;
    color: #fff;
    padding: 15px 30px;
    font-size: 16px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.btn-submit:hover {
    background-color: #2E7D32;
}

.contact-info {
    text-align: left;
    margin-top: 40px;
}

.contact-info h3 {
    font-size: 24px;
    color: #2E7D32;
    margin-bottom: 20px;
}

.contact-info p {
    font-size: 18px;
    color: #555;
    margin-bottom: 10px;
}

/* Diseño responsive */
@media (max-width: 768px) {
    .contact-form {
        padding: 20px;
    }

    .contact-info {
        text-align: center;
    }

    .contact-info p {
        margin-bottom: 20px;
    }
}

.logo {
    position: absolute;
    top: -50px; /* Ajusta para centrar verticalmente */
    right: 10px; /* Ajusta para la distancia del borde derecho */
    height: 100px; /* Ajusta el tamaño del logo */
    width: auto;
}

a {
    display: block;

}


.logosesion {
    position: absolute;
    top: -15px; /* Ajusta la posición vertical según sea necesario */
    right: 150px; /* Distancia del borde derecho */
    height: 60px; /* Ajusta el tamaño del logo */
    width: auto;
}

.login-container {
    display: inline-block; /* Permite que el contenedor sea clickeable */
    text-decoration: none; /* Elimina el subrayado del texto */
    color: inherit; /* Mantiene el color del texto original */
    position: absolute;
    top: -45px; /* Ajusta la posición vertical según sea necesario */
    right: 50px; /* Distancia del borde derecho */

    margin-top: 20px;
}

.login-text {
    margin-top: 15px;
    color: #333;
    font-size: 16px;
    font-weight: bold;
    position: absolute;
    top: 30px; /* Ajusta la posición vertical según sea necesario */
    right: 150px; /* Distancia del borde derecho */
    height: 60px; /* Ajusta el tamaño del logo */
}
    </style>
</head>
<header>
    <a href="login.html" class="login-container"> 
        <img src="logosesion.png" alt="Inicio de Sesión" class="logosesion">
        <p class="login-text">Iniciar sesión</p>
    </a>
    <a href="index.php"> 
        <img src="logo.png" alt="Logo" class="logo">
    </a>
</header>

<body>
 
<div class="overlay"></div>

<button class="menu-toggle" id="menu-toggle">☰ Menú</button>
<ul class="nav-list" id="nav-list">
    <li>
        <a href="index.php">Inicio</a>
        <ul class="sub-menu">
            
            <li><a href="#contact">Contactanos</a></li>
        </ul>
    </li>
    <li>
        <a href="#about">Sobre Nosotros</a>
        <ul class="sub-menu">
            <li><a href="#team">Nuestro Equipo</a></li>
            <li><a href="#vm">Misión y Visión</a></li>
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

<h1>AGROMATIC</h1>
<div class="carousel-container">
    <div class="carousel">
        <div class="carousel-item">
            <h2>Verduras</h2>
            <a href="Verdura.php" target="_blank">
                <img src="verduras.jpg" alt="Verduras">
            </a>
        </div>
        <div class="carousel-item">
            <h2>Frutas</h2>
            <a href="Fruta.php" target="_blank">
                <img src="frutas.jpg" alt="Frutas">
            </a>
        </div>
        <div class="carousel-item">
            <h2>Plantas</h2>
            <a href="plantas.php" target="_blank">
                <img src="fv.jpg" alt="Plantas">
            </a>
        </div>
    </div>
    <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
    <button class="next" onclick="moveSlide(1)">&#10095;</button>
</div>

<section class="curiosities-section">
    <h2>Datos Curiosos de Frutas, Verduras y Plantas</h2>
    <div class="curiosities-container">
        <div class="curiosity-item">
            <h3>Frutas</h3>
            <p>¿Sabías que la manzana flota en el agua? Esto se debe a que está compuesta en un 25% por aire.</p>
        </div>
        <div class="curiosity-item">
            <h3>Verduras</h3>
            <p>El pepino es en realidad una fruta. Está relacionado con la familia de las calabazas y se considera botánicamente una fruta.</p>
        </div>
        <div class="curiosity-item">
            <h3>Plantas</h3>
            <p>Algunas plantas carnívoras, como la Venus atrapamoscas, capturan y digieren insectos para obtener nutrientes esenciales.</p>
        </div>
    </div>

    <div class="container">
        <h1>Foro de Debate sobre Frutas y Verduras</h1>
        <form id="topic-form" method="POST" action="process.php">
            <input type="text" name="topic-title" id="topic-title" placeholder="Título del tema" required>
            <textarea name="topic-content" id="topic-content" placeholder="Escribe tu mensaje aquí..." required></textarea>
            <button type="submit">Crear Tema</button>
        </form>

        <div id="topics-container">
            <h2>Tema de Debate</h2>
            <div id="topics"></div>
        </div>
    </div>
</section>

<section class="about-us" id="about">
    <div class="about-container">
        <div class="about-content">
            <h2>Sobre Nosotros</h2>
            <p>En <strong>Agromatic</strong>, nos dedicamos a la agricultura sostenible y el cultivo responsable. Nos especializamos en ofrecer las mejores frutas y verduras frescas, directamente desde el campo a tu mesa, mientras cuidamos el medio ambiente y promovemos la salud.</p>
        </div>
    </div>
    
    <div class="team-section" id="team">
        <h3>Nuestro Equipo</h3>
        <div class="team-container">
            <div class="team-member">
                <img src="team1.jpg" alt="Miembro del equipo">
                <h4>Juan Pérez</h4>
                <p>Director General</p>
            </div>
            <div class="team-member">
                <img src="team2.jpg" alt="Miembro del equipo">
                <h4>Ana López</h4>
                <p>Gerente de Producción</p>
            </div>
            <div class="team-member">
                <img src="team3.jpg" alt="Miembro del equipo">
                <h4>Pedro García</h4>
                <p>Especialista en Sostenibilidad</p>
            </div>
        </div>
    </div>

    <div class="mission-vision-section" id="vm">
        <div class="mission">
            <h3>Nuestra Misión</h3>
            <p>Promover la agricultura responsable y sostenible, proporcionando productos frescos y saludables mientras reducimos el impacto ambiental.</p>
        </div>
        <div class="vision">
            <h3>Nuestra Visión</h3>
            <p>Ser líderes en la producción agrícola sostenible, contribuyendo a la salud global y al bienestar del planeta a través de nuestras prácticas ecológicas.</p>
        </div>
    </div>
</section>

<section class="contact-us" id="contact">
    <div class="contact-container">
        <h2>Contáctanos</h2>
        <p>Si tienes alguna pregunta o comentario, no dudes en enviarnos un mensaje. Estaremos encantados de ayudarte.</p>

        <div class="contact-form">
            <form action="enviar_formulario.php" method="POST">
                <div class="form-group">
                    <label for="name">Nombre:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Correo Electrónico:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Mensaje:</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn-submit">Enviar Mensaje</button>
            </form>
        </div>

        <div class="contact-info">
            <h3>También puedes encontrarnos en:</h3>
            <p><strong>Teléfono:</strong> +123 456 789</p>
            <p><strong>Email:</strong> contacto@agromatic.com</p>
            <p><strong>Dirección:</strong> Calle Falsa 123, Ciudad Verde</p>
        </div>
    </div>
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

    let currentSlide = 0;

    function moveSlide(direction) {
        const carousel = document.querySelector('.carousel');
        const totalSlides = document.querySelectorAll('.carousel-item').length;
        
        currentSlide += direction;
        if (currentSlide < 0) {
            currentSlide = totalSlides - 1;
        } else if (currentSlide >= totalSlides) {
            currentSlide = 0;
        }
        
        const slideWidth = document.querySelector('.carousel-item').clientWidth;
        carousel.style.transform = `translateX(-${currentSlide * slideWidth}px)`;
    }

        // Manejar el envío del formulario
        document.getElementById('topic-form').addEventListener('submit', function(event) {
            event.preventDefault();  // Prevenir recarga de la página
            
            const title = document.getElementById('topic-title').value;
            const content = document.getElementById('topic-content').value;

            // Enviar datos a PHP usando fetch
            const formData = new FormData();
            formData.append('topic-title', title);
            formData.append('topic-content', content);

            fetch('process.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                createTopic(title, content); // Agregar el tema dinámicamente
                document.getElementById('topic-title').value = '';
                document.getElementById('topic-content').value = '';
            })
            .catch(error => console.error('Error:', error));
        });

        // Función para crear un tema
        function createTopic(title, content) {
            const topicElement = document.createElement('div');
            topicElement.classList.add('topic');

            const topicTitle = document.createElement('h3');
            topicTitle.textContent = title;

            const topicContent = document.createElement('p');
            topicContent.textContent = content;

            // Crear sección de comentarios
            const commentSection = document.createElement('div');
            commentSection.classList.add('comment-section');

            // Crear input y botón de comentario
            const commentInput = document.createElement('div');
            commentInput.classList.add('comment-input');

            const commentField = document.createElement('input');
            commentField.placeholder = 'Escribe tu comentario...';

            const commentButton = document.createElement('button');
            commentButton.textContent = 'Comentar';

            // Añadir funcionalidad de comentario
            commentButton.addEventListener('click', function() {
                const comment = commentField.value;
                if (comment) {
                    addComment(comment, commentSection);
                    commentField.value = '';  // Limpiar campo de comentario
                }
            });

            // Añadir elementos al DOM
            commentInput.appendChild(commentField);
            commentInput.appendChild(commentButton);
            
            topicElement.appendChild(topicTitle);
            topicElement.appendChild(topicContent);
            topicElement.appendChild(commentInput);
            topicElement.appendChild(commentSection);

            document.getElementById('topics').appendChild(topicElement);
        }

        // Función para añadir un comentario
        function addComment(comment, commentSection) {
            const commentElement = document.createElement('div');
            commentElement.classList.add('comment');
            commentElement.textContent = comment;
            commentSection.appendChild(commentElement);
        }

        // Cargar temas guardados al cargar la página
        window.onload = function() {
            fetch('topics.txt')
            .then(response => response.text())
            .then(data => {
                const topicsContainer = document.getElementById('topics');
                const topics = data.split("\n").filter(line => line.trim() !== ""); // Filtrar líneas vacías
                topics.forEach(topic => {
                    const [title, content] = topic.split('|');
                    createTopic(title, content);
                });
            });
        };
</script>

<footer class="footer">
    <div class="footer-container">
        <div class="footer-column">
            <h3>Sobre Nosotros</h3>
            <p>Somos una empresa dedicada a la agricultura sostenible, promoviendo la salud y el bienestar a través de frutas y verduras frescas.</p>
        </div>
        <div class="footer-column">
            <h3>Enlaces Útiles</h3>
            <ul>
                <li><a href="index.html">Inicio</a></li>
                <li><a href="#about">Sobre Nosotros</a></li>
                <li><a href="#contact">Contáctanos</a></li>
            </ul>
        </div>
        <div class="footer-column">
            <h3>Contáctanos</h3>
            <ul>
                <li>Email: contacto@agromatic.com</li>
                <li>Teléfono: +123 456 7890</li>
                <li>Dirección: Calle Falsa 123, Ciudad Verde</li>
            </ul>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Agromatic - Todos los derechos reservados</p>
        </div>
    </div>
</footer>

</body>
</html>
