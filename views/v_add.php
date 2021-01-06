<div class="card" style="width: 100%;">
    <div class="card-header">
        <h2 style="text-align: center;">Tambah Produk</h2>
    </div>
    <div class="card-body">
        <form action="?action=tambah" method="post" enctype="multipart/form-data" data-parsley-validate>
            <div class="form-group">
                <label for="produk">Nama Produk</label>
                <input type="text" name="prod_nm" class="form-control">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="harga">Harga</label>
                    <input type="number" name="prod_hrg" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="jumlah">Jumlah</label>
                    <input type="number" name="prod_jmlh" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Keterangan</label>
                <textarea cols="30" name="prod_desc" rows="3" class="form-control"></textarea>
            </div>
            <button type="submit" name="upload" class="btn btn-primary">Submit</button>
            <a class="btn btn-danger" href="index.php">Cancel</a>

        </form>
    </div>
</div>