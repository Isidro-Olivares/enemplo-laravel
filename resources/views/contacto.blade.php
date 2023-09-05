<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulario de contacto</h1>
    <form action="" method="POST">
        <label for="correo">CORREO</label><br>
        <input type="email" name="correo"><br>
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