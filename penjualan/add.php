<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Tambah Penjualan</div>
                <div class="col-4">
                    <a href="?m=penjualan&s=add" class="btn btn-lg btn-primary float-end">Kembali</a>
                </div>
            </div>

            <div class="card-body">
                <form action="?m=penjualan&s=save" method="post">
                    <div class="mb-3">
                        <select name="supplier_id" class="form-control" id="required">
                            <option value="">- Pilih Supplier -</option>
                            <?php
                            include_once('config.php');
                            $sql = "SELECT id, name FROM suppliers";
                            $query = mysqli_query($con, $sql);
                            while ($r = mysqli_fetch_array($query)) {
                            ?>
                                <option value="<?= $r['id'] ?>"><?= $r['name'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <input type="number" name="total" class="form-control" placeholder="Total" required>
                    </div>
            </div>
            <div class="mb-3">
                <input type="submit" name="save" value="Simpan" class="btn btn-primary">
                <input type="reset" class="btn btn-warning">&nbsp;
            </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>