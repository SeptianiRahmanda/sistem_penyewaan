<!DOCTYPE html>
<html>
<head>
    <title>Data Check-in</title>
</head>
<body>

    <h1>Data Check-in</h1>

    <a href="/bookings/create">+ Check-in Baru</a>

    <br><br>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Tamu</th>
                <th>Kamar</th>
                <th>Check-in</th>
                <th>Check-out</th>
                <th>Total</th>
                <th>Status</th>
                <th>Aksi</th>
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
                    <td>Rp {{ number_format($booking->total_price, 0, ',', '.') }}</td>
                    <td>{{ $booking->status }}</td>

<td>
    @if ($booking->status == 'checked_in')
        <form action="/bookings/{{ $booking->id }}/checkout" method="POST">
            @csrf
            @method('PUT')

            <button type="submit" onclick="return confirm('Yakin ingin melakukan check-out?')">
                Check-out
            </button>
        </form>
    @else
        -
    @endif
</td>
                </tr>
            @empty
                <tr>
                    <td colspan="7">Belum ada data check-in.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

</body>
</html>