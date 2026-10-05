<!DOCTYPE html>
<html>
<head>
    <title>Laporan Booking</title>
</head>
<body>

    <h1>Laporan Booking / Penyewaan</h1>

    <br>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Tamu</th>
                <th>Kamar</th>
                <th>Check-in</th>
                <th>Check-out</th>
                <th>Total Harga</th>
                <th>Status</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($bookings as $booking)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $booking->guest->name }}</td>
                    <td>{{ $booking->room->room_number }}</td>
                    <td>{{ $booking->check_in }}</td>
                    <td>{{ $booking->check_out }}</td>
                    <td>
                        Rp {{ number_format($booking->total_price, 0, ',', '.') }}
                    </td>
                    <td>{{ $booking->status }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="7">Belum ada data booking.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <br>

    <a href="/bookings">Kembali ke Data Booking</a>

</body>
</html>