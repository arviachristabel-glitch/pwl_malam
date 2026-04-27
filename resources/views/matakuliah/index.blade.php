<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mata Kuliah</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f4f7f6; padding: 20px; margin: 0; }
        .container { max-width: 1100px; margin: 0 auto; background: white; padding: 25px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); }
        .navbar { display: flex; gap: 10px; background-color: #2c3e50; padding: 15px 20px; border-radius: 8px; margin-bottom: 25px; }
        .navbar a { color: white; text-decoration: none; font-weight: 600; padding: 8px 15px; border-radius: 5px; }
        .header-section { display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 12px 15px; text-align: left; border-bottom: 1px solid #e0e0e0; }
        th { background-color: #3498db; color: white; text-transform: uppercase; font-size: 14px; }
        tr:hover { background-color: #f1f5f9; }
        .btn { padding: 8px 15px; border: none; border-radius: 5px; cursor: pointer; text-decoration: none; color: white; font-size: 14px; display: inline-block; }
        .btn-add { background-color: #2ecc71; }
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
            <h2>Data Mata Kuliah</h2>
            <a href="{{ route('matakuliah.create') }}" class="btn btn-add">+ Tambah MK</a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Kode MK</th>
                    <th>Nama Mata Kuliah</th>
                    <th>SKS</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($matakuliah as $mk)
                <tr>
                    <td>{{ $mk->id }}</td>
                    <td>{{ $mk->Kode_MK }}</td>
                    <td>{{ $mk->Nama_MK }}</td>
                    <td>{{ $mk->SKS }}</td>
                    <td>
                        <a href="{{ route('matakuliah.edit', $mk->id) }}" class="btn btn-edit">Edit</a>
                        <form action="{{ route('matakuliah.destroy', $mk->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Hapus MK ini?');">
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