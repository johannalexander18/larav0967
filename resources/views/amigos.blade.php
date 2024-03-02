<h1>Numeros amigos</h1>

<form action="{{route('numero.amigo')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Ingresa tu primer numero:
    <br>
    <input type="number" name="numero1">
</label>
<br>
<label>
    Ingresa tu segundo numero:
    <br>
    <input type="number" name="numero2">
</label>
<br><br><br>

<button type="submit">Enviar Formulario:</button>
</form>