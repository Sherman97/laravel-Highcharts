<div class="py-12 flex justify-center">
    {{-- The Master doesn't talk, he acts. --}}
    
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            
            @if(session()->has('message'))
                <div class="bg-teal-100 rounded-b text-teal-900 px-4 py-4 shadow-md my-3" role="alert">
                    <div class="flex">
                        <div>
                            <h4>{{ session('message')}}</h4>
                        </div>
                    </div>
                </div>
            @endif


            <button wire:click="crear()" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 my-3 rounded-lg">New</button>
            @if ($modal)
                @include('livewire.crear')
            @endif

            <button wire:click="graficos()" class="bg-orange-500 hover:bg-orange-600 text-white font-bold py-2 px-4 my-3 rounded-lg">Estadisticas</button>
           

            
            <table class="table-fixed w-full max-w-4xl">
                <thead>
                    <tr class="bg-indigo-600 text-white">
                        <th class="w-1/3 px-4 py-2">Id</th>
                        <th class="w-2/3 px-4 py-2">Descripción</th>
                        <th class="w-2/3 px-4 py-2">Cantidad</th>
                        <th class="w-2/3 px-4 py-2">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($productos as $producto)
                       <tr class="text-black">
                            <td class="border px-4 py-2">{{ $producto->id }}</td>
                            <td class="border px-4 py-2">{{ $producto->description }}</td>
                            <td class="border px-4 py-2">{{ $producto->cantidad }}</td>
                            <td class="border px-4 py-2">
                                <button wire:click="edit({{$producto->id}})" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg">Editar</button>
                                <button wire:click="delete({{ $producto->id }})" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded-lg">Eliminar</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
