<div wire:init='loadServicio'>
    {{-- inicio select --}}
    <div class="mt-6 flex flex-center justify-center">
        <select wire:model="estado" name="" id="filtro" class="ml-1 mr-3 bg-gray-800 text-white rounded">
            <option selected>Seleccione Estado:</option>
            <option value="1">Terminados</option>
            <option value="0">En proceso</option>
        </select>
        <x-jet-input wire:model="nombre" placeholder="Buscar por nombre"></x-jet-input>
    </div>

    {{-- fin select --}}
    @if (count($serviciotecnicos))
        {{-- cards --}}
        <div class=" grid lg:grid-cols-3 md:grid-cols-2 container sm:grid-cols-1 mt-6 mb-6">
            @foreach ($serviciotecnicos as $servicios)
                <div
                    class=" w-full mb-4  sm:mb-4 md:mx-4 max-w-sm px-4 py-3 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800" style="overflow-x: scroll;">
                    <div class="flex items-center justify-between">
                        <span class="text-sm font-light text-gray-800 dark:text-gray-400">{{ $servicios->nombredueno }}
                            {{ $servicios->apellidodueno }}</span>
                        @if ($servicios->estado == 0)
                            <span
                                class="px-3 py-1 text-xs text-white uppercase bg-green-600 rounded-full dark:bg-indigo-300 dark:text-indigo-900">En
                                Proceso</span>
                        @else
                            <span
                                class="px-3 py-1 text-xs text-white uppercase bg-blue-600 rounded-full dark:bg-indigo-300 dark:text-indigo-900">Terminado</span>
                        @endif
                    </div>

                    <div>
                        <h1 class="mt-2 text-lg font-semibold text-gray-800 dark:text-white">
                            {{ $servicios->tipoequipo }}: {{ $servicios->marcaequipo }}-
                            {{ $servicios->modeloequipo }}</h1>
                        <p class="mt-2 text-sm text-gray-600 dark:text-gray-300">{{ $servicios->fallas }}</p>
                    </div>

                    <div>
                        <div class="flex  items-center mt-2 text-gray-700 dark:text-gray-200">
                            <span>Celular:</span>
                            <span
                                class="mx-2 text-blue-600 cursor-pointer dark:text-blue-400 hover:underline">{{ $servicios->celulardueno }}</span>
                            <span>Correo:</span>
                            <span
                                class="mx-2 text-blue-600 cursor-pointer dark:text-blue-400 hover:underline">{{ $servicios->emaildueno }}</span>
                        </div>


                        <div class="grid-cols-2 items-center justify-center mt-4">
                            <span class=" ml-8 mr-4">Fecha Entrada</span>
                            <a
                                class="mr-2 text-gray-800 cursor-pointer dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300">
                                <input type="text" style="width : 150px; heigth : 3px"
                                    class="text-center mb-1 bg-transparent" readonly
                                    value="{{ $servicios->fechaentrada }}">
                            </a>
                            <span class=" ml-8 mr-6">Fecha Salida</span>
                            <a
                                class=" mr-2 text-gray-800 cursor-pointer dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300">
                                <input type="text" style="width : 150px; heigth : 3px"
                                    class="text-center bg-transparent" readonly value="{{ $servicios->fechasalida }}">
                            </a>
                        </div>
                        <div class="flex items-center justify-center mt-4">
                            {{-- ver --}}
                            <a href="{{ route('serviciotecnico.edit', $servicios->id) }}"
                                class="mr-2 text-gray-800 cursor-pointer dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300">
                                <i
                                    class="hover:bg-green-500 text-white rounded-md px-4 py-2 bg-blue-500 far fa-eye"></i>
                            </a>


                            {{-- fin ver --}}
                            {{-- eliminar --}}
                            <a href="#"
                                class="mr-2 text-gray-800 cursor-pointer dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300"
                                wire:click="$emit('deleteServicio',{{ $servicios->id }})">
                                <i
                                    class="hover:bg-indigo-500 text-white rounded-md px-4 py-2 bg-red-800 fa fa-trash"></i>
                            </a>
                            {{-- fin eliminar --}}


                            <a class="mr-2 text-gray-800 cursor-pointer dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300
                            " href="{{ route('enviarcorreo.store', $servicios->id) }}"
                            
                           >

                                <i
                                    class="hover:bg-indigo-500 text-white rounded-md px-4 py-2 bg-green-700 fas fa-check-circle"></i>
                            </a>
                            {{-- <form action="{{ route('enviarcorreo.store',$servicios->emaildueno ) }}" method="post">
                                @csrf
                                <a
                                    class="mr-2 text-gray-800 cursor-pointer dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300">
                                    <button
                                        class="px-4 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-yellow-400	 rounded-md hover:bg-indigo-500 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-80">
                                        Hecho
                                    </button>
                                </a>
                            </form> --}}
                        </div>
                        {{-- precio --}}
                        <div class="text-center items-center mt-2 text-gray-700 dark:text-gray-200">
                            <span class="pt-2 text-4xl font-bold text-gray-800 uppercase dark:text-gray-100">
                                S/{{ $servicios->precio }}
                            </span>

                        </div>
                        {{-- precio --}}
                    </div>
                    @if ($servicios->fechasalida <= Carbon\Carbon::today()->toDateTimeString() && $servicios->estado == 0)
                        <span
                            class="  content-start px-3 py-1 text-xs text-indigo-100 uppercase bg-red-600 rounded-full dark:bg-indigo-300 dark:text-indigo-900">Urgente</span>
                    @else
                        {{-- {{ Carbon\Carbon::today()->toDateTimeString() }} --}}
                    @endif
                </div>

                {{-- termina tarjeta tarjeta --}}
            @endforeach



        </div>
        @if ($serviciotecnicos->hasPages())

            <div class="">
                {{ $serviciotecnicos->links() }}
            </div>

        @endif
    @else
        {{-- mensaje de que no encontro nada --}}
        <div class="mt-4 flex w-full max-w-sm mx-auto overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
            <div class="flex items-center justify-center w-12 bg-blue-500">
                <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM21.6667 28.3333H18.3334V25H21.6667V28.3333ZM21.6667 21.6666H18.3334V11.6666H21.6667V21.6666Z" />
                </svg>
            </div>

            <div class="px-4 py-2 -mx-3">
                <div class="mx-3">
                    <span class="font-semibold text-blue-500 dark:text-blue-400">Informacion</span>
                    <p class="text-sm text-gray-600 dark:text-gray-200">No pude encontrar lo que buscas</p>
                </div>
            </div>
        </div>

    @endif

    @push('js')
        <script src="sweetalert2.all.min.js"></script>
        <script>
            Livewire.on('deleteServicio', servicioId => {
                Swal.fire({
                    title: '¿Estás seguro?',
                    text: "No podrás revertirlo.",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Sí, bórralo.'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Livewire.emitTo('servicio-tecnico.listar', 'delete', servicioId);
                        Swal.fire(
                            'Deleted!',
                            'Su archivo ha sido borrado.',
                            'success'
                        )
                    }
                })
            });

        </script>
    @endpush

</div>
