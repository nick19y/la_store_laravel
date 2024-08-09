<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/register-poduct.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer></script>
    <title>Document</title>
</head>
<body>
    <header>
        <div class="left-side">
            <div class="logo-div"><img src="img/Logo.png" alt=""></div>
            <div>
                <a href="">Produtos</a>
            </div>
            <div>Sobre nós</div>
            <div>Mais vendidos</div>
        </div>
        <div class="center">
            <div class="search-bar">
                <img src="img/search-icon.png" alt="">
                <input type="text" name="" placeholder="Digite o deseja procurar" id="">
            </div>
        </div>
        <div class="right-side">
            <div class="shopping-cart"><img src="img/shopping-cart.png" alt=""></div>
            <div class="user"><img src="img/user.png" alt=""></div>
        </div>
    </header>
    <main>
        <form action="{{route('product.create')}}" class="product-form" method="POST" enctype="multipart/form-data">
            @csrf
            <h1>Novo produto</h1>
            <label for="">Nome</label>
            <input name="name" class="product-input" type="text" placeholder="Digite o nome do produto">
            <label for="">Preço</label>
            <input name="price" class="product-input" type="text" placeholder="Digite a preço do produto">
            <label for="">Marca</label>
            <input name="label" class="product-input" type="text" placeholder="Digite a marca do produto">
            <label for="">Tamanho</label>
            <input name="size" class="product-input" type="text" placeholder="Digite o tamanho do produto">
            <label for="">Descrição</label>
            <textarea name="description" id=""></textarea>
            <label for="">imagem</label>
            <input name="image" type="file" id="">
            @if ($errors->any())
                <div class="alert alert-danger error-message">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <button class="black-btn" type="submit">Cadastrar</button>
        </form>
    </main>
</body>
</html>