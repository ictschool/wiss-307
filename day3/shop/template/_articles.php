<!-- Section-->
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="text-center"><input type="text" name="search" onkeyup="search(this.value)"></div>
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                <?php
                    $articles = (!isset($_GET['popular']))?$articleDto->all()->fetch(): $articleDto->popular($_GET['popular'])->fetch();
                    foreach($articles as $article){
                        $stars = implode("",array_fill(0, $article->own_judgment, '<div class="bi-star-fill"></div>'));
                        $off_stars = implode("",array_fill(0, $article->offical_judgment, '<div class="bi-star-fill"></div>'));
                        $allow_edit = (Router::isLoggedIn())?'<div class="text-center"><a class="btn btn-outline-dark mt-auto" href="'.Path::url('edit?id='.$article->id).'">Edit</a></div>':'';
                        echo <<<EOF
            <div class="col m-3">
            <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">{$article->name}</h5>
                            <!-- Product reviews-->
                            <div class="d-flex justify-content-center small text-warning mb-2">
                                {$stars}
                            </div>
                            <div class="d-flex justify-content-center blue-color small text-warning mb-2">
                                {$off_stars}
                            </div>
                            <!-- Product price-->
                            {$article->purchase}
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        {$allow_edit}
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="?article_id={$article->id}">Add to cart</a></div>
                    </div>
            </div>
            </div>
EOF;
                    }

                ?>

            <script>
                function search(text) {
                    if(text.length >= 3) {
                        var elements = document.querySelectorAll(".card h5");
                        for (i = 0; i < elements.length; i++) {
                            if (elements[i].innerText.indexOf(text) < 0) {
                                elements[i].parentNode.parentNode.parentNode.style = 'display:none;';
                            } else {
                                elements[i].parentNode.parentNode.parentNode.style = 'display:block;';
                            }
                        }
                    }else{
                        var elements = document.querySelectorAll(".card");
                        for (i = 0; i < elements.length; i++) {
                            elements[i].style = 'display:block;';
                        }
                    }
                }
            </script>


        </div>
    </div>
</section>
