<form action="{{ route('cuarteles.store') }}" method="POST">
    @csrf
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre">
    <label for="ubicacion">Ubicación:</label>
    <input type="text" id="ubicacion" name="ubicacion">
    
    <button type="submit">Guardar</button>
</form>
