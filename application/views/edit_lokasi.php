<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Lokasi</title>
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

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .form-group {
            margin-bottom: 15px;
        }
    </style>
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
