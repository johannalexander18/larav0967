<h1>formulario casa</h1>
    <form action="{{route('tipo-casa')}}" method="POST" enctype="multipart/form-data">

        @csrf

        <label>
            Ingresa el barrio en el que vives:
            <br>
            <input type="text" name="direc">
        </label>
        <br>
        <label>
            Ingresa el color de casa:
            <br>
            <input type="text" name="color">
        </label>
        <br><br><br>

        <button type="submit">Enviar Formulario:</button>
        </form>
