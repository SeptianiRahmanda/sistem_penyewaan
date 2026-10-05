<!DOCTYPE html>
<html>
<head>
    <title>Check-in Tamu</title>
</head>
<body>

    <h1>Check-in Tamu</h1>

    <form action="/bookings" method="POST">
        @csrf

        <label>Tamu</label><br>
        <select name="guest_id" required>
            <option value="">-- Pilih Tamu --</option>

            @foreach ($guests as $guest)
                <option value="{{ $guest->id }}">
                    {{ $guest->name }}
                </option>
            @endforeach
        </select>

        <br><br>

        <label>Kamar</label><br>
        <select name="room_id" required>
            <option value="">-- Pilih Kamar --</option>

            @foreach ($rooms as $room)
                <option value="{{ $room->id }}">
                    {{ $room->room_number }} - {{ $room->room_type }}
                </option>
            @endforeach
        </select>

        <br><br>

        <label>Tanggal Check-in</label><br>
        <input type="date" name="check_in" required>

        <br><br>

        <label>Tanggal Check-out</label><br>
        <input type="date" name="check_out" required>

        <br><br>

        <button type="submit">Simpan Check-in</button>
    </form>

    <br>

    <a href="/guests">Kembali</a>

</body>
</html>