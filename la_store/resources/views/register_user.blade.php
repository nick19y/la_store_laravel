<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/register-form.css">
    <title>Cadastrar usuário</title>
</head>
<body>
    <main class="main-content">
        <form action="{{route('user.create')}}" class="register-user-form" method="post">
            @csrf
            <h1 class="register-title">Cadastro de usuário</h1>
            <label class="default-label" for="name">Nome</label>
            <input class="default-input" type="text" name="name" placeholder="Digite o seu nome">
            <label class="default-label" for="email">Email</label>
            <input class="default-input" type="email" name="email" placeholder="Digite o seu email">
            <label class="default-label" for="password">Senha</label>
            <input class="default-input" type="password" name="password" placeholder="Digite a sua senha">
            <label class="default-label" for="password_confirmation">Confirmação de senha</label>
            <input class="default-input confirmation-input" type="password" name="password_confirmation" placeholder="Confirme a sua senha">
            @if ($errors->any())
                <div class="alert alert-danger error-message">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <button type="submit" class="black-btn">Cadastrar</button>
        </form>
        <div class="logo-div">
            <img src="img/Logo.png" class="logo" alt="Logo do mylib">
        </div>
    </main>
</body>
</html>