<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Edit Data Supplier</div>
                <div class="col-4">
                    <a href="?m=supplier&s=view" class="btn btn-lg btn-primary float-end">Kembali</a>
                </div>
            </div>
            <?php
            include_once('config.php');
            $id = $_GET['id'];
            $sql = "SELECT * FROM suppliers WHERE id='$id'";
            $query = mysqli_query($con, $sql);
            $r = mysqli_fetch_array($query)
            ?>
            <div class="card-body">
                <form action="?m=supplier&s=update" method="post">
                    <div class="mb-3">
                        <input type="text" name="name" value="<?= $r['name'] ?>" class="form-control" placeholder="Nama Supplier" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="address" class="form-control" placeholder="Alamat" value="<?= $r['address'] ?>">
                    </div>
                    <div class="mb-3">
                        <input type="tel" name="phone" class="form-control" placeholder="Edit Nomor Telepon" value="<?= $r['phone'] ?>">
                    </div>
                    <div class="mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Edit email" value="<?= $r['email'] ?>">
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