<section id="seccion-2" class="bg-gradient-to-r from-purple-600 to-purple-800 py-16 min-h-screen" x-data="{ hoveredImage: null }">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl lg:text-5xl font-bold mb-8 text-center text-white animate-bounce">¡Mira las ventajas!</h1>
        <p class="text-lg lg:text-xl mb-6 text-center text-white">No hay duda de que esto es lo mejor.</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="border border-gray-300 rounded-lg overflow-hidden flex flex-col"
                @mouseenter="hoveredImage = 'eficiencia'" @mouseleave="hoveredImage = null">
                <div class="flex justify-center items-center p-8 bg-white">
                    <img :src="hoveredImage === 'eficiencia' ? '{{ asset('img/eficiencia.png') }}' : '{{ asset('img/eficiencia.png') }}'"
                        class="w-32 h-32 border-4 border-blue-500 rounded-full transition-transform duration-300 transform hover:scale-110"
                        alt="Icono de eficiencia">
                </div>
                <div class="p-6 bg-gray-50 flex-grow">
                    <h3 class="text-lg lg:text-xl font-bold text-center mb-4 bg-blue-500 text-white py-2 rounded-lg">
                        ¡Mejora tu eficiencia!</h3>
                    <p class="text-base lg:text-lg text-justify font-bold">Planificar y priorizar actividades
                        efectivamente maximiza la productividad y eficiencia.</p>
                </div>
                <div class="bg-gradient-to-t from-blue-500 to-blue-700 p-4"></div>
            </div>
            <div class="border border-gray-300 rounded-lg overflow-hidden flex flex-col"
                @mouseenter="hoveredImage = 'estres'" @mouseleave="hoveredImage = null">
                <div class="flex justify-center items-center p-8 bg-white">
                    <img :src="hoveredImage === 'estres' ? '{{ asset('img/estres.png') }}' : '{{ asset('img/estres.png') }}'"
                        class="w-32 h-32 border-4 border-green-500 rounded-full transition-transform duration-300 transform hover:scale-110"
                        alt="Icono de estrés">
                </div>
                <div class="p-6 bg-gray-50 flex-grow">
                    <h3 class="text-lg lg:text-xl font-bold text-center mb-4 bg-green-500 text-white py-2 rounded-lg">
                        ¡Reduce tu estrés!</h3>
                    <p class="text-base lg:text-lg text-justify font-bold">Una planificación clara y estructurada
                        disminuye la ansiedad y mejora el bienestar.</p>
                </div>
                <div class="bg-gradient-to-t from-green-500 to-green-700 p-4"></div>
            </div>
            <div class="border border-gray-300 rounded-lg overflow-hidden flex flex-col"
                @mouseenter="hoveredImage = 'tiempo'" @mouseleave="hoveredImage = null">
                <div class="flex justify-center items-center p-8 bg-white">
                    <img :src="hoveredImage === 'tiempo' ? '{{ asset('img/tiempo.png') }}' : '{{ asset('img/tiempo.png') }}'"
                        class="w-32 h-32 border-4 border-yellow-500 rounded-full transition-transform duration-300 transform hover:scale-110"
                        alt="Icono de gestión del tiempo">
                </div>
                <div class="p-6 bg-gray-50 flex-grow">
                    <h3 class="text-lg lg:text-xl font-bold text-center mb-4 bg-yellow-500 text-white py-2 rounded-lg">
                        Gestión del tiempo</h3>
                    <p class="text-base lg:text-lg text-justify font-bold">Distribuir equitativamente las tareas y
                        evitar la procrastinación optimiza la productividad.</p>
                </div>
                <div class="bg-gradient-to-t from-yellow-500 to-yellow-700 p-4">
                    <h3 class="text-sm text-center text-white font-bold"></h3>
                </div>
            </div>
        </div>
    </div>
</section>
