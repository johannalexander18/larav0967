<form action="{{ route('companias.store') }}" method="POST">
    @csrf
    <label for="numero_compania">Número de Compañía:</label>
    <input type="text" id="numero_compania" name="numero_compania">
    <label for="actividad_principal">Actividad Principal:</label>
    <input type="text" id="actividad_principal" name="actividad_principal">
    
    <button type="submit">Guardar</button>
</form>
