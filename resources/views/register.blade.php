<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
</head>
<body>

    <form method="POST" action="{{route('validar-registro')}}">

        @csrf

        <label for="">EMAIL</label>
        <input type="email" id="emailInput" name="email" required autocomplete="disable"> <br>

        <br>

        <label for="">PASSWORD</label>
        <input type="password" id="passwordInput" name="password" required> <br>

        <br>

        <label for="">NOMBRE</label>
        <input type="text" id="userIpunt" name="name" required autocomplete="disable"> <br>

        <br>

        <button type="submit">REGISTRARSE</button>

    </form>
    
</body>
</html>