<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MeetPet - Tu Protectora de Animales</title>
    <link rel="stylesheet" href="{{ asset('css/stylesContacto.css') }}">
    <style>
        .quiensomosdesc{
            text-align: justify;
            padding: 2rem;
            margin-right: 12rem;
            margin-left: 12rem;
            font-size: 18px;
        }
/*Crear un borde en el div .descripcionSomos que se ajuste hasta el texto*/

        .descripcionSomos {
            margin-left: 16rem;
            margin-right: 16rem;
        }
        .rowContacto{
            display: flex;
            flex-direction: row;
            justify-content: center;
        }

        .contactos{
            justify-content: center;
            margin: 6rem;
        }
        .valorContacto{
            font-size: 18px;
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
<div class="descripcionSomos">
<div class="quiensomos"><h2>¿Que es APAC?</h2></div>
<div class="quiensomosdesc">
    <p>
        La Asociación Protectora de Animales de Corrales (APAC) es una organización sin ánimo de lucro que se dedica de manera altruista al rescate, cuidado y búsqueda de hogar para gatos abandonados, enfermos y desatendidos en la zona de Huelva. Además, gestionan colonias de gatos proporcionando alimento y realizando el método CER (Captura, Esterilización, Retorno) para controlar la población felina en áreas específicas.
    </p>
    <br>
    <p>
        Los voluntarios de APAC son personas dedicadas que sacrifican parte de su tiempo personal para cuidar del refugio, participar en rescates, facilitar adopciones responsables, hacer seguimiento de las adopciones y realizar diversas actividades relacionadas con el bienestar animal. El refugio de APAC ha sido construido desde cero y financiado principalmente por los propios voluntarios. Sin embargo, el avance en la construcción se realiza de forma gradual debido al costo elevado de los materiales, lo que dificulta la adquisición constante de lo necesario para completar las instalaciones.
    </p>
    <br>
    <p>
        Las donaciones esporádicas son fundamentales para que el refugio pueda seguir avanzando en su construcción. A pesar de las dificultades financieras, todos los voluntarios de APAC se esfuerzan al máximo en el mantenimiento y desarrollo del refugio. Además, APAC organiza eventos donde se venden productos hechos por los propios voluntarios, como objetos de resina, crochet, madera, entre otros. Estos eventos se llevan a cabo en diferentes lugares y fechas, que se pueden consultar en su sitio web en la sección de <a href="Eventos">eventos</a> o en su página de Facebook <a href="https://www.facebook.com/apachuelva?locale=es_ES" target="_blank">"APAC Huelva"</a>. En resumen, APAC es una asociación comprometida con el bienestar de los gatos desamparados en Huelva, donde el esfuerzo y la dedicación de los voluntarios son clave para ayudar a estos animales y avanzar en la construcción y mantenimiento del refugio.
    </p>
</div>
</div>

<div class="tituloContacto">
    <p>Por la seguridad de los animales, mantenemos la localizacion del refugio privada, si desea ponerse en contacto con nosotros, puede hacerlo de la siguiente manera:</p>
</div>
<div class="rowContacto">
    <div class="contactos">
        <h2>Correo Electronico</h2>
        <p class="valorContacto">
            <a href="mailto:apachuelva@gmail.com ">apachuelva@gmail.com</a>
            <button id="enviarCorreoBtn">Enviar Correo</button>
        </p>
    </div>
    <div class="contactos">
        <h2>Telefono</h2>
        <p class="valorContacto">666 66 66 66</p>
    </div>
</div>

<script>
    document.getElementById('enviarCorreoBtn').addEventListener('click', function() {
        fetch('{{ route('enviar.correo') }}', {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        })
            .then(response => {
                if (response.ok) {
                    alert('Correo enviado correctamente.');
                } else {
                    alert('Hubo un problema al enviar el correo.');
                }
            })
            .catch(error => {
                console.error('Error al enviar el correo:', error);
            });
    });
</script>
</body>

</html>
