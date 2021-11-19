<div>
    <div class=" bg-white py-6 flex flex-col justify-center sm:py-12">
        <div class="relative py-3 w-11/12 max-w-xl sm:mx-auto">
            <div class="relative p-8 bg-white shadow-sm sm:rounded-xl">
                <form class="w-full" action="{{ route('tiposervicio.update', $tiposervicio) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-5 relative">
                        <input type="text" id="text"
                            class="peer pt-8 border border-gray-200 focus:outline-none rounded-md focus:border-gray-500 focus:shadow-sm w-full p-3 h-16 placeholder-transparent"
                            name="description" value="{{ old('description', $tiposervicio->description) }}" />
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
                            Servicio</label>
                    </div>
                    <button type="submit" class="w-full bg-indigo-600 text-white p-3 rounded-md">Editar
                        Servicio</button>
                </form>
            </div>
        </div>
    </div>
</div>