<div>
    <div class=" bg-white py-6 flex flex-col justify-center sm:py-12">
        <div class="relative py-3 w-11/12 max-w-xl sm:mx-auto">
            <div class="relative p-8 bg-white shadow-sm sm:rounded-xl">
                <form class="w-full" action="{{ route('tipoequipo.store') }}" method="POST">
                    @csrf
                    <div class="mb-5 relative">
                        <input type="text" id="text"
                            class="peer pt-8 border border-gray-200 focus:outline-none rounded-md focus:border-gray-500 focus:shadow-sm w-full p-3 h-16 placeholder-transparent"
                            name="description" value="{{ old('description') }}" />
                        @error('description')
                            {{-- Mensaje de error --}}

                            <div
                                class="flex w-full max-w-sm mx-auto overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
                                <div class="flex items-center justify-center w-12 bg-red-500">
                                    <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M20 3.36667C10.8167 3.36667 3.3667 10.8167 3.3667 20C3.3667 29.1833 10.8167 36.6333 20 36.6333C29.1834 36.6333 36.6334 29.1833 36.6334 20C36.6334 10.8167 29.1834 3.36667 20 3.36667ZM19.1334 33.3333V22.9H13.3334L21.6667 6.66667V17.1H27.25L19.1334 33.3333Z" />
                                    </svg>
                                </div>

                                <div class="px-4 py-2 -mx-3">
                                    <div class="mx-3">
                                        <span class="font-semibold text-red-500 dark:text-red-400">Error</span>
                                        <p class="text-sm text-gray-600 dark:text-gray-200">{{ $message }} :)</p>
                                    </div>
                                </div>
                            </div>
                            {{-- Fin de mensaje error --}}
                        @enderror
                        <label for="text"
                            class="peer-placeholder-shown:opacity-100   opacity-75 peer-focus:opacity-75 peer-placeholder-shown:scale-100 scale-75 peer-focus:scale-75 peer-placeholder-shown:translate-y-0 -translate-y-3 peer-focus:-translate-y-3 peer-placeholder-shown:translate-x-0 translate-x-1 peer-focus:translate-x-1 absolute top-0 left-0 px-3 py-5 h-full pointer-events-none transform origin-left transition-all duration-100 ease-in-out">Tipo
                            Equipo</label>
                    </div>
                    <button type="submit" class="w-full bg-indigo-600 text-white p-3 rounded-md">Crear</button>
                </form>
            </div>
        </div>
    </div>



    {{-- tabla --}}
    <div class="container w-full md:w-4/5 xl:w-3/5  mx-auto px-2">
        <!--Card-->
        <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
            <table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">

                <thead>
                    <tr>
                        <th data-priority="1">#</th>
                        <th data-priority="2">Tipo Equipo</th>
                        <th data-priority="3"></th>
                        <th data-priority="4"></th>

                    </tr>
                </thead>

                <tbody>


                    @php($count = 1)
                    @foreach ($tipoequipos as $equipo)
                        <tr>
                            <td>{{ $count }}</td>
                            <td>{{ $equipo->description }}</td>
                            <td class="flex justify-center">
                                <a href="{{ route('tipoequipo.edit', $equipo->id) }}"> <button
                                        class="p-2 pl-5 pr-5 bg-blue-500 text-gray-100 text-lg rounded-lg focus:border-4 border-blue-300
                                        ">EDITAR</button>
                                </a>
                            <td>
                                {{-- en action {{ route('servicio.destroytipoequipo', $equipo->id) }} --}}
                                {{-- <form action="" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('delete')
                                    <button
                                        class="p-2 pl-5 pr-5 bg-red-500 text-gray-100 text-lg rounded-lg focus:border-4 border-red-300"
                                        type="submit">ELIMINAR</button>
                                </form> --}}
                                {{-- wire:click="$emit('deleteServicio',{{ $servicios->id }})" --}}
                                <a href="#"
                                    class="p-2 pl-5 pr-5 bg-red-500 text-gray-100 text-lg rounded-lg focus:border-4 border-red-300"
                                    wire:click="$emit('deleteEquipo',{{ $equipo->id }})">
                                    Eliminar
                                </a>
                            </td>
                            </td>
                        </tr>
                        @php($count++)
                    @endforeach

                </tbody>

            </table>
            <a href="{{ route('dashboard') }}"> <button
                    class="p-2 pl-5 pr-5 bg-yellow-400	 text-gray-100 text-lg rounded-lg focus:border-4 border-blue-300
                "
                    data-target="#Modaleditartiposervicio">Regresar</button></a>
        </div>
        <!--/Card-->


    </div>
    <!--/container-->
    {{-- modal --}}
    <x-jet-dialog-modal wire:model="open_edit">
        <x-slot name="title">
            Error al eliminar
        </x-slot>
        <x-slot name="content">
            {{-- mensaje error --}}
            <h1>El tipo servicio no se pudo eliminar</h1>
            <p>Es una clave foranea</p>
            <button wire:click="$set('open_edit',false)" class="px-4 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-600 rounded-md hover:bg-indigo-500 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-80">
                Cerrar
            </button>
            {{-- mensaje error fin --}}
        </x-slot>
        <x-slot name="footer">
        </x-slot>
    </x-jet-dialog-modal>
    {{-- fin modal --}}



    @push('js')
    
        <!-- jQuery -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

        <!--Datatables -->
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
        <script>
            $(document).ready(function() {

                var table = $('#example').DataTable({
                        responsive: true
                    })
                    .columns.adjust()
                    .responsive.recalc();
            });
        </script>

        <script src="sweetalert2.all.min.js"></script>
        <script>
            Livewire.on('deleteEquipo', equipoId => {
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
                        Livewire.emitTo('tipo-equipo.show', 'delete', equipoId);
                        // Swal.fire(
                        //     'Deleted!',
                        //     'Su archivo ha sido borrado.',
                        //     'success'
                        // )
                    }
                })
            });
        </script>
    @endpush
</div>
