<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Input Proyek</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/input.css'); ?>">
</head>
<body>
    <div class="container">
        <h1>Input Proyek</h1>

        <?php if ($this->session->flashdata('message')): ?>
            <div class="message success">
                <?php echo $this->session->flashdata('message'); ?>
            </div>
        <?php endif; ?>

        <?php if ($this->session->flashdata('error')): ?>
            <div class="message error">
                <?php echo $this->session->flashdata('error'); ?>
            </div>
        <?php endif; ?>

        <form action="<?php echo site_url('input-proyek/store'); ?>" method="post">
            <label for="namaProyek">Nama Proyek:</label>
            <input type="text" name="namaProyek" id="namaProyek" required>

            <label for="client">Client:</label>
            <input type="text" name="client" id="client" required>

            <label for="tglMulai">Tanggal Mulai:</label>
            <input type="datetime-local" name="tglMulai" id="tglMulai" required>

            <label for="tglSelesai">Tanggal Selesai:</label>
            <input type="datetime-local" name="tglSelesai" id="tglSelesai" required>

            <label for="pimpinanProyek">Pimpinan Proyek:</label>
            <input type="text" name="pimpinanProyek" id="pimpinanProyek" required>

            <label for="keterangan">Keterangan:</label>
            <textarea name="keterangan" id="keterangan" required></textarea>

            <button type="submit">Simpan</button>
        </form>
    </div>
</body>
</html>
