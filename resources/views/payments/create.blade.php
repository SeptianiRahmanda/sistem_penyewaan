<!DOCTYPE html>
<html>
<head>
    <title>Tambah Pembayaran</title>
</head>
<body>

    <h1>Tambah Pembayaran</h1>

    <form action="/payments" method="POST">
        @csrf

        <label>Booking / Tamu</label><br>
        <select name="booking_id" required>
            <option value="">-- Pilih Booking --</option>

            @foreach ($bookings as $booking)
                <option value="{{ $booking->id }}">
                    {{ $booking->guest->name }}
                    - Kamar {{ $booking->room->room_number }}
                    - Total Rp {{ number_format($booking->total_price, 0, ',', '.') }}
                </option>
            @endforeach
        </select>

        <br><br>

        <label>Jumlah Pembayaran</label><br>
        <input type="number" name="amount" min="0" required>

        <br><br>

        <label>Tanggal Pembayaran</label><br>
        <input type="date" name="payment_date" required>

        <br><br>

        <label>Metode Pembayaran</label><br>
        <select name="payment_method" required>
            <option value="">-- Pilih Metode --</option>
            <option value="cash">Cash</option>
            <option value="transfer">Transfer</option>
            <option value="qris">QRIS</option>
        </select>

        <br><br>

        <label>Status</label><br>
        <select name="status" required>
            <option value="paid">Paid</option>
            <option value="pending">Pending</option>
        </select>

        <br><br>

        <button type="submit">Simpan Pembayaran</button>
    </form>

    <br>

    <a href="/payments">Kembali</a>

</body>
</html>