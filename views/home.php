<?php include "header.php"; ?>
    <section class="py-5 bg-danger-subtle">
        <div class="container">
            <div class="row">
                <?php foreach ($products as $product){ ?>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="<?php echo $product["image"]?>" alt="" height="280">
                            <div class="card-body">
                                <h2><?php echo $product["id"]?></h2>
                                <h4><?php echo $product["name"]?></h4>
                                <p><?php echo $product["price"]?></p>
                                <p><?php echo $product["description"]?></p>
                                <hr>
                                <a href="web.php?page=detail&&id=<?php echo $product["id"]; ?>" class="btn btn-success">Detail</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

<?php include "footer.php"; ?>