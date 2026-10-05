<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Sistem Penyewaan</title>

    <style>
        nav {
    background-color: white;
    padding: 15px;
    margin-bottom: 30px;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
}

nav a {
    text-decoration: none;
    color: #333;
    margin-right: 20px;
    font-weight: bold;
}

nav a:hover {
    color: #007bff;
}
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 30px;
            background-color: #f5f6fa;
        }

        h1 {
            margin-bottom: 30px;
        }

        .dashboard {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .card {
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        .card h3 {
            margin-top: 0;
            color: #555;
        }

        .card p {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 0;
        }
    </style>
</head>

<body>
    <nav>
    <a href="/dashboard">Dashboard</a>
    <a href="/rooms">Kamar</a>
    <a href="/guests">Tamu</a>
    <a href="/bookings">Booking</a>
    <a href="/payments">Pembayaran</a>
    <a href="/reports/bookings">Laporan Booking</a>
    <a href="/reports/payments">Laporan Pembayaran</a>
</nav>

<hr>
    <h1>Dashboard Sistem Penyewaan</h1>

    <div class="dashboard">

        <div class="card">
            <h3>Total Kamar</h3>
            <p>{{ $totalRooms }}</p>
        </div>

        <div class="card">
            <h3>Kamar Tersedia</h3>
            <p>{{ $availableRooms }}</p>
        </div>

        <div class="card">
            <h3>Kamar Terisi</h3>
            <p>{{ $occupiedRooms }}</p>
        </div>

        <div class="card">
            <h3>Total Tamu</h3>
            <p>{{ $totalGuests }}</p>
        </div>

        <div class="card">
            <h3>Total Booking</h3>
            <p>{{ $totalBookings }}</p>
        </div>

        <div class="card">
            <h3>Total Pendapatan</h3>
            <p>Rp {{ number_format($totalPayments, 0, ',', '.') }}</p>
        </div>

    </div>

</body>
</html>