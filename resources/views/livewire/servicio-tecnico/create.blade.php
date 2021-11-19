<div>
    <section class="mt-4 mb-4 max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">
        <h2 class="text-lg text-center font-semibold text-gray-700 capitalize dark:text-white">Nuevo Servicio Tecnico</h2>
        <form method="post" action="{{ route('serviciotecnico.store') }}" autocomplete="off">
            @csrf
            <div class="grid grid-cols-1  gap-4 mt-4 sm:grid-cols-1">
                {{-- Nombre --}}
                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="username">Nombre</label>
                    <input id="username" name="nombredueno" type="text"
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"
                        pattern="^[a-zA-Z ]*$" title="NO DEBE DE TENER NUMEROS" value="{{ old('nombredueno') }}">
                    @error('nombredueno')
                        {{-- Mensaje de error --}}
                        <div class="flex w-full max-w-sm mx-auto overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
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
                </div>
                {{-- Apellido --}}
                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="username">Apellido</label>
                    <input id="username" name="apellidodueno" type="text"
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"
                        pattern="^[a-zA-Z ]*$" title="NO DEBE DE TENER NUMEROS" value="{{ old('apellidodueno') }}">
                    @error('apellidodueno')
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
                </div>
                {{-- Email --}}
                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="emailAddress">Email</label>
                    <input id="emailAddress" name="emaildueno" type="email"
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"
                        value="{{ old('emaildueno') }}">
                    @error('emaildueno')
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
                </div>
                {{-- Celular --}}
                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="celular">Celular</label>
                    <input id="celular" name="celulardueno" type="tel"
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"
                        pattern="[0-9]{9}" title="DEBE TENER 9 DIGITOS EL NUMERO DE TELEFONO" value="{{ old('celulardueno') }}">
                    @error('celulardueno')
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
                </div>
                {{-- Direccion --}}
                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="direccion">Direccion</label>
                    <input autocomplete="nope" id="direccion" name="direcciondueno" type="text"
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"
                        value="{{ old('direcciondueno') }}">
                    @error('direcciondueno')
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
                </div>
                {{-- Tipo Equipo --}}
                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="tipoequipo">Tipo Equipo</label>
                    <input id="visible-example" type="text" list="datalist-example" name="visibleequipo"
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"
                        value="{{ old('visibleequipo') }}">
                    <datalist id="datalist-example" >
                        @foreach ($tipoequipos as $equipo)
                            <option data-value="{{ $equipo->id }}" value="{{ $equipo->description }}">{{ $equipo->description }}</option> 
                        @endforeach
                    </datalist>
                    <input id="example" name="idtipoequipo" value="{{ old('idtipoequipo') }}" type="hidden">
                    @error('idtipoequipo')
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
                </div>
                {{--Marca--}}
                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="marca">Marca</label>
                    <input id="marca" name="marcaequipo" type="text"
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"
                        value="{{ old('marcaequipo') }}">
                    @error('marcaequipo')
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
                </div>
                {{--Modelo --}}
                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="modelo">Modelo</label>
                    <input id="modelo" name="modeloequipo" type="text"
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"
                        value="{{ old('modeloequipo') }}">
                    @error('modeloequipo')
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
                </div>
                {{-- Tipo Servicio --}}
                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="tiposervicio">Tipo Servicio</label>
                    <input id="tiposervicio" name="visibletiposervicio" type="text" list="datalist-tiposervicio"
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"
                        value="{{ old('visibletiposervicio') }}">
                    <datalist id="datalist-tiposervicio">
                        @foreach ($tiposervicios as $servicio)
                            <option data-value="{{ $servicio->id }}" value="{{ $servicio->description }}">
                        @endforeach
                    </datalist>
                    <input id="IDtiposervicio" name="idtiposervicio" value="{{ old('idtiposervicio') }}"type="hidden">
                    @error('idtiposervicio')
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
                </div>
                {{--Fallas  --}}
                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="fallas">Fallas</label>
                    <textarea id="fallas" name="fallas"
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"
                        cols="30" rows="10">{{ old('fallas') }} </textarea>
                    @error('fallas')
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

                </div>
                
                
                {{-- Fecha entrada --}}
                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="fechaentrada">Fecha entrada</label>
                    <input id="fechaentrada" type="date" name="fechaentrada"
                        class="flex w-full px-2 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"
                        value="{{ old('fechaentrada') }}">
                    @error('fechaentrada')
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
                </div>
                {{--Fecha salida  --}}
                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="fechasalida">Fecha Salida</label>
                    <input id="fechasalida" type="date" name="fechasalida"
                        class="flex w-full px-2 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"
                        value="{{ old('fechasalida') }}">
                    @error('fechasalida')
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
                </div>
                {{-- Estado --}}
                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="estado">Estado</label>
                    <input autocomplete="nope"  id="estadovisible" name="estadovisible" type="text" list="listaestado"
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"
                        value="{{ old('estadovisible') }}" autocomplete="off">
                    <datalist id="listaestado">
                        <option data-value="0" value="En proceso">
                        <option data-value="1" value="Terminado">
                    </datalist>
                    <input id="IDestado" name="estado"   value="{{ old('estado') }}" type="hidden">
                    @error('estado')
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
                </div>

                {{-- Precio servicio --}}
                <div>
                    <label class="text-gray-700 dark:text-gray-200" for="precio">Precio Servicio</label>
                    <input id="precio" name="precio" type="number" min="0.00" max="10000.00" step="0.01"
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"
                        value="{{ old('precio') }}">
                    @error('precio')
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
                </div>
                {{--  --}}
            </div>
            {{-- Boton --}}
            <div class="flex justify-end mt-6">
                <button
                    class="mr-2 px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600" type="submit">Guardar</button>
                    {{-- cancelar --}}
                    <a class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-red-400 rounded-md hover:bg-red-200 focus:outline-none focus:bg-gray-600"  href="{{ route('dashboard') }}">
                        Cancelar
                    </a>
            </div>
             
        </form>
    </section>
    <script>
        var timer;
        var dropdown = document.getElementById('visible-example');
        dropdown.addEventListener('change', function(event) {
            var target = event.target.value;
            console.log( event.target.value);
            var datalist = document.getElementById('datalist-example').childNodes;
            timer = setTimeout(function() {
                for (var i = 0; i < datalist.length; i++) {
                    if (datalist[i].value === target) {
                        document.getElementById('example').value = datalist[i].dataset.value;
                        console.log(datalist[i].dataset.value);
                        break;
                    }
                }
            }, 1);
        });
        dropdown.addEventListener('blur', function(e) {
            clearTimeout(timer);
        });

        // /*  tiposervicio */
        // timer=tiempo
        // dropdown = inputvisible
        // visible-example= tiposervicio
        // datalist-example= datalist-tiposervicio
        // example= IDtiposervicio
        var tiempo;
        var inputvisible = document.getElementById('tiposervicio');
        inputvisible.addEventListener('change', function(event) {
            var target = event.target.value;
            var datalist = document.getElementById('datalist-tiposervicio').childNodes;
            tiempo = setTimeout(function() {
                for (var i = 0; i < datalist.length; i++) {
                    if (datalist[i].value === target) {
                        document.getElementById('IDtiposervicio').value = datalist[i].dataset.value;
                        break;
                    }
                }
            }, 1);
        });
        inputvisible.addEventListener('blur', function(e) {
            clearTimeout(tiempo);
        });


        // /*  Estado */
        var tiempo1;
        var inputvisible1 = document.getElementById('estadovisible');
        inputvisible1.addEventListener('change', function(event) {
            var target = event.target.value;
            var datalist = document.getElementById('listaestado').childNodes;
            tiempo1 = setTimeout(function() {
                for (var i = 0; i < datalist.length; i++) {
                    if (datalist[i].value === target) {
                        document.getElementById('IDestado').value = datalist[i].dataset.value;
                        break;
                    }
                }
            }, 1);
        });
        inputvisible1.addEventListener('blur', function(e) {
            clearTimeout(tiempo1);
        });


    </script>
</div>
