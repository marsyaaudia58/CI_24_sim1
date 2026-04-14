<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Data Buku</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= base_url('buku/tambah') ?>" class="btn btn-primary">Tambah Buku</a>
        </div>
        <div class="card-body">
            <?php if($this->session->flashdata('success')): ?>
                <div class="alert alert-success"><?= $this->session->flashdata('success') ?></div>
            <?php endif; ?>

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Buku</th>
                            <th>Judul</th>
                            <th>Penulis</th>
                            <th>Penerbit</th>
                            <th>Tahun</th>
                            <th>Kategori</th>
                            <th>Stok</th>
                            <th>Lokasi Rak</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; foreach($buku as $b): ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= htmlspecialchars($b->kode_buku) ?></td>
                            <td><?= htmlspecialchars($b->judul_buku) ?></td>
                            <td><?= htmlspecialchars($b->penulis) ?></td>
                            <td><?= htmlspecialchars($b->penerbit) ?></td>
                            <td><?= $b->tahun ?></td>
                            <td><?= htmlspecialchars($b->nama_kategori) ?></td>
                            <td><?= $b->stok ?></td>
                            <td><?= htmlspecialchars($b->lokasi_rak) ?></td>
                            <td>
                                <a href="<?= base_url('buku/edit/'.$b->id_buku) ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="<?= base_url('buku/hapus/'.$b->id_buku) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>