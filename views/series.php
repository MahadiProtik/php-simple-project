<?php include "header.php"; ?>
<section class="bg-secondary-subtle py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">My Series</div>
                    <div class="card-body">
                        <form action="web.php" method="post">
                            <div class="row mb-3">
                                <label class="col-md-3">Starting Number</label>
                                <div class="col-md-9">
                                    <input type="number" value="<?php echo isset($_GET['starting_number']) ? $_GET['starting_number'] : ""; ?>" name="starting_number" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Ending Number</label>
                                <div class="col-md-9">
                                    <input type="number" value="<?php echo isset($_GET['ending_number']) ? $_GET['ending_number'] : ""; ?>" name="ending_number" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Result</label>
                                <div class="col-md-9">
                                    <textarea class="form-control"><?php echo isset($_GET['result']) ? $_GET['result'] : "";?></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" name="series_btn" class="btn-success btn" value="Make Result">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include "header.php"; ?>