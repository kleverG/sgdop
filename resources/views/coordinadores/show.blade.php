<x-layouts.app 
    title="Coordinador"
    meta-description="Description de Coordinador"
    >
    <h1>
        {{ $coordinador->name   }}   
    </h1>
    <h2>
        {{ $coordinador->cedula }}
    </h2>

    <a href="/coordinador"> Regresar</a>

</x-layouts.app>