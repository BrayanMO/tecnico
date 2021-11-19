<div class="flex justify-center items-center mt-6 h-full lg:h-screen overflow-auto">
    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2">
        <!-- Start Card -->
        <a href="{{ route('tiposervicio.index') }}">
            <div class="bg-blue-600 pt-1 px-2 bg-gradient-to-b from-blue-400 to-blue-500 rounded-xl shadow-lg w-52">
                <div class="flex justify-center">
                    <div class="flex justify-center p-4 bg-blue-400 ring-2 ring-blue-300 rounded-lg shadow-xl w-32">
                        <img class="h-8 w-8 text-white" src="{{ asset('img/soporte-tecnico.svg') }}" alt="">
                    </div>
                </div>
                <div class="p-4">
                    <p class="text-white font-semibold">Crear</p>
                    <div class="flex justify-between mt-2">
                        <p class="text-gray-200">Tipo de servicio</p>

                    </div>
                </div>
            </div>
        </a>
        <!--End Card -->

        <!-- Start Card -->
        <a href="{{ route('tipoequipo.index') }}">
            <div class="bg-blue-600 pt-1 px-2 bg-gradient-to-b from-yellow-300 to-yellow-400 rounded-xl shadow-lg w-52">
                <div class="flex justify-center">
                    <div class="flex justify-center p-4 bg-yellow-300 ring-2 ring-yellow-100 rounded-lg shadow-xl w-32">

                        <img class="h-8 w-8 text-white" src="{{ asset('img/dispositivos.png') }}" alt="">
                    </div>
                </div>
                <div class="p-4">
                    <p class="text-white font-semibold">Crear</p>
                    <div class="flex justify-between mt-2">
                        <p class="text-gray-200">Tipo de equipo</p>
                    </div>
                </div>
            </div>
        </a>
        <!--End Card -->

        <!-- Start Card -->
        <a href="{{ route('serviciotecnico.index') }}">
            <div class="bg-blue-600 pt-1 px-2 bg-gradient-to-b from-pink-400 to-pink-500 rounded-xl shadow-lg w-52">
                <div class="flex justify-center">
                    <div class="flex justify-center p-4 bg-pink-300 ring-2 ring-pink-200 rounded-lg shadow-xl w-32">
                        <img class="h-8 w-8 text-white" src="{{ asset('img/consultar.png') }}" alt="">
                    </div>
                </div>
                <div class="p-4">
                    <p class="text-white font-semibold">Crear</p>
                    <div class="flex justify-between mt-2">
                        <p class="text-gray-200">Servicio Tecnico</p>
                    </div>
                </div>
            </div>
        </a>
        <!--End Card -->

        <!-- Start Card -->
        <a href="{{ route('serviciotecnico.listar') }}">
            <div class="bg-blue-600 pt-1 px-2 bg-gradient-to-b from-indigo-400 to-indigo-500 rounded-xl shadow-lg w-52">
                <div class="flex justify-center">
                    <div class="flex justify-center p-4 bg-indigo-300 ring-2 ring-indigo-200 rounded-lg shadow-xl w-32">
                        <img class="h-8 w-8 text-white" src="{{ asset('img/consultar.png') }}" alt="">
                    </div>
                </div>
                <div class="p-4">
                    <p class="text-white font-semibold">Listar</p>
                    <div class="flex justify-between mt-2">
                        <p class="text-gray-200">Servicios Tecnicos</p>
                    </div>
                </div>
            </div>
        </a>
        <!--End Card -->
        {{-- <a href="{{ route('servicios.servicios') }}"> <button
                class="p-2 pl-5 pr-5 bg-yellow-400	 text-gray-100 text-lg rounded-lg focus:border-4 border-blue-300
            ">Regresar</button></a> --}}
    </div>
</div>
