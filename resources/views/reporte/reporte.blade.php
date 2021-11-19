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
            Clientes del Soporte Tecnico
        </h1>
        @if (empty($fechainicio) && empty($fechafin))
            <div>
                Todos los clientes
            </div>
        @else
            <div>
                <label for="">Fecha Inicio:</label>
                <input type="date"> <b>{{ $fechainicio }}</b>
                <label for="">Fecha Fin:</label>
                <input type="date"> <b>{{ $fechafin }}</b>
                @if ($estado == 1 || $estado == 0)
                    <label>Estado:</label>
                    @if ($estado == 1)
                        <b>Terminados</b>
                    @elseif ($estado == null)
                        <b>Todos</b>
                    @else
                        <b>En proceso</b>
                    @endif
                @endif
            </div>
        @endif


        <!--Card-->
        <div id='recipients' class="p-8 mb-6 mt-4 lg:mt-0 rounded shadow bg-white">
            <table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                <thead>
                    <tr>
                        <th data-priority="1">Nombre</th>
                        <th data-priority="2">Direccion</th>
                        <th data-priority="3">Email</th>
                        <th data-priority="4">Celular</th>
                        <th data-priority="5">Estado</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clientes as $cliente)
                        <tr>
                            <td>{{ $cliente->nombredueno }} {{ $cliente->apellidodueno }}</td>
                            <td>{{ $cliente->direcciondueno }}</td>
                            <td>{{ $cliente->emaildueno }}</td>
                            <td>{{ $cliente->celulardueno }}</td>
                            @if ($cliente->estado == 0)
                                <td style="color:red">En proceso</td>
                            @else
                                <td style="color:green">Terminado</td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!--/Card-->
    </div>

</div>
