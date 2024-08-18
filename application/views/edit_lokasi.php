<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Lokasi</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/edit.css'); ?>">
</head>
<body>
    <div class="container">
        <h1>Edit Lokasi</h1>

        <form action="<?php echo site_url('InputController/updateLokasi/'.$lokasi['id']); ?>" method="POST">
            <div class="form-group">
                <label for="namaLokasi">Nama Lokasi:</label>
                <input type="text" id="namaLokasi" name="namaLokasi" value="<?php echo $lokasi['namaLokasi']; ?>" required>
            </div>

            <div class="form-group">
                <label for="negara">Negara:</label>
                <input type="text" id="negara" name="negara" value="<?php echo $lokasi['negara']; ?>" required>
            </div>

            <div class="form-group">
                <label for="provinsi">Provinsi:</label>
                <input type="text" id="provinsi" name="provinsi" value="<?php echo $lokasi['provinsi']; ?>" required>
            </div>

            <div class="form-group">
                <label for="kota">Kota:</label>
                <input type="text" id="kota" name="kota" value="<?php echo $lokasi['kota']; ?>" required>
            </div>

            <input type="submit" value="Update Lokasi">
        </form>
    </div>
</body>
</html>
