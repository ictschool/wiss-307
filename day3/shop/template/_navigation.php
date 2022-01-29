<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="#!">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="<?=Path::url(); ?>">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="<?=Path::url('about') ?>">About</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="<?=Path::url('articles') ?>">All Products</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="<?=Path::url('articles?popular=8') ?>">Popular Items</a></li>
                        <li><a class="dropdown-item" href="<?=Path::url('articles?new') ?>">New Arrivals</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="<?=Path::url('contact') ?>">Contact</a></li>
            </ul>
            <form class="d-flex" action="<?=Path::url('cart') ?>">
                <button class="btn btn-outline-dark" type="submit">
                    <i class="bi-cart-fill me-1"></i>
                    Cart
                    <span class="badge bg-dark text-white ms-1 rounded-pill"><?php echo count($cart->getArticlesInCart()) ?></span>
                </button>
            </form>
        </div>
    </div>
</nav>
