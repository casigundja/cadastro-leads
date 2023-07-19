<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

        <div id="container">

<img src="{{ url ('img/perfil.png')}}" alt="">

<form method="POST" action="{{ url('login') }}">
    @csrf()
    <!-- Username input -->
    <div>
        <input class="email" type="email" id="registerEmail" name="email"  placeholder="Digite seu email">  
    </div>
    <div>
        <input class="senha" type="password" id="registerPassword" name="senha" placeholder="Digite sua senha">
    </div>
    <div>
        <input class="submit" type="submit" value="Entrar">
    </div>
</form>

</div>

        <script src="{{ asset('script/script.js')}}"></script>
    </body>
</html>
