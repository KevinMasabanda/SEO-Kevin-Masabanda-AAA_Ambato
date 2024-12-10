<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <table>
        <tr><td>Saludos {{ $name }}</td></tr>
        <tr><td>&nbsp;</td></tr>
        <tr><td>Bienvenido a Tienda UTA. Tu cuenta a sido creada correctamente con está información: </td></tr>
        <tr><td>&nbsp;</td></tr>
        <tr><td>Nombre: {{ $name }}</td></tr>
        <tr><td>&nbsp;</td></tr>
        <tr><td>Celular: {{ $celular }}</td></tr>
        <tr><td>&nbsp;</td></tr>
        <tr><td>Email: {{ $email }}</td></tr>
        <tr><td>&nbsp;</td></tr>
        <tr><td>Contraseña: ********</td></tr>
        <tr><td>&nbsp;</td></tr>
        <tr><td>&nbsp;</td></tr>
        <tr><td>Gracias & Pasala bien</td></tr>
    </table>
</body>
</html>