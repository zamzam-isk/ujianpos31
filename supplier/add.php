<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Tambah Supplier</div>
                <div class="col-4">
                    <a href="?m=supplier&s=add" class="btn btn-lg btn-primary float-end">Kembali</a>
                </div>
            </div>

            <div class="card-body">
                <form action="?m=supplier&s=save" method="post">
                    <div class="mb-3">
                        <input type="text" name="name" class="form-control" placeholder="Nama Supplier" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="address" class="form-control" placeholder="Alamat" required>
                    </div>
                    <div class="mb-3">
                        <input type="tel" name="phone" class="form-control" placeholder="No Handphone" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Masukan alamat email" required>
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