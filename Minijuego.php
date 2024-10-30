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
    max-width: 600px;
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

.btn {
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    margin-top: 20px;
}

.btn:hover {
    background-color: #45a049;
}

.hidden {
    display: none;
}

#options {
    margin-top: 20px;
}

.option {
    background-color: #f1f1f1;
    border: 1px solid #ddd;
    padding: 10px;
    margin: 5px 0;
    border-radius: 5px;
    cursor: pointer;
}

.option:hover {
    background-color: #e7e7e7;
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
    

<h1>MiniJuego</h1>

<div class="container">
    <h1>Juego de Cultivo de Frutas y Verduras</h1>
    <div id="quiz-container">
        <h2 id="question"></h2>
        <div id="options"></div>
        <button id="next-button" class="btn">Siguiente</button>
    </div>
    <div id="result" class="hidden">
        <h2>Resultado</h2>
        <p id="score"></p>
        <button id="restart-button" class="btn">Reiniciar Juego</button>
    </div>
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

    const quizData = [
    {
        question: "¿Cuál es la mejor época para sembrar tomates?",
        options: ["Primavera", "Otoño", "Invierno", "Verano"],
        answer: "Primavera"
    },
    {
        question: "¿Qué tipo de suelo prefieren las zanahorias?",
        options: ["Arcilloso", "Arenoso", "Pedregoso", "Húmedo"],
        answer: "Arenoso"
    },
    {
        question: "¿Cuál es la planta más común para cultivar en casa?",
        options: ["Cebolla", "Ajo", "Lechuga", "Perejil"],
        answer: "Lechuga"
    },
    {
        question: "¿Qué fruta necesita mucho sol para crecer?",
        options: ["Fresa", "Manzana", "Plátano", "Naranja"],
        answer: "Naranja"
    },
    {
        question: "¿Cuántas horas de sol necesita la mayoría de las verduras al día?",
        options: ["3-4 horas", "4-6 horas", "6-8 horas", "8-10 horas"],
        answer: "6-8 horas"
    }
];

let currentQuestionIndex = 0;
let score = 0;

const questionElement = document.getElementById('question');
const optionsElement = document.getElementById('options');
const nextButton = document.getElementById('next-button');
const resultElement = document.getElementById('result');
const scoreElement = document.getElementById('score');
const restartButton = document.getElementById('restart-button');

function startGame() {
    currentQuestionIndex = 0;
    score = 0;
    nextButton.classList.remove('hidden');
    resultElement.classList.add('hidden');
    showQuestion();
}

function showQuestion() {
    const currentQuestion = quizData[currentQuestionIndex];
    questionElement.textContent = currentQuestion.question;
    optionsElement.innerHTML = '';

    currentQuestion.options.forEach(option => {
        const optionElement = document.createElement('div');
        optionElement.textContent = option;
        optionElement.classList.add('option');
        optionElement.addEventListener('click', () => selectOption(option));
        optionsElement.appendChild(optionElement);
    });
}

function selectOption(selectedOption) {
    const currentQuestion = quizData[currentQuestionIndex];
    if (selectedOption === currentQuestion.answer) {
        score++;
    }
    currentQuestionIndex++;
    if (currentQuestionIndex < quizData.length) {
        showQuestion();
    } else {
        showResult();
    }
}

function showResult() {
    questionElement.textContent = '';
    optionsElement.innerHTML = '';
    nextButton.classList.add('hidden');
    resultElement.classList.remove('hidden');
    scoreElement.textContent = `Tu puntuación es ${score} de ${quizData.length}`;
}

restartButton.addEventListener('click', startGame);
nextButton.addEventListener('click', showQuestion);

// Iniciar el juego
startGame();
</script>

</body>
</html>
