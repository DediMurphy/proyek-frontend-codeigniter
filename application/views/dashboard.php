<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
</head>
<body>

<div class="container mt-5">
    <?php if ($this->session->flashdata('message')): ?>
        <div class="alert alert-success">
            <?php echo $this->session->flashdata('message'); ?>
        </div>
    <?php elseif ($this->session->flashdata('error')): ?>
        <div class="alert alert-danger">
            <?php echo $this->session->flashdata('error'); ?>
        </div>
    <?php endif; ?>

    <h1>List Proyek</h1>
    
    <div class="mb-3">
        <a href="<?php echo site_url('input-proyek'); ?>" class="btn btn-primary">Tambah Proyek Baru</a>
    </div>
    
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Proyek</th>
                <th>Client</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Selesai</th>
                <th>Pimpinan Proyek</th>
                <th>Keterangan</th>
                <th>Dibuat Pada</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($proyek)): ?>
                <?php $no = 1; // Inisialisasi nomor urut ?>
                <?php foreach ($proyek as $pro): ?>
                    <tr>
                        <td><?php echo $no++; ?></td> <!-- Menampilkan nomor urut -->
                        <td><?php echo $pro->namaProyek; ?></td>
                        <td><?php echo $pro->client; ?></td>
                        <td><?php echo $pro->tglMulai; ?></td>
                        <td><?php echo $pro->tglSelesai; ?></td>
                        <td><?php echo $pro->pimpinanProyek; ?></td>
                        <td><?php echo $pro->keterangan; ?></td>
                        <td><?php echo $pro->createdAt; ?></td>
                        <td>
                            <a href="<?php echo site_url('input-proyek/edit/' . $pro->id); ?>" class="btn btn-warning btn-sm">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="<?php echo site_url('input-proyek/delete/' . $pro->id); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="9">Tidak ada data proyek.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

    <h1>List Lokasi</h1>

    <div class="mb-3">
        <a href="<?php echo site_url('input-lokasi'); ?>" class="btn btn-primary">Tambah Lokasi Baru</a>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Lokasi</th>
                <th>Negara</th>
                <th>Provinsi</th>
                <th>Kota</th>
                <th>Dibuat Pada</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($lokasi)): ?>
                <?php $no = 1; // Inisialisasi nomor urut ?>
                <?php foreach ($lokasi as $lok): ?>
                    <tr>
                        <td><?php echo $no++; ?></td> <!-- Menampilkan nomor urut -->
                        <td><?php echo $lok->namaLokasi; ?></td>
                        <td><?php echo $lok->negara; ?></td>
                        <td><?php echo $lok->provinsi; ?></td>
                        <td><?php echo $lok->kota; ?></td>
                        <td><?php echo $lok->createdAt; ?></td>
                        <td>
                            <a href="<?php echo site_url('input-lokasi/edit/' . $lok->id); ?>" class="btn btn-warning btn-sm">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="<?php echo site_url('input-lokasi/delete/' . $lok->id); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="7">Tidak ada data lokasi.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<script>
    // Menunggu 5 detik sebelum menghapus pesan
    setTimeout(function() {
        var flashAlert = document.querySelector('.alert');
        if (flashAlert) {
            flashAlert.style.display = 'none';
        }
    }, 5000); // 5000 milidetik = 5 detik
</script>

</body>
</html>
