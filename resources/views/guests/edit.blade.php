<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Tamu</title>
</head>
<body>

    <h1>Edit Data Tamu</h1>

    <form action="/guests/{{ $guest->id }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nama Tamu</label><br>
        <input type="text" name="name" value="{{ $guest->name }}" required>
        <br><br>

        <label>No. Identitas</label><br>
        <input type="text" name="identity_number" value="{{ $guest->identity_number }}">
        <br><br>

        <label>No. HP</label><br>
        <input type="text" name="phone" value="{{ $guest->phone }}">
        <br><br>

        <label>Alamat</label><br>
        <textarea name="address">{{ $guest->address }}</textarea>
        <br><br>

        <button type="submit">Simpan Perubahan</button>
    </form>

    <br>
    <a href="/guests">Kembali</a>

</body>
</html>