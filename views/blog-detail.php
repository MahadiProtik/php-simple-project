<?php include "header.php"; ?>
<section class="py-5 bg-warning-subtle text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h2><?php echo $blog["heading"]?></h2>
                    </div>
                    <div class="card-body">
                        <div class="card-img">
                            <img src="<?php echo $blog["image"]?>" alt="" width="100%">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 mx-auto">
                <p><?php echo $blog["description"]?></p>
            </div>
        </div>
    </div>
</section>
<?php include "footer.php"; ?>