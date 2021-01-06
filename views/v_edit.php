<div class="card" style="width: 100%;">
    <div class="card-header">
        <h2 style="text-align: center;">Edit Produk</h2>
    </div>
    <div class="card-body">
        <?php
        if (isset($_GET['id'])) {
            $qy = mysqli_fetch_array(mysqli_query($kon, "SELECT * FROM produk WHERE id='$_GET[id]'"));
        ?>
            <form action="?action=edit" method="post" enctype="multipart/form-data" data-parsley-validate>
                <div class="form-group">
                    <label for="produk">Nama Produk</label>
                    <input type="hidden" name="prod_id" value="<?php echo $qy['id'] ?>">
                    <input type="text" name="prod_nm" value="<?php echo $qy['nama_produk'] ?>" class="form-control">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="harga">Harga</label>
                        <input type="number" name="prod_hrg" value="<?php echo $qy['harga'] ?>" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="jumlah">Jumlah</label>
                        <input type="number" name="prod_jmlh" value="<?php echo $qy['jumlah'] ?>" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Keterangan</label>
                    <textarea cols="30" name="prod_desc" rows="3" class="form-control"><?php echo $qy['keterangan'] ?></textarea>
                </div>
                <button type="submit" name="upload" class="btn btn-primary">Submit</button>
                <a class="btn btn-danger" href="index.php">Cancel</a>

            </form>
        <?php } ?>
    </div>
</div>