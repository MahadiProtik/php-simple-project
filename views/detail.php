<?php include "header.php"; ?>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-body">
                        <img src="<?php echo $product['image']; ?>" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-body">
                        <h2> <?php echo $product['id']; ?> </h2>
                        <h2><?php echo $product['name']; ?></h2>
                        <p>TK. <?php echo $product['price']; ?></p>
                        <p><?php echo $product['description']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include "footer.php"; ?>
