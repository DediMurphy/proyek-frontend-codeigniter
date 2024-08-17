<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Input Proyek</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
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
            width: 100%;
            max-width: 600px;
        }
        h1 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="datetime-local"],
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        textarea {
            resize: vertical;
            height: 100px;
        }
        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #0056b3;
        }
        .message {
            margin-bottom: 20px;
            padding: 10px;
            border-radius: 4px;
        }
        .message.success {
            background-color: #d4edda;
            color: #155724;
        }
        .message.error {
            background-color: #f8d7da;
            color: #721c24;
        }
    </style>
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
