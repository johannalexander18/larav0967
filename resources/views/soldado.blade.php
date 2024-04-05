<form action="{{ route('soldados.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre">
    <label for="apellidos">Apellidos:</label>
    <input type="text" id="apellidos" name="apellidos">
    <label for="grado">Grado:</label>
    <input type="text" id="grado" name="grado">
    
    <button type="submit">Guardar</button>
</form>
