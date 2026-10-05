<!DOCTYPE html>
<html>
<head>
    <title>Laporan Pembayaran</title>
</head>
<body>

    <h1>Laporan Pembayaran</h1>
    <h3>
    Total Pendapatan:
    Rp {{ number_format($totalPayments, 0, ',', '.') }}
    </h3>

    <br>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Tamu</th>
                <th>Kamar</th>
                <th>Jumlah Pembayaran</th>
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

    <br>

    <a href="/payments">Kembali ke Data Pembayaran</a>

</body>
</html>