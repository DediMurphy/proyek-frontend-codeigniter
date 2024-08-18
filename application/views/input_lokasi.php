<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Input Lokasi</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/input.css'); ?>">
</head>
<body>
    <div class="container">
        <h1>Input Lokasi</h1>

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

        <form action="<?php echo site_url('input-lokasi/store'); ?>" method="post">
            <label for="namaLokasi">Nama Lokasi:</label>
            <input type="text" name="namaLokasi" id="namaLokasi" required>

            <label for="negara">Negara:</label>
            <input type="text" name="negara" id="negara" required>

            <label for="provinsi">Provinsi:</label>
            <input type="text" name="provinsi" id="provinsi" required>

            <label for="kota">Kota:</label>
            <input type="text" name="kota" id="kota" required>

            <button type="submit">Simpan</button>
        </form>
    </div>
</body>
</html>
