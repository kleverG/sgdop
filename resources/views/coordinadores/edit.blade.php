<x-layouts.app 
    title="Coordinador"
    meta-description="Description de Coordinador"
    >
    <h1>
        Formulario de edición
    </h1>

    <form action="{{ route('coordinadores.update',$coordinador) }}" method="POST" >
        @csrf @method('PATCH')
        <label>
            Nombre
            <input name="nombre" type="text" value="{{old('nombre',$coordinador->name)}}">
            @error('nombre')
                <br>
                <small style="color:red">{{ $message }}</small>
            @enderror    
        </label>  
        <br>  
        <label>
            Cedula
            <input name="cedula" type="text" value="{{old('cedula',$coordinador->cedula)}}">
            @error('cedula')
                <br>
                <small style="color:red">{{ $message }}</small>
            @enderror  
        </label>
        <br>
        <button type="submit">Guardar</button>
    </form>

    <a href="{{route ('coordinadores.index')}}"> Regresar</a>

</x-layouts.app>