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

        <label>Sumber Informasi</label>
<select name="information_source">
    <option value="">-- Pilih Sumber Informasi --</option>
    <option value="Instagram" {{ $guest->information_source == 'Instagram' ? 'selected' : '' }}>Instagram</option>
    <option value="Facebook" {{ $guest->information_source == 'Facebook' ? 'selected' : '' }}>Facebook</option>
    <option value="TikTok" {{ $guest->information_source == 'TikTok' ? 'selected' : '' }}>TikTok</option>
    <option value="Google" {{ $guest->information_source == 'Google' ? 'selected' : '' }}>Google</option>
    <option value="WhatsApp" {{ $guest->information_source == 'WhatsApp' ? 'selected' : '' }}>WhatsApp</option>
    <option value="Travel Agent" {{ $guest->information_source == 'Travel Agent' ? 'selected' : '' }}>Travel Agent</option>
    <option value="Booking.com" {{ $guest->information_source == 'Booking.com' ? 'selected' : '' }}>Booking.com</option>
    <option value="Agoda" {{ $guest->information_source == 'Agoda' ? 'selected' : '' }}>Agoda</option>
    <option value="Rekomendasi Teman/Keluarga" {{ $guest->information_source == 'Rekomendasi Teman/Keluarga' ? 'selected' : '' }}>Rekomendasi Teman/Keluarga</option>
    <option value="Walk-in" {{ $guest->information_source == 'Walk-in' ? 'selected' : '' }}>Walk-in</option>
    <option value="Lainnya" {{ $guest->information_source == 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
</select>

<br><br>

        <button type="submit">Simpan Perubahan</button>
    </form>

    <br>
    <a href="/guests">Kembali</a>

</body>
</html>