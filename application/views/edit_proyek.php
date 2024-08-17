<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Proyek</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
            color: #555;
        }

        input[type="text"],
        input[type="datetime-local"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }

        textarea {
            resize: vertical;
            height: 100px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            border: none;
            border-radius: 4px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #218838;
        }

        .form-group {
            margin-bottom: 15px;
        }
    </style>
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
