<div>
    <style>
        h1 {
            text-align: center;
            font: bold;
            font-family: Arial, Helvetica, sans-serif;
            background: gray;
            color: white;
        }

        div {
            text-align: center;
        }

        label {
            font-family: Arial, Helvetica, sans-serif;
        }

        table {
            font-family: Arial, Helvetica, sans-serif;
            width: 300px;
            height: 100px;
            border: 3px solid brown;
            border-radius: 22px;
            margin-top: 12px;
            background: gray;
            box-shadow: 0px 0px 60px black;

        }

        td {
            text-align: center;
        }

        tr {

            color: white;

        }

        th {
            color: rgb(255, 255, 255);
        }

    </style>
    <div class="container w-full md:w-4/5 xl:w-3/5  mx-auto px-2">
        <!--Title-->
        <h1>
            Reporte Ganancias
        </h1>
        @if (empty($fechainicio) && empty($fechafin))
            <div>
                Ganancias
            </div>
        @else
            <div>
                <label for="">Fecha Inicio:</label>
                <input type="date"> <b>{{ $fechainicio }}</b>
                <label for="">Fecha Fin:</label>
                <input type="date"> <b>{{ $fechafin }}</b>
                {{--  --}}
            </div>
        @endif
        <!--Card-->
        <div id='recipients' class="p-8 mb-6 mt-4 lg:mt-0 rounded shadow bg-white">
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
        <!--Card-->
        <div id='recipients' class="p-8 mb-6 mt-4 lg:mt-0 rounded shadow bg-white">
            <table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                <thead>
                    <tr>
                        @if (empty($fechainicio) && empty($fechafin))
                        <th data-priority="3">Ganancias</th>
                        @else
                        <th data-priority="1">Fecha Inicio</th>
                        <th data-priority="2">Fecha Fin</th>
                        <th data-priority="3">Ganancias</th>
                        @endif
                       
                    </tr>
                </thead>
                <tbody>
                   
                        <tr>
                            @if (empty($fechainicio) && empty($fechafin))
                            <td>S/{{ $ganancias}}</td>
                            @else
                            <td>{{ $fechainicio }}</td>
                            <td>{{ $fechafin }}</td>
                            <td>S/{{ $ganancias}}</td>
                            @endif
                        </tr>

                </tbody>
            </table>
        </div>
        <!--/Card-->
        
    </div>

</div>
