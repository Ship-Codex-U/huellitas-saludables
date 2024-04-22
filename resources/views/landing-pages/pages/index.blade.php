<x-app-layout layout="landing">
    <div class="banner-one-app">
        <div class="container">
            <div class="row align-items-center"> <!-- Alinea verticalmente el contenido -->
                <div class="col-sm-6 banner-one-img text-center"> <!-- Centra la imagen -->
                    <img src="{{ asset('images/banner/banner-top.png') }}" alt="banner" style="max-width: 100%; border: 2px solid #000;">
                </div>
                <div class="col-sm-6 inner-box">
                    <p class="mb-2 text-uppercase text-secondary">
                        Cuida a tu mascota
                    </p>
                    <h1 class="text-secondary mb-4">La Felicidad De<br><span class="text-primary">Tu Mascota</span></h1>
                    <div style="width: 100%; max-width: 404px; border: 2px solid #000;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8879.541777904873!2d-103.32288771502738!3d20.653811316334732!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428b22e0186c67b%3A0x586140f7303593bc!2sCl%C3%ADnica%20Veterinaria%20Revoluci%C3%B3n!5e0!3m2!1ses-419!2smx!4v1709944253295!5m2!1ses-419!2smx" width="400" height="300" style="border:0; max-width: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                    <p class="card-text">2. Mantén siempre agua fresca y limpia disponible para tu gato.</p><br><br>
                    <p class="card-text">3. Realiza revisiones periódicas de la caja de arena y límpiala regularmente.</p>
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
                    <p class="card-text">2. Alimenta a tu perro con una dieta balanceada y adecuada para su edad y tamaño.</p>
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
