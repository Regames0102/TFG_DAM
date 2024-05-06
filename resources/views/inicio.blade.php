<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MeetPet - Tu Protectora de Animales</title>
    <link rel="stylesheet" href="{{ asset('css/styless.css') }}">
    <style>
        /* Estilos para la sección de descripción */
        /* Estilos para la sección de descripción */
        .desc {
            display: flex;
            flex-direction: row;
            align-items: center;
            margin-bottom: 2rem;
        }

        .desc h2 {
            margin-bottom: 1rem;
            color: #333; /* Cambia el color del título si lo deseas */
        }

        .desc p {
            margin-bottom: 1rem;
            margin-left: 2rem;
        }

        .desc {
            max-width: 100%;
            height: auto;
            margin-left: 6rem; /* Espacio entre el texto y la imagen */
            margin-right: 6rem; /* Espacio entre el texto y la imagen */
            border-radius: 5px; /* Añade bordes redondeados a la imagen si lo deseas */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Añade una sombra a la imagen si lo deseas */
        }
        img.img-desc{
            max-width: 40%;
            height: auto;
            margin-left: 4rem; /* Espacio entre el texto y la imagen */
            border-radius: 5px; /* Añade bordes redondeados a la imagen si lo deseas */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Añade una sombra a la imagen si lo deseas */
        }

    </style>
</head>
<body>
<header>
    <div class="container">
        <div class="logos">
            <img class="logoapac" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRF9JEGPaoC7Q02QYaeJfbtj4yl1lrHLtt-VtDHboVv8w&s" alt="logo">
            <h1 class="logo">MeetPet</h1>
            <nav>
                <ul>
                    <li><a href="Inicio">Inicio</a></li>
                    <li><a href="Adopcion">Adopción</a></li>
                    <li><a href="Tienda">Tienda</a></li>
                    <li><a href="Contacto">Contacto</a></li>
                    <li><a href="Eventos">Eventos</a></li>
                    <li class="registro"><a href="">Iniciar Sesion</a></li>
                    <li><a href="">Registrarse</a></li>
                </ul>
            </nav>
        </div>

    </div>
</header>

<main>
    <!-- Aquí puedes agregar el contenido principal de tu página -->
    <section>
        <h2>Bienvenido a MeetPet</h2>
        <p>¡Encuentra tu compañero animal perfecto!</p>
        <div class="carousel">
            <div class="slides">
                <div class="slide"><img src="https://scontent-mad1-1.xx.fbcdn.net/v/t39.30808-6/436226020_932452768918916_2705776184001166901_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=5f2048&_nc_ohc=1yTZCNlFqU4Ab4wUqWa&_nc_ht=scontent-mad1-1.xx&oh=00_AfAHsu4EdYJl17ADPs_fXuqDHaBMHH6tbnsj_lxNwII_Ig&oe=66295EFA" alt="Imagen 1"></div>
                <div class="slide"><img src="https://scontent-mad2-1.xx.fbcdn.net/v/t39.30808-6/434421472_927628982734628_1255478442462467934_n.jpg?stp=cp6_dst-jpg&_nc_cat=111&ccb=1-7&_nc_sid=5f2048&_nc_ohc=hZpGEK324YQAb4L0zlJ&_nc_oc=AdjfrVXWobHWYdo1TpogI4iS9yvs2sAP_EKw4C-PYP0bxMOLyRcpaTANkDWOx4_-V9g&_nc_ht=scontent-mad2-1.xx&oh=00_AfB6LQyXw-Se6lkkrPHTRKNDVSNyYGT2atJ2TDm-kssdwg&oe=662977BF" alt="Imagen 2"></div>
                <div class="slide"><img src="https://scontent-mad1-1.xx.fbcdn.net/v/t39.30808-6/434472186_927628992734627_7620811100506742274_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=5f2048&_nc_ohc=XLmwa8iWrUcAb4YGKH8&_nc_ht=scontent-mad1-1.xx&oh=00_AfCzvxWEvAUKvG8L4LPlgcD4RQCVuCqH2llHETng9h0XvA&oe=66297C70" alt="Imagen 3"></div>
                <div class="slide"><img src="https://scontent-mad2-1.xx.fbcdn.net/v/t39.30808-6/436945883_932746632222863_7332124658687978454_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=5f2048&_nc_ohc=CoCLTZx9d4YAb6u8nCY&_nc_ht=scontent-mad2-1.xx&oh=00_AfCuSCaN0zWWjlOC7CQfNv5ZHkWMAfoMgUE2oRitQFxH9Q&oe=662959E5" alt="Imagen 4"></div>
                <div class="slide"><img src="https://scontent-mad2-1.xx.fbcdn.net/v/t39.30808-6/436317586_932452945585565_7063485905585411132_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=5f2048&_nc_ohc=_jG6Sw8oAHoAb4TmjLk&_nc_ht=scontent-mad2-1.xx&oh=00_AfDLnUaqhTDqTa08OlWsH8W_NIWhfkqW-V4PvrUU5Jh3Eg&oe=66297FCF" alt="Imagen 5"></div>
            </div>
            <button class="prev" onclick="prevSlide()">&#10094;</button>
            <button class="next" onclick="nextSlide()">&#10095;</button>
        </div>
    </section>

    <div class="icon-row">
        <div class="icon"><a href="Adopcion"><img src="https://cdn-icons-png.flaticon.com/512/64/64431.png" alt="Icono 1"></a></div>
        <div class="icon"><a href="Tienda"><img src="https://cdn-icons-png.flaticon.com/512/3144/3144456.png" alt="Icono 2"></a></div>
    </div>
    <div class="icon-row">
        <div class="icon"><a href="Contacto"><img src="https://cdn-icons-png.flaticon.com/512/2903/2903622.png" alt="Icono 3"></a></div>
        <div class="icon"><a href="Eventos"><img src="https://cdn-icons-png.flaticon.com/512/2472/2472300.png" alt="Icono 4"></a></div>
    </div>
<section>
    <h2>APAC Huelva: Dando un Hogar a los Gatos Necesitados</h2>
    <section class="desc">

        <p class=" descri">La Asociación Protectora de Animales de Corrales APAC se dedica, de manera totalmente altruista, a rescatar, cuidar, y buscar hogar a los gatos abandonados, enfermos y desatendidos de Huelva. También se encargan de algunas colonias, proporcionando alimento y realizando CER (Captura, Esterilización, Retorno). <br><br>Está conformada por voluntarios que dedican parte del tiempo de sus vidas personales a cuidar el refugio, a acudir a rescates, a dar en adopción responsable, a llevar un seguimiento de las propias adopciones, y mucho más.
            El refugio, que ha sido construido desde cero y financiado por los mismos voluntarios, avanza a pequeños pasos, pues los materiales necesarios son caros, y no siempre se puede aportar para su compra. <br><br>Gracias a donaciones esporádicas se puede avanzar en su construcción. Aún así, todos los voluntarios de APAC se vuelcan en el mantenimiento y la construcción del mismo.También llevan adelante varios eventos donde se pueden adquirir productos hechos por los propios voluntarios, tales como objetos de resina, de crochet, de madera, etc. Estos eventos se realizan en varios lugares y fechas, que podrás consultar en <a href="Eventos">esta web</a> o en su página de Facebook <a href="https://www.facebook.com/apachuelva?locale=es_ES" target="_blank">"APAC Huelva"</a>.</p>
        <img class="img-desc"src="https://d1kvlp4er3agpe.cloudfront.net/resources/images/groups/0/2/5/7/0/a6ahimq6ft.jpg" alt="APAC Huelva - Dando un Hogar a los Gatos Necesitados">    </section>
    </section>
</main>
<script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>
