<section id="seccion-1" x-data="{ loaded: false, textLength: 0 }" x-init="setTimeout(() => loaded = true, 500);
    setInterval(() => textLength = (textLength + 1) % 45, 150)"
        class="bg-gradient-to-bl from-gray-900 to-purple-900 py-16 min-h-screen">
        <div class="banner_section flex justify-center items-center" x-show="loaded" x-transition>
            <div class="container mx-auto px-4">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 items-center">
                    <div class="col-md-6 text-center lg:text-left">
                        <h1 class="banner_taital text-3xl lg:text-5xl font-bold mb-4 text-white"
                            x-text="'Simplifica tu vida, una tarea a la vez'.substr(0, textLength)">
                            <span class="text-gray-200">¡Vamos!</span><br>
                        </h1>
                        <h2 class="banner_text text-lg lg:text-xl mb-4 text-white text-justify">La organización
                            eficiente de nuestras responsabilidades nos permite dedicar más tiempo a lo que realmente
                            importa en la vida: relaciones significativas, pasatiempos enriquecedores y momentos de
                            tranquilidad. Al liberar tiempo de nuestras tareas, podemos encontrar un equilibrio que nos
                            permita disfrutar plenamente de cada día.</h2>
                    </div>
                    <div class="col-md-6 flex justify-center lg:justify-end">
                        <div class="image_1 lg:mx-0" x-transition><img src="{{ asset('img/tarea.png') }}"
                                class="w-96 lg:w-full max-w-md" alt="Healthcare image"
                                style="transform: translateX(0); transition: transform 0.5s;"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
