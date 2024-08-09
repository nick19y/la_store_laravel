<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/login-form.css">
    <title>Login</title>
</head>
<body>
    <main class="main-content">
        <form action="{{route('login')}}" class="form-content" method='post'>
            @csrf
            <div class="logo-div">
                <img src="img/Logo.png" class="logo" alt="">
            </div>
            <label class="default-label" for="email" class="login-label">Email:</label>
            <input placeholder="Digite o seu email" name="email" type="email" class="default-input">
            <label class="default-label" for="" class="login-label">Senha:</label>
            <input placeholder="Digite a sua senha" name="password" type="password" class="default-input">
            <button class="black-btn">Entrar</button>
            <p class="register-message">Não tem uma conta?<a href="/register_user">Cadastre-se!</a></p>
        </form>
    </main>
</body>
</html>