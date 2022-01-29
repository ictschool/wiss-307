<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <h1>Cart</h1>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Article</th>
                    <th scope="col">Count</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                <?php
                $idx=0;
                foreach ($cart->getArticlesInCart() as $entry){
                    $idx++;
                    echo <<<EOF
                        <tr>
                            <th scope="row">{$idx}</th>
                            <td>{$entry['article']->name}</td>
                            <td>{$entry['count']}</td>
                            <td><a class="btn btn-outline-dark mt-auto" href="?clear=cart&article_id={$entry['article']->id}">drop from cart</a></td>
                        </tr>
EOF;

                }
                ?>
                </tbody>
            </table>
            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="?clear=cart">Clear cart</a></div>
        </div>
    </div>
</section>
