<div>
    <section id="seccion-3"
        class="bg-gradient-to-r from-purple-500 to-purple-700 py-16 min-h-screen flex items-center justify-center">
        <div class="container mx-auto text-center">
            <section class="spikes bg-gray-700"></section>

            @if(session()->has('message'))
            <h3 class="bg-blue-400 font-bold p-2 w-1/3 rounded text-center text-sm text-white">{{ session('message') }}</h3>
        @endif

            <livewire:task/>
        </div>
    </section>
</div>
