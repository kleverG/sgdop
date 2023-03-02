<x-layouts.app 
    title="Coordinador"
    meta-description="Description de Coordinador"
    >
    
    <h2> Coordinador</h2>

    <a href="{{ route('coordinadores.create') }}"> Añadir coordinador</a>
    
    <table>
        
        <tr>
            <th>Nombre        </th>
            <th>Cédula        </th>
            <th>Fecha update  </th>
            <th>Acciones      </th>
        </tr>
    
        @foreach ($coordinadores as $coordinador)
            <tr>
                <td>  {{ $coordinador->name       }}       </td>    
                <td>  {{ $coordinador->cedula     }}       </td>
                <td>  {{ $coordinador->updated_at }}       </td>
                <td>
                    <a href="{{ route('coordinadores.edit', $coordinador) }}">Editar  </a>&nbsp;
                    <a href="{{ route('coordinadores.show', $coordinador) }}">Ver más </a>&nbsp;
                    <a href="{{ route('coordinadores.show', $coordinador) }}">Borrar  </a>
                </td>
            </tr>    
        @endforeach

    </table>   

</x-layouts.app>

