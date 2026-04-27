<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Dosen</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f4f7f6; color: #333; margin: 0; padding: 20px; }
        .container { max-width: 1200px; margin: 0 auto; background: #ffffff; padding: 25px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); }
        .navbar { display: flex; gap: 10px; background-color: #2c3e50; padding: 15px 20px; border-radius: 8px; margin-bottom: 25px; flex-wrap: wrap; }
        .navbar a { color: white; text-decoration: none; font-weight: 600; padding: 8px 15px; border-radius: 5px; transition: background 0.3s; }
        .navbar a:hover { background-color: #34495e; }
        .header-section { display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; }
        .header-section h2 { margin: 0; color: #2c3e50; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        th, td { padding: 12px 15px; text-align: left; border-bottom: 1px solid #e0e0e0; }
        th { background-color: #3498db; color: #ffffff; font-weight: 600; text-transform: uppercase; font-size: 13px; }
        tr:hover { background-color: #f1f5f9; }
        .btn { padding: 8px 15px; border: none; border-radius: 5px; cursor: pointer; text-decoration: none; color: white; font-size: 14px; display: inline-block; transition: opacity 0.2s; }
        .btn:hover { opacity: 0.8; }
        .btn-add { background-color: #2ecc71; font-weight: bold; }
        .btn-edit { background-color: #f39c12; }
        .btn-delete { background-color: #e74c3c; }
    </style>
</head>
<body>
    <div class="container">
        <div class="navbar">
            <a href="{{ route('mahasiswa.index') }}">👨‍🎓 Mahasiswa</a>
            <a href="{{ route('dosen.index') }}">👨‍🏫 Dosen</a>
            <a href="{{ route('jurusan.index') }}">🏢 Jurusan</a>
            <a href="{{ route('matakuliah.index') }}">📚 Mata Kuliah</a>
        </div>

        <div class="header-section">
            <h2>Data Dosen</h2>
            <a href="{{ route('dosen.create') }}" class="btn btn-add">+ Tambah Dosen</a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>NIP</th>
                    <th>Pendidikan</th>
                    <th>Tempat/Tgl Lahir</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dosen as $d)
                <tr>
                    <td>{{ $d->id }}</td>
                    <td>{{ $d->fullname }}</td>
                    <td>{{ $d->NIP }}</td>
                    <td>{{ $d->Pendidikan_Terakhir }}</td>
                    <td>{{ $d->Tempat_Lahir }}, {{ $d->Tanggal_Lahir }}</td>
                    <td>{{ $d->alamat }}</td>
                    <td>
                        <a href="{{ route('dosen.edit', $d->id) }}" class="btn btn-edit">Edit</a>
                        <form action="{{ route('dosen.destroy', $d->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Hapus dosen ini?');">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-delete">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>