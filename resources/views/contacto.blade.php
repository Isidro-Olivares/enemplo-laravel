<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulario de contacto</h1>
    <form action="contacto" method="POST">
        
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <h3>{{$tipo}}</h3>
        @csrf
        <label for="correo">CORREO</label><br>
        <input 
            type="email" 
                name="correo"
                @if($tipo == 'alumno')
                    value="@alumnos.udg.mx"
                @else
                    value="@gmail.com"
                @endif
                ><br>
        <textarea name="comentario" id="comentario" cols="30">
            
        </textarea>    
        <br>
        <label for="tipo">Tipo:</label><br>
        <select name="tipo">
            <option value="alumno">Alumno</option>
            <option value="empleado">Empleado</option>
        </select>
        <br>
        <input type="submit" value="enviar">
    </form>
</body>
</html>