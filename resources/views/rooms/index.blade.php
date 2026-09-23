<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kamar</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: #f5f6fa;
        }

        .container {
            max-width: 1100px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        h1 {
            margin: 0;
        }

        .btn {
            background-color: #2563eb;
            color: white;
            padding: 10px 16px;
            text-decoration: none;
            border-radius: 6px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #f1f5f9;
        }

        .status {
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 13px;
        }

        .available {
            background-color: #dcfce7;
            color: #166534;
        }

        .occupied {
            background-color: #fee2e2;
            color: #991b1b;
        }

        .maintenance {
            background-color: #fef3c7;
            color: #92400e;
        }
    </style>
</head>

<body>

<div class="container">

    <div class="header">
        <h1>Data Kamar</h1>

        <a href="/rooms/create" class="btn">+ Tambah Kamar</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nomor Kamar</th>
                <th>Tipe Kamar</th>
                <th>Harga</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>

            @forelse ($rooms as $room)

                <tr>
                    <td>{{ $loop->iteration }}</td>

                    <td>{{ $room->room_number }}</td>

                    <td>{{ $room->room_type }}</td>

                    <td>Rp {{ number_format($room->price, 0, ',', '.') }}</td>

                    <td>
                        <span class="status {{ $room->status }}">
                            {{ ucfirst($room->status) }}
                        </span>
                    </td>

                    <td>
                        <a href="/rooms/{{ $room->id }}/edit">Edit</a>
|
                        <form action="/rooms/{{ $room->id }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                            <button type="submit" onclick="return confirm('Yakin ingin menghapus kamar ini?')">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>

            @empty

                <tr>
                    <td colspan="6" style="text-align: center;">
                        Belum ada data kamar.
                    </td>
                </tr>

            @endforelse

        </tbody>
    </table>

</div>

</body>
</html>