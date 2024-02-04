<?php include "header.php"; ?>
<section class="py-5 bg-danger-subtle">
    <div class="container">
        <div class="row">
            <?php foreach ($blogs as $blog) { ?>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-img">
                            <img src="<?php echo $blog["image"]?>" alt="" width="100%">
                        </div>
                        <div class="card-header">
                            <a href="web.php?page=blog-detail&&id=<?php echo $blog["id"]; ?>" class="text-decoration-none">
                                <h4><?php echo $blog["heading"]?></h4>
                            </a>
                        </div>
                        <div class="card-body">
                            <p><?php echo $blog["summary"]?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php include "footer.php"; ?>