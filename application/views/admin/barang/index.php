<div class="content-wrapper">
    <section class="content-header">
        <h1>Daftar Barang</h1>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Daftar Barang</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama Barang</th>
                                        <th>Harga</th>
                                        <th>Stok</th>
                                        <th>Keterangan</th>
                                        <th>Gambar</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($barang as $item): ?>
                                    <tr>
                                        <td><?php echo $item['id']; ?></td>
                                        <td><?php echo $item['nama_barang']; ?></td>
                                        <td><?php echo $item['harga']; ?></td>
                                        <td><?php echo $item['stok']; ?></td>
                                        <td><?php echo $item['keterangan']; ?></td>
                                        <td><img src="<?php echo base_url('uploads/'.$item['gambar']); ?>" alt="<?php echo $item['nama_barang']; ?>" width="50"></td>
                                        <td>
                                            <a href="<?php echo site_url('barang/edit/'.$item['id']); ?>" class="btn btn-warning">Edit</a>
                                            <a href="<?php echo site_url('barang/delete/'.$item['id']); ?>" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer">
                            <a href="<?php echo site_url('barang/create'); ?>" class="btn btn-primary">Tambah Barang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
