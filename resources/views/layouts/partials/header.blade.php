<nav class="bg-white shadow dark:bg-gray-800">
    <div class="container flex items-center justify-center p-6 mx-auto text-gray-600 capitalize dark:text-gray-300">
        <a href="" class="border-b-2 border-transparent hover:text-gray-800 dark:hover:text-gray-200 hover:border-blue-500 mx-1.5 sm:mx-6 mr-4">
            <img class="w-4 h-4 fill-current" src="{{ asset('img/logoCompusolution.jpg') }}" alt="">
        </a>
        <a href="{{ route('home.home') }}" class="text-gray-800 dark:text-gray-200 border-b-2 border-blue-500 mx-1.5 sm:mx-6 mr-4">Inicio</a>
        <a href="{{ route('servicios.servicios') }}" class="border-b-2 border-transparent hover:text-gray-800 dark:hover:text-gray-200 hover:border-blue-500 mx-1.5 sm:mx-6 mr-4">Servicios</a>
        <a href="{{ route('reportes.reportes') }}" class="border-b-2 border-transparent hover:text-gray-800 dark:hover:text-gray-200 hover:border-blue-500 mx-1.5 sm:mx-6 mr-4">Reportes</a>
    </div>
</nav>