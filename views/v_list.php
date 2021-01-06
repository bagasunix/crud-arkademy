<div class="card" style="width: 100%;">
    <div class="card-header">
        <h2 style="text-align: center;">Daftar Produk</h2>
    </div>
    <div class="card-body">
        <div class="row col-lg-12">
            <div class="d-inline-flex pb-2 bd-highlight">
                <a href="?page=tambah" class="btn btn-primary btn-with-icon btn-block mg-t-10">
                    <div class="ht-40">
                        <span class="icon wd-40"><i class="fa fa-plus"></i></span>
                        <span class="pd-x-15">Tambahkan Produk</span>
                    </div>
                </a>
            </div>
        </div>
        <table class="table table-hover" style="width: 100%;">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $q = mysqli_query($kon, "SELECT * FROM produk");
                if (mysqli_num_rows($q) == 0) {
                    echo '<div class="alert alert-warning" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                            <strong class="d-block d-sm-inline-block-force">Tidak Ada Data</strong>- Silahkan Masukan Data Terlebih Dahulu.
                                          </div>';
                }
                $no = 1;
                while ($qy = mysqli_fetch_array($q)) {
                ?>
                    <tr>
                        <th scope="row"><?php echo $no; ?></th>
                        <td><?php echo $qy['nama_produk'] ?></td>
                        <td><?php echo $qy['harga'] ?></td>
                        <td><?php echo $qy['jumlah'] ?></td>
                        <td><?php echo $qy['keterangan'] ?></td>
                        <td>
                            <a href="?page=edit&id=<?php echo $qy['id']; ?>" class="btn btn-outline-info btn-icon rounded-circle mg-r-5">
                                <div><i class="fa fa-edit" aria-hidden="true"></i></div>
                            </a>
                            <a href="#" class="btn btn-outline-danger btn-icon rounded-circle mg-r-5" data-target='#del_prod' <?php echo "onClick='del(\"" . $qy['id'] . "\")'"; ?> data-toggle='modal'>
                                <div><i class="fa fa-trash"></i></div>
                            </a>
                        </td>
                    </tr>
                <?php $no++;
                } ?>
            </tbody>
        </table>
    </div>
</div>
<div id="del_prod" class="modal fade">
    <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
        <div class="modal-content tx-size-sm">
            <div class="modal-header pd-y-10 pd-x-20">
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Penghapusan Data</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body pd-25">
                <h4 class="lh-3 mg-b-20"><a href="#" class="tx-inverse hover-primary">Data akan terhapus !</a></h4>
                <p class="mg-b-5">Anda yakin ingin menghapus data ini ?</p>
            </div>
            <div class="modal-footer">
                <a id="tombol-del" href=""><button type="button" class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium">Delete Data</button></a>
                <button type="button" class="btn btn-secondary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div><!-- modal-dialog -->
</div><!-- modal -->