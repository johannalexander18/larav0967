<h1>numero primo</h1>

<form action="{{route('num-primo')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Ingrese un numero para saber si es primo:
    <br>
    <input type="number" name="numero">
</label>
<br><br>

<button type="submit">Enviar Formulario:</button>
</form>
