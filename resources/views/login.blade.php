<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>

    <form action="{{ route('inicia-sesion') }}" method="POST">
        @csrf
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required> <br>
        <br>
        
        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password" required>

        <p>¿No tienes cuenta? <a href="{{route('registro')}}">
            Registrate</a>
        </p>
    
        <button type="submit">Iniciar Sesión</button>
    </form>
    
    
</body>
</html>