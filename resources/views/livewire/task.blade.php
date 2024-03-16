<div class="max-w-md mx-auto">
    <form class="p-4 mb-4 bg-gray-200 rounded-md" wire:submit.prevent="save">
        <div class="max-w-md mx-auto">
            <h1 class="text-6xl font-extrabold text-center mb-8 relative">
                <span class="relative inline-block text-black">MIS TAREAS</span>
                <span class="absolute inset-0 text-transparent bg-gradient-to-r from-yellow-400 via-red-500 to-pink-500 bg-clip-text">MIS TAREAS</span>
                <span class="absolute inset-0 bg-gradient-to-r from-yellow-400 via-red-500 to-pink-500 bg-clip-text opacity-30"></span>
            </h1>
        </div>
        <div class="flex items-center mb-4">
            <input wire:model="task.text" class="p-2 bg-white w-full rounded-md mr-2" type="text" placeholder="Tarea...">
            <button type="submit" class="bg-indigo-700 text-white font-bold rounded shadow px-4 py-2">Guardar</button>
        </div>
        @error("task.text")<div class="text-red-600 text-sm">{{ $message }}</div>@enderror
    </form>

    <table class="shadow-md w-full bg-white rounded-md">
        <thead>
        <tr class="bg-gray-200 text-gray-600 uppercase text-sm">
            <th class="py-3 px-6 text-left">Hecha</th>
            <th class="py-3 px-6 text-left">Tarea</th>
            <th class="py-3 px-6 text-left">&nbsp;</th>
        </tr>
        </thead>
        <tbody class="text-gray-600">
            @forelse($tasks as $task)
                <tr class="border-b border-gray-200 {{ $task->done ? 'bg-green-200' : '' }}">
                    <td class="px-4 py-2"><input type="checkbox" wire:click="done({{ $task->id }})" {{ $task->done ? 'checked' : '' }} class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out"></td>
                    <td class="px-4 py-2 {{ $task->done ? 'line-through' : '' }}">{{ $task->text }}</td>
                    <td class="px-4 py-2">
                        <button wire:click="edit({{ $task->id }})" type="button" class="bg-indigo-400 px-2 py-1 text-white text-xs rounded">Editar</button>
                        <button wire:click="delete({{ $task->id }})" type="button" class="bg-red-500 px-2 py-1 text-white text-xs rounded">Eliminar</button>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="px-4 py-2">No existen tareas para mostrar.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
