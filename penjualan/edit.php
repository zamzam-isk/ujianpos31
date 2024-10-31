<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Edit Sales</div>
                <div class="col-4">
                    <a href="?m=penjualan&s=view" class="btn btn-lg btn-primary float-end">Kembali</a>
                </div>
            </div>
            <?php
            include_once('config.php');
            $id = $_GET['id'];
            $sql = "SELECT * FROM sales WHERE id='$id'";
            $query = mysqli_query($con, $sql);
            $r = mysqli_fetch_array($query)
            ?>
            <div class="card-body">
                <form action="?m=penjualan&s=update" method="post">
                    <div class="mb-3">
                        <select name="supplier_id" class="form-control" id="required">
                            <option value="">- Pilih Supplier -</option>
                            <?php
                            include_once('config.php');
                            $sql = "SELECT id, name FROM suppliers";
                            $query = mysqli_query($con, $sql);
                            while ($r = mysqli_fetch_array($query)) {
                            ?>
                                <option value="<?= $r['id'] ?>" <?= $r['id'] == $r['supplier_id'] ? 'selected' : '' ?>><?= $r['name'] ?> </option>
                                <?php } ?>
                        </select>
                    <div class="mb-3">
                        <input type="number" name="total" value="<?= $r['total'] ?>" class="form-control" placeholder="Total" required>
                    </div>
                    <div class="mb-3">
                        <input type="hidden" name="id" value="<?= $r['id'] ?>">
                        <input type="submit" name="update" value="Update" class="btn btn-primary">
                        <input type="reset" class="btn btn-warning">&nbsp;
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>