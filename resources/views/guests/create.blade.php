<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Tamu</title>

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
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
        }

        input,
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 18px;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
        }

        .btn {
            background-color: #2563eb;
            color: white;
            padding: 10px 16px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        .back {
            margin-left: 10px;
            text-decoration: none;
            color: #333;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Tambah Tamu</h1>

    <form <form action="/guests" method="POST">
    @csrf>

        <label>Nama Tamu</label>
        <input type="text" name="name">

        <label>No. Identitas</label>
        <input type="text" name="identity_number">

        <label>No. HP</label>
        <input type="text" name="phone">

        <label>Alamat</label>
        <textarea name="address" rows="4"></textarea>

        <button type="submit" class="btn">Simpan</button>

        <a href="/guests" class="back">Kembali</a>

    </form>

</div>

</body>
</html>