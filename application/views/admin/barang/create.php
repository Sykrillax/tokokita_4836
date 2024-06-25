
<div class="content-wrapper">
    <section class="content-header">
        <h1>Tambah Barang</h1>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Form Tambah Barang</h3>
                        </div>
                        <form method="post" action="<?php echo site_url('barang/create'); ?>" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Nama Barang</label>
                                    <input type="text" name="nama_barang" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Harga</label>
                                    <input type="text" name="harga" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Stok</label>
                                    <input type="text" name="stok" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <textarea name="keterangan" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Gambar</label>
                                    <input type="file" name="gambar" class="form-control">
                                </div>
                            </div>
                            <div class="card-footer">
                                <input type="submit" value="Simpan" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
