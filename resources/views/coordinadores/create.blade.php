<x-layouts.app 
    title="Crear nuevo coordinador"
    meta-description="Formulario para crear un nuevo coordinador"
    >
    <h1>Crear nuevo coordinador</h1>

    <form action="{{ route('coordinadores.store') }}" method="POST" >
        @csrf 
        <label>
            Nombre
            <input name="nombre" type="text" value="{{old('nombre')}}">
            @error('nombre')
                <br>
                <small style="color:red">{{ $message }}</small>
            @enderror    
        </label>  
        <br>  
        <label>
            Cedula
            <input name="cedula" type="text" value="{{old('cedula')}}">
            @error('cedula')
                <br>
                <small style="color:red">{{ $message }}</small>
            @enderror  
        </label>
        <br>
        <button type="submit">Guardar</button>
    </form>
    
    <a href="{{route('coordinadores.index')}}"> Regresar</a>

</x-layouts.app>