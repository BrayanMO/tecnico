<div>
    <section class="pt-16 bg-blueGray-50">
        <div class="text-center">
            <label for="">Fecha Inicio</label>
            <input wire:model='fechainicio' type="date">
            <label for="">Fecha Fin</label>
            <input wire:model='fechafin' type="date">
            <a class="btn btn-primary bg-blue-700 border rounded text-center text-white px-2 py-2"
                href="{{ url('reportes/pdf/ganancias' . '/' . $fechainicio . '/' . $fechafin) }}" target="_blank">
                Descargar pdf
            </a>
            <a wire:click='resetear()'
                class="btn btn-primary bg-yellow-300 border rounded text-center text-black px-2 py-2">
                Eliminar filtros
            </a>
        </div>
        <div id="wrapper" class="max-w-xl  py-4 mx-auto">
            <div class="sm:grid sm:h-32 sm:grid-flow-row sm:gap-4 sm:grid-cols-3">
                <div id="jh-stats-positive"
                    class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
                    <div>
                        <p class="text-3xl font-semibold text-center text-gray-800">S/{{ $gananciasdiarias }}</p>
                        <p class="text-lg text-center text-gray-500">Diaria</p>
                    </div>
                </div>

                <div id="jh-stats-negative"
                    class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                    <div>
                        <p class="text-3xl font-semibold text-center text-gray-800">S/{{ $gananciasmensuales }}</p>
                        <p class="text-lg text-center text-gray-500">Mensual</p>
                    </div>
                </div>

                <div id="jh-stats-neutral"
                    class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
                    <div>
                        <p class="text-3xl font-semibold text-center text-gray-800">S/{{ $gananciasanuales }}</p>
                        <p class="text-lg text-center text-gray-500">Anual</p>
                    </div>
                </div>
            </div>
        </div>
         <!--Card-->
         <div id='recipients' class="p-8 mb-6 mt-4 lm:mx-80 lg:mx-20 rounded shadow bg-white">
            <table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                <thead>
                    <tr>
                        <th data-priority="1">Nombre</th>
                        <th data-priority="2">Direccion</th>
                        <th data-priority="3">Precio</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clientes as $cliente)
                        <tr>
                            <td>{{ $cliente->nombredueno }} {{ $cliente->apellidodueno }}</td>
                            <td>{{ $cliente->direcciondueno }}</td>
                            <td>{{ $cliente->precio }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!--/Card-->
         {{--  --}}
         <section class=" bg-blueGray-50">
            <div class="w-full xl:w-8/12 mb-12 xl:mb-0 px-4 mx-auto mt-4">
                <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded ">
                    <div class="rounded-t mb-0 px-4 py-3 border-0">
                        <div class="flex flex-wrap items-center">
                            <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                                <h3 class="font-semibold text-base text-blueGray-700">Ganancias</h3>
                            </div>
                        </div>
                    </div>

                    <div class="block w-full overflow-x-auto">
                        <table class="items-center bg-transparent w-full border-collapse ">
                            <thead>
                                <tr>
                                    <th
                                        class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        Fecha Inicio
                                    </th>
                                    <th
                                        class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        Fecha Fin
                                    </th>
                                   
                                    <th
                                        class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        Total
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <th
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left text-blueGray-700 ">
                                        @if (!$fechainicio=='')
                                        {{ $fechainicio }}
                                        @else
                                        Hasta la Actualidad
                                        @endif
                                        
                                    </th>
                                    <td
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">
                                        @if (!$fechafin=='')
                                        {{ $fechafin }}
                                        @else
                                        Hasta la Actualidad
                                        @endif
                                    </td>
                                    
                                    <td
                                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        <i class="fas fa-arrow-up text-emerald-500 mr-4"></i>
                                        S/{{ $ganancias }}
                                    </td>
                                </tr>
                               
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
           
        </section>
        {{--  --}}
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
        
    @endpush
</div>
