<form action="{{ route('servicios.store') }}" method="POST">
    @csrf
    <label for="actividad">Actividad:</label>
    <input type="text" id="actividad" name="actividad">
    <label for="fecha_realizacion">Fecha de Realización:</label>
    <input type="date" id="fecha_realizacion" name="fecha_realizacion">
    
    <button type="submit">Guardar</button>
</form>
