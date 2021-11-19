<div>
    <div class="container w-full md:w-4/5 xl:w-3/5  mx-auto px-2">

        <!--Title-->
        <h1 class="text-center font-sans font-bold break-normal text-indigo-500 px-2 py-8 text-xl md:text-2xl">
            Equipos <a class="underline mx-2" href="#">Soporte Tecnico</a>
        </h1>
        <div class="text-center bg-white rounded-t-none py-3">

            {{--  --}}
            <div class="text-center flex justify-center px-2 py-2 ">
                <label>Eliga el estado: </label><br>
               
                <input wire:model='estado' type='radio' id='terminado' name='estado' value='1'>
                <label for='terminado'>Terminados</label>
               
                <input wire:model='estado' type='radio' id='proceso' name='estado' value='0.0'>
                <label for='proceso'>En proceso</label><br><br>
                
                <input wire:click="$set('estado',null)" type='radio' id='todos' name='estado'>
                <label for='todos'>Todos</label><br><br>
                
            </div>
            {{--  --}}
            <a href="#">
                <label for="">Fecha Inicio</label>
                <input wire:model='fechainicio' type="date" name="">
            </a>
            <a href="#">
                <label for="">Fecha Fin</label>
                <input wire:model='fechafin' type="date" name="">
            </a>
            <a class="btn btn-primary bg-blue-700 border rounded text-center text-white px-2 py-2"
                href="{{ url('reportes/pdf/equipos' . '/' . $fechainicio . '/' . $fechafin).'/'.$estado }}" target="_blank">
                Descargar pdf
            </a>
        
            <a wire:click='resetear()' class="btn btn-primary bg-yellow-300 border rounded text-center text-black px-2 py-2">
                Eliminar filtros
            </a>
        

            

        </div>


        <!--Card-->
        <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">


            <table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                <thead>
                    <tr>
                        <th data-priority="1">Tipo</th>
                        <th data-priority="2">Modelo</th>
                        <th data-priority="3">Marca</th>
                        <th data-priority="4">Dueño</th>
                        <th data-priority="5">Estado</th>
                        {{-- <th data-priority="5">Empezo</th> --}}
                        {{-- <th data-priority="6">Salary</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($equipos as $equipo)
                        <tr>
                            <td>{{ $equipo->tipoequipo->description }}</td>
                            <td>{{ $equipo->modeloequipo }}</td>
                            <td>{{ $equipo->marcaequipo }}</td>
                            <td>{{ $equipo->nombredueno }}</td>
                            @if ($equipo->estado == 0)
                                <td>En proceso</td>
                            @else
                                <td>Terminado</td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>

            </table>


        </div>
        <!--/Card-->


    </div>
    <!--/container-->




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
