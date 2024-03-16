<nav class="bg-gray-200 text-black py-2 fixed w-full top-0 z-10">
    <div class="container mx-auto px-4 flex justify-between items-center">
        <span class="text-xl font-bold">Tus Tareas</span>
        <div class="md:hidden">
            <button id="menu-toggle" class="text-gray-800 focus:outline-none">
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
                </svg>
            </button>
        </div>
        <div id="menu-links" class="hidden md:flex space-x-4">
            <a href="#seccion-1" class="nav-link hover:text-gray-800 focus:text-gray-800 font-bold">Inicio</a>
            <a href="#seccion-2" class="nav-link hover:text-gray-800 focus:text-gray-800 font-bold">Ventajas</a>
            <a href="#seccion-3" class="nav-link hover:text-gray-800 focus:text-gray-800 font-bold">Gestor</a>
        </div>
    </div>
</nav>

<div id="menu" class="md:hidden hidden bg-white bg-opacity-80 py-2 fixed top-12 right-4 z-10 rounded-lg">
    <div class="container mx-auto px-4 flex flex-col space-y-2">
        <a href="#seccion-1" class="block nav-link hover:text-gray-800 focus:text-gray-800 font-bold">Inicio</a>
        <a href="#seccion-2" class="block nav-link hover:text-gray-800 focus:text-gray-800 font-bold">Ventajas</a>
        <a href="#seccion-3" class="block nav-link hover:text-gray-800 focus:text-gray-800 font-bold">Gestor</a>
    </div>
</div>

<script>
    const menuToggle = document.getElementById('menu-toggle');
    const menu = document.getElementById('menu');

    menuToggle.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
</script>
