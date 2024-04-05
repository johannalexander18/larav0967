<form action="{{route('cursos.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Nombre:
    <br>
    <input type="text" name="name">
</label>
<br>
<label>
    descripcion:
    <br>
    <input type="text" name="descripcion">
</label>
<br><br>
<label >Adjuntar archivo PDF</label>
<br>
<input type="file" name="urlPdf" accept="pdf/*">
<br><br>

<button type="submit">Enviar Formulario:</button>
</form>