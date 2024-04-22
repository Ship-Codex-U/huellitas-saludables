<x-app-layout layout="landing">
<link rel="stylesheet" href="{{ asset('css/landing_page.css') }}">

    <div class="banner-one-app">
        <div class="container">
            <div class="row align-items-center"> <!-- Alinea verticalmente el contenido -->
                <div class="col-sm-6 banner-one-img text-center"> <!-- Centra la imagen -->
                    <img id="banner-image" src="{{ asset('images/banner/banner-top.png') }}" alt="banner" style="max-width: 100%;">
                </div>
                <div class="col-sm-6 inner-box">
                    <h1 class="text-secondary mb-4">La Felicidad De<br><span class="text-primary">Tu Mascota</span></h1>
                </div>
            </div>
        </div>
    </div>

<!-- Sección para el mapa y datos del domicilio -->
    <div class="container map-section">
        <div class="row">
            <div class="col-md-6">
                <div>
                    <h2>Datos del Domicilio</h2>
                    <p><b>Dirección:</b> Av. Revolución #123, Col. Centro, Ciudad de México</p>
                    <p><b>Teléfono:</b> (55) 1234-5678</p>
                    <p><b>Correo electrónico:</b> info@clinicaveterinaria.com</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8879.541777904873!2d-103.32288771502738!3d20.653811316334732!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428b22e0186c67b%3A0x586140f7303593bc!2sCl%C3%ADnica%20Veterinaria%20Revoluci%C3%B3n!5e0!3m2!1ses-419!2smx!4v1709944253295!5m2!1ses-419!2smx" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin de la sección del mapa y datos del domicilio -->


    <div class="container mt-5">
        <div class="container">
            <div class="row mx-2 mx-sm-0">
                <div class="col-lg-6">
                    <?php
                    // Genera un número aleatorio entre 1 y 3
                    $random_number = rand(1, 2);
                    ?>
                    <img src="{{ asset('images/landing-page/veterinario' . $random_number . '.png') }}" class="card-img-top" alt="Consejos para Gatos">
                </div>
                <div class="col-lg-6 top-feature">
                    <div class="text-right" style="text-align: justify;">
                        <p class="mb-2 text-uppercase text-secondary"><b>Por qué elegirnos</b></p>
                        <h2 class="mb-3 text-secondary notch-feature-txt">Características Principales</h2>
                        <p class="mb-3 text-secondary pb-1"><b>1.Profesionales cualificados:</b> Nuestro equipo veterinario cuenta con amplia experiencia y formación, incluyendo veterinarios, técnicos y personal de apoyo.</p>
                        <p class="mb-3 text-secondary "><b>2.Servicios médicos completos:</b> Ofrecemos una amplia gama de servicios médicos para mascotas, como consultas generales, vacunación, esterilización, cirugía, cuidado dental, diagnóstico por imagen, laboratorio clínico, entre otros.</p>
                        <p class="mb-3 text-secondary "><b>3.Servicios médicos completos:</b> Ofrecemos una amplia gama de servicios médicos para mascotas, como consultas generales, vacunación, esterilización, cirugía, cuidado dental, diagnóstico por imagen, laboratorio clínico, entre otros.</p>
                        <p class="mb-3 text-secondary"><b>4.Tecnología avanzada:<b> Utilizamos tecnología y equipos médicos avanzados para diagnosticar y tratar a las mascotas con precisión y eficacia.</p>
                        <p class="mb-3 text-secondary "><b>5.Atención personalizada:</b> Brindamos atención personalizada y un enfoque compasivo hacia cada mascota y su familia.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <?php
                    // Genera un número aleatorio entre 1 y 3
                    $random_number = rand(1, 3);
                    ?>
                    <img src="{{ asset('images/landing-page/gatito' . $random_number . '.png') }}" class="card-img-top" alt="Consejos para Gatos">
                    <div class="card-body">
                        <h4 class="card-title">Consejos para Gatos</h4>
                        <p class="card-text">1. Proporciona un rascador para que tu gato pueda afilar sus uñas de forma adecuada.</p><br>
                        <p class="card-text">2. Mantén siempre agua fresca y limpia disponible para tu gato.</p><br>
                        <p class="card-text">3. Realiza revisiones periódicas de la caja de arena y límpiala regularmente para evitar asi mismo otras enfermedades.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <?php
                    // Genera un número aleatorio entre 1 y 3
                    $random_number = rand(1, 3);
                    ?>
                    <img src="{{ asset('images/landing-page/perrito' . $random_number . '.png') }}" class="card-img-top" alt="Consejos para Perros">
                    <div class="card-body">
                        <h4 class="card-title">Consejos para Perros</h4>
                        <p class="card-text">1. Pasea a tu perro regularmente para que haga ejercicio y se mantenga saludable.</p><br>
                        <p class="card-text">2. Alimenta a tu perro con una dieta balanceada y adecuada para su edad y tamaño.</p><br>
                        <p class="card-text">3. Dedica tiempo a entrenar a tu perro para fortalecer el vínculo entre ambos y mejorar su comportamiento.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <?php
                    // Genera un número aleatorio entre 1 y 3
                    $random_number = rand(1, 3);
                    ?>
                    <img src="{{ asset('images/landing-page/roedor' . $random_number . '.png') }}" class="card-img-top" alt="Consejos para Roedores">
                    <div class="card-body">
                        <h4 class="card-title">Consejos para Roedores</h4>
                        <p class="card-text">1. Proporciona un hábitat adecuado y espacioso para tu roedor, con suficiente ventilación y áreas para esconderse.</p>
                        <p class="card-text">2. Ofrece una dieta equilibrada que incluya heno, verduras frescas y pellets específicos para roedores.</p>
                        <p class="card-text">3. Brinda juguetes y actividades para mantener activo mentalmente a tu roedor y prevenir el aburrimiento.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center mb-4">Nuestros Servicios Adicionales</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h4 class="card-title">Servicios de Peluquería</h4>
                        <p class="card-text">Ofrecemos servicios de grooming para mantener a tu mascota con un aspecto saludable y limpio.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h4 class="card-title">Entrenamiento Personalizado</h4>
                        <p class="card-text">Contamos con entrenadores profesionales que pueden ayudar a mejorar el comportamiento y habilidades de tu mascota.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h4 class="card-title">Alojamiento para Mascotas</h4>
                        <p class="card-text">Ofrecemos servicios de alojamiento para que tu mascota pueda quedarse con nosotros mientras estás fuera de la ciudad.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Agrega más tarjetas de servicios aquí -->
    </div>
</x-app-layout>

<!-- Agrega este script al final del cuerpo de tu página -->
<script>
    // Función para cambiar las imágenes cada 7 segundos
    setInterval(function() {
        // Obtener todas las imágenes que deseas cambiar
        var images = document.querySelectorAll('img');

        // Iterar sobre cada imagen
        images.forEach(function(image) {
            // Obtener el número aleatorio
            var randomNumber = Math.floor(Math.random() * 3) + 1;

            // Obtener la ruta actual de la imagen
            var currentSrc = image.getAttribute('src');

            // Verificar si la ruta actual contiene "gatito", "perrito" o "roedor"
            if (currentSrc.includes('gatito')) {
                // Cambiar la ruta de la imagen a una nueva imagen de gatito
                image.setAttribute('src', "{{ asset('images/landing-page/gatito') }}" + randomNumber + ".png");
            } else if (currentSrc.includes('perrito')) {
                // Cambiar la ruta de la imagen a una nueva imagen de perrito
                image.setAttribute('src', "{{ asset('images/landing-page/perrito') }}" + randomNumber + ".png");
            } else if (currentSrc.includes('roedor')) {
                // Cambiar la ruta de la imagen a una nueva imagen de roedor
                image.setAttribute('src', "{{ asset('images/landing-page/roedor') }}" + randomNumber + ".png");
            }
        });
    }, 7000); // Cambiar cada 7 segundos (7000 milisegundos)
</script>
