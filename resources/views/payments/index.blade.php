<!DOCTYPE html>
<html>
<head>
    <title>Data Pembayaran</title>
</head>
<body>

    <h1>Data Pembayaran</h1>

    <a href="/payments/create">+ Tambah Pembayaran</a>

    <br><br>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Tamu</th>
                <th>Kamar</th>
                <th>Jumlah</th>
                <th>Tanggal</th>
                <th>Metode</th>
                <th>Status</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($payments as $payment)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $payment->booking->guest->name }}</td>
                    <td>{{ $payment->booking->room->room_number }}</td>
                    <td>
                        Rp {{ number_format($payment->amount, 0, ',', '.') }}
                    </td>
                    <td>{{ $payment->payment_date }}</td>
                    <td>{{ strtoupper($payment->payment_method) }}</td>
                    <td>{{ $payment->status }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="7">Belum ada data pembayaran.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

</body>
</html>