<?php require 'inc/data/products.php'; ?>
<?php require 'inc/head.php';

if (!empty($_SESSION['login'])) {
 echo "vous êtes identifié en tant que" . $_SESSION['login'];
   ?>
    Vous pouvez vous deconnecter <a href="/logout.php">ici</a>
    <?php

} else {
    ?>
    Vous pouvez vous identifier <a href="/login.php">ici</a>
    <?php
}

if (!empty($_GET['add_to_cart'])) {
    $_SESSION['cart'][] = $_GET['add_to_cart'];
    echo "vous avez ajouté un article dans le panier";
}


/*
 *
$_SESSION['panier'][] = 3903;
$_SESSION['panier'][] = 3903;
var_dump($_SESSION);
*/

?>
<section class="cookies container-fluid">
    <div class="row">
        <?php foreach ($catalog as $id => $cookie) { ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $cookie['name']; ?>" class="img-responsive">
                    <figcaption class="caption">
                        <h3><?= $cookie['name']; ?></h3>
                        <p><?= $cookie['description']; ?></p>
                        <a href="?add_to_cart=<?= $id; ?>" class="btn btn-primary">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                        </a>
                    </figcaption>
                </figure>
            </div>
        <?php } ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
