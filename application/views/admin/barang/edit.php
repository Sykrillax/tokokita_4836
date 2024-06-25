<div class="content-wrapper">
    <section class="content-header">
        <h1>Edit Barang</h1>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Edit Barang</h3>
                        </div>
                        <div class="card-body">
                            <form action="<?php echo site_url('barang/edit/'.$barang['id']); ?>" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="nama_barang">Nama Barang</label>
                                    <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?php echo $barang['nama_barang']; ?>">
                                    <?php echo form_error('nama_barang', '<div class="text-danger">', '</div>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="harga">Harga</label>
                                    <input type="text" class="form-control" id="harga" name="harga" value="<?php echo $barang['harga']; ?>">
                                    <?php echo form_error('harga', '<div class="text-danger">', '</div>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="stok">Stok</label>
                                    <input type="text" class="form-control" id="stok" name="stok" value="<?php echo $barang['stok']; ?>">
                                    <?php echo form_error('stok', '<div class="text-danger">', '</div>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="keterangan">Keterangan</label>
                                    <textarea class="form-control" id="keterangan" name="keterangan"><?php echo $barang['keterangan']; ?></textarea>
                                    <?php echo form_error('keterangan', '<div class="text-danger">', '</div>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="gambar">Gambar</label>
                                    <input type="file" class="form-control" id="gambar" name="gambar">
                                    <input type="hidden" name="gambar_lama" value="<?php echo $barang['gambar']; ?>">
                                    <?php if ($barang['gambar']): ?>
                                        <img src="<?php echo base_url('uploads/'.$barang['gambar']); ?>" alt="<?php echo $barang['nama_barang']; ?>" style="max-width: 200px; margin-top: 10px;">
                                    <?php endif; ?>
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
