<form action="{{ route('cuerpos.store') }}" method="POST">
    @csrf
    <label for="denominacion">Denominación:</label>
    <input type="text" id="denominacion" name="denominacion">
  
    <button type="submit">Guardar</button>
</form>
