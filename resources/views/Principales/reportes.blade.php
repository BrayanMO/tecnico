<x-app-layout>
    <!-- component -->
    {{-- <section class="relative  bg-blueGray-50">
        <div class="relative pt-16 pb-32 flex content-center items-center justify-center min-h-screen-75">
            <div class="absolute top-0 w-full h-full bg-center bg-cover" style="
                background-image: url('https://images.unsplash.com/photo-1518644730709-0835105d9daa?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=2070&q=80');
              ">
                <span id="blackOverlay" class="w-full h-full absolute opacity-75 bg-black"></span>
            </div>
            <div class="container relative mx-auto">
                <div class="items-center flex flex-wrap">
                    <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
                        <div class="pr-12">
                            <h1 class="text-white font-semibold text-5xl">
                                Almacenamiento de datos.
                            </h1>
                            <p class="mt-4 text-lg text-white">
                                "Compusolution".
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden h-70-px"
                style="transform: translateZ(0px)">
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
                    version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                    <polygon class="text-blueGray-200 fill-current" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </div>
        <section class="pb-10 bg-blueGray-200 -mt-24">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap">
                    
                    <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
                        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg hover:bg-red-100">
                            <a href="#">
                            <div class="px-12 py-12 flex-auto  ">
                                <div
                                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-lightBlue-400">
                                    <img  src='{{ asset('img/clientes.png') }}' />
                                </div>
                                <h6 class="text-xl font-semibold">Clientes</h6>
                                <p class="mt-2 mb-4 text-blueGray-500">
                                    Todos los clientes del soporte tecnico.
                                </p>
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="w-full md:w-4/12 px-4 text-center">
                        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg hover:bg-red-100">
                            <a href="#">
                            <div class="px-12 py-12 flex-auto">
                                <div
                                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-lightBlue-400">
                                    <img src='{{ asset('img/ganancias.png') }}' />
                                </div>
                                <h6 class="text-xl font-semibold">Ganancias</h6>
                                <p class="mt-2 mb-4 text-blueGray-500">
                                    Ganancias mensuales y anuales.
                                </p>
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="pt-6 w-full md:w-4/12 px-4 text-center">
                        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg hover:bg-red-100">
                            <a href="#">
                            <div class="px-12 py-12 flex-auto">
                                <div
                                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-emerald-400">
                                    <img src='{{ asset('img/equipos.png') }}' />
                                </div>
                                <h6 class="text-xl font-semibold">Equipos</h6>
                                <p class="mt-2 mb-4 text-blueGray-500">
                                    Todos los equipos que han sido reparados
                                </p>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
        </section>
    </section> --}}

    <div class="bg-gray-100 py-14">
        
        <h1 class="mt-8 text-center text-5xl text-green-600 font-bold">REPORTES</h1>
        <!-- Box -->
        <div class="md:flex md:justify-center  md:px-14">
            <!-- box-1 -->
            <a href="{{ route('reportes.clientes') }}">
            <div
                class="mt-16 py-4 px-4 bg-whit w-72 bg-white rounded-xl shadow-lg hover:shadow-xl transform hover:scale-110 transition duration-500 mx-auto md:mx-0">
                <div class="w-sm">
                    <img class="w-64"
                        src="https://images01.nicepage.com/c461c07a441a5d220e8feb1a/a17abde8d83650a582a28432/users-with-speech-bubbles-vector_53876-82250.jpg"
                        alt="" />
                    <div class="mt-4 text-green-600 text-center">
                        <h1 class="text-xl font-bold">Clientes</h1>
                        <p class="mt-4 text-gray-600">Clientes del servicio tecnico.</p>
                        <button
                            class="mt-8 mb-4 py-2 px-14 rounded-full bg-green-600 text-white tracking-widest hover:bg-green-500 transition duration-200">ver</button>
                    </div>
                </div>
            </div>
            </a>
            <!-- box-2 -->
            <a href="{{ route('reportes.equipos') }}">
            <div
                class="mt-16 py-4 px-4 bg-whit w-72 bg-white rounded-xl shadow-lg hover:shadow-xl transform hover:scale-110 transition duration-500 mx-auto md:mx-0">
                <div class="w-sm">
                    <img class="w-64"
                        src="https://images01.nicepage.com/c461c07a441a5d220e8feb1a/3b242447f922540fbe750cab/fdf.jpg"
                        alt="" />
                    <div class="mt-4 text-green-600 text-center">
                        <h1 class="text-xl font-bold">Equipos</h1>
                        <p class="mt-4 text-gray-600">Equipos del servicio tecnico.</p>
                        <button
                            class="mt-8 mb-4 py-2 px-14 rounded-full bg-green-600 text-white tracking-widest hover:bg-green-500 transition duration-200">ver</button>
                    </div>
                </div>
            </div>
            </a>

            <!-- box-3 -->
            <div
                class="mt-16 py-4 px-4 bg-whit w-72 bg-white rounded-xl shadow-lg hover:shadow-xl transform hover:scale-110 transition duration-500 mx-auto md:mx-0">
                <div class="w-sm">
                    <img class="w-64"
                        src="https://images01.nicepage.com/c461c07a441a5d220e8feb1a/8cc47b39e719570b996d9879/dsds.jpg"
                        alt="" />
                    <div class="mt-4 text-green-600 text-center">
                        <h1 class="text-xl font-bold">Ganancias</h1>
                        <p class="mt-4 text-gray-600">Ganancias del servicio tecnico.</p>
                        <button
                            class="mt-8 mb-4 py-2 px-14 rounded-full bg-green-600 text-white tracking-widest hover:bg-green-500 transition duration-200">ver</button>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</x-app-layout>
