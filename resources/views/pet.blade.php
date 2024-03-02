<h1>formulario animal</h1>
    <form action="{{route('clase-animal')}}" method="POST" enctype="multipart/form-data">

        @csrf

        <label>
            Ingrese el nombre de tu animal:
            <br>
            <input type="text" name="name">
        </label>
        <br>
        <label>
            Ingresa el tipo de animal:
            <br>
            <input type="text" name="tipo">
        </label>
        <br><br><br>

        <button type="submit">Enviar Formulario:</button>
        </form>
