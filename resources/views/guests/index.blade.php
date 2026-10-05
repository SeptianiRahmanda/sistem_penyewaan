<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Data Tamu</title>

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
    </style>
</head>

<body>

<div class="container">

    <div class="header">
        <h1>Data Tamu</h1>

        <a href="#" class="btn">+ Tambah Tamu</a>
    </div>

    <table>

        <thead>
            <tr>
                <th>No</th>
                <th>Nama Tamu</th>
                <th>No. Identitas</th>
                <th>No. HP</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>

            @forelse ($guests as $guest)

                <tr>
                    <td>{{ $loop->iteration }}</td>

                    <td>{{ $guest->name }}</td>

                    <td>{{ $guest->identity_number ?? '-' }}</td>

                    <td>{{ $guest->phone ?? '-' }}</td>

                    <td>{{ $guest->address ?? '-' }}</td>

                    <td>
                        <a href="/guests/{{ $guest->id }}/edit">Edit</a>
                        |
                        <form action="/guests/{{ $guest->id }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')

    <button type="submit" onclick="return confirm('Yakin ingin menghapus data tamu ini?')">
        Hapus
    </button>
</form>
                    </td>
                </tr>

            @empty

                <tr>
                    <td colspan="6" style="text-align: center;">
                        Belum ada data tamu.
                    </td>
                </tr>

            @endforelse

        </tbody>

    </table>

</div>

</body>
</html>