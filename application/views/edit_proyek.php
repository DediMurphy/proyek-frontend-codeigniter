<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Proyek</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/edit.css'); ?>">
</head>
<body>
    <div class="container">
        <h1>Edit Proyek</h1>

        <form action="<?php echo site_url('InputController/updateProyek/'.$proyek['id']); ?>" method="POST">
            <div class="form-group">
                <label for="namaProyek">Nama Proyek:</label>
                <input type="text" id="namaProyek" name="namaProyek" value="<?php echo htmlspecialchars($proyek['namaProyek']); ?>" required>
            </div>

            <div class="form-group">
                <label for="client">Client:</label>
                <input type="text" id="client" name="client" value="<?php echo htmlspecialchars($proyek['client']); ?>" required>
            </div>

            <div class="form-group">
                <label for="tglMulai">Tanggal Mulai:</label>
                <input type="datetime-local" id="tglMulai" name="tglMulai" value="<?php echo date('Y-m-d\TH:i', strtotime($proyek['tglMulai'])); ?>" required>
            </div>

            <div class="form-group">
                <label for="tglSelesai">Tanggal Selesai:</label>
                <input type="datetime-local" id="tglSelesai" name="tglSelesai" value="<?php echo date('Y-m-d\TH:i', strtotime($proyek['tglSelesai'])); ?>" required>
            </div>

            <div class="form-group">
                <label for="pimpinanProyek">Pimpinan Proyek:</label>
                <input type="text" id="pimpinanProyek" name="pimpinanProyek" value="<?php echo htmlspecialchars($proyek['pimpinanProyek']); ?>" required>
            </div>

            <div class="form-group">
                <label for="keterangan">Keterangan:</label>
                <textarea id="keterangan" name="keterangan" required><?php echo htmlspecialchars($proyek['keterangan']); ?></textarea>
            </div>

            <input type="submit" value="Update Proyek">
        </form>
    </div>
</body>
</html>
