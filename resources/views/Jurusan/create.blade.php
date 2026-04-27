<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Jurusan</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f4f7f6; margin: 0; padding: 20px; }
        .container { max-width: 600px; margin: 0 auto; background: white; padding: 30px; border-radius: 12px; box-shadow: 0 8px 20px rgba(0,0,0,0.1); }
        h2 { color: #2c3e50; margin-bottom: 25px; text-align: center; border-bottom: 2px solid #3498db; padding-bottom: 10px; }
        
        .form-group { margin-bottom: 15px; }
        label { display: block; font-weight: 600; margin-bottom: 5px; color: #34495e; }
        input[type="text"], input[type="number"] {
            width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 6px; box-sizing: border-box; font-size: 14px; transition: border-color 0.3s;
        }
        input:focus { border-color: #3498db; outline: none; box-shadow: 0 0 5px rgba(52, 152, 219, 0.3); }
        
        .btn-group { display: flex; gap: 10px; margin-top: 20px; }
        .btn { flex: 1; padding: 12px; border: none; border-radius: 6px; cursor: pointer; font-weight: bold; text-align: center; text-decoration: none; font-size: 15px; }
        .btn-save { background-color: #2ecc71; color: white; }
        .btn-back { background-color: #95a5a6; color: white; }
        .btn:hover { opacity: 0.9; }
    </style>    
</head>
<body>

<div class="container">
    <h2>Tambah Data Jurusan</h2>
    <form action="{{ route('jurusan.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label>Nama Jurusan</label>
            <input type="text" name="Nama_Jurusan" placeholder="Contoh: Teknik Informatika" required>
        </div>
        <div class="form-group">
            <label>Kode Jurusan</label>
            <input type="number" name="Kode_Jurusan" placeholder="Contoh: 101" required>
        </div>
        <div class="btn-group">
            <button type="submit" class="btn btn-save">Simpan Jurusan</button>
            <a href="{{ route('jurusan.index') }}" class="btn btn-back">Kembali</a>
        </div>
    </form>
</div>

</body>
</html>