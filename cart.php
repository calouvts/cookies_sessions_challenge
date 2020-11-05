<?php require 'inc/head.php';
require 'inc/data/products.php';
?>
<section class="cookies container-fluid">
    <div class="row">

        <?php

           foreach ($_SESSION['cart'] as $idProduct){
              $monProduit = $catalog[$idProduct];
            echo "vous avez sélectionné ". $monProduit['name'];

            echo "<br />";
          }

      ?>







    </div>
</section>
<?php require 'inc/foot.php'; ?>
