<h1>promedio de tres notas</h1>

<form action="{{route('nota.promedio')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Ingresa tu primer nota:
    <br>
    <input type="number" name="nota1">
</label>
<br>
<label>
    Ingresa tu segunda nota: 
    <br>
    <input type="number" name="nota2">
</label>
<br>
<label>
    Ingresa tu segunda nota: 
    <br>
    <input type="number" name="nota3">
</label>
<br><br><br>

<button type="submit">Enviar Formulario:</button>
</form>