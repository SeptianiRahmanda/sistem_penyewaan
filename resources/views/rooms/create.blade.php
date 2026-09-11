<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kamar</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: #f5f6fa;
        }

        .container {
            max-width: 700px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
        }

        h1 {
            margin-top: 0;
        }

        .form-group {
            margin-bottom: 18px;
        }

        label {
            display: block;
            margin-bottom: 7px;
            font-weight: bold;
        }

        input, select, textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
        }

        textarea {
            height: 100px;
            resize: vertical;
        }

        .btn {
            display: inline-block;
            padding: 10px 16px;
            border-radius: 6px;
            text-decoration: none;
            border: none;
            cursor: pointer;
        }

        .btn-save {
            background-color: #2563eb;
            color: white;
        }

        .btn-back {
            background-color: #e5e7eb;
            color: #333;
            margin-left: 8px;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Tambah Kamar</h1>

    <form action="/rooms" method="POST">
    @csrf

        <div class="form-group">
            <label for="room_number">Nomor Kamar</label>
            <input type="text" id="room_number" name="room_number" placeholder="Contoh: 101">
        </div>

        <div class="form-group">
            <label for="room_type">Tipe Kamar</label>
            <input type="text" id="room_type" name="room_type" placeholder="Contoh: Standard">
        </div>

        <div class="form-group">
            <label for="price">Harga per Malam</label>
            <input type="number" id="price" name="price" placeholder="Contoh: 250000">
        </div>

        <div class="form-group">
            <label for="description">Deskripsi</label>
            <textarea id="description" name="description" placeholder="Contoh: 1 bed, AC, TV"></textarea>
        </div>

        <div class="form-group">
            <label for="status">Status</label>
            <select id="status" name="status">
                <option value="available">Available</option>
                <option value="occupied">Occupied</option>
                <option value="maintenance">Maintenance</option>
            </select>
        </div>

        <button type="submit" class="btn btn-save">Simpan</button>

        <a href="/rooms" class="btn btn-back">Kembali</a>

    </form>

</div>

</body>
</html>