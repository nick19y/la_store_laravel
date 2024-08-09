<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer></script>
</head>
<body>
    <header>
        <div class="left-side">
            <div class="logo-div"><img src="img/Logo.png" alt=""></div>
            <div>
                <a href="/register_product">Produtos</a>
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
        <div class="winners-message">
            <h1>AS MELHORES MARCAS DO MERCADO REUNIDAS EM UM ÚNICO LUGAR</h1>
        </div>
        <div class="bootstrap-carousel">
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/real-madrid-banner.webp" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/img-milan-banner.webp" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/borussia-banner2.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="main-content">
        <h1 class="main-content-tite">Destaques</h1>
        <div class="products">
            @foreach ($products as $product)
            <div class="card-item">
                <img src="{{asset('storage/' . $product->image)}}" alt="" class="item-img">
                <div class="price">R${{$product->price}}</div>
                <div class="name">{{$product->name}}</div>
                <button class="black-btn">Adicionar ao carrinho</button>
            </div>
            @endforeach
        </div>
    </main>
    <footer style="height: 5em;">
    </footer>
</body>
</html>