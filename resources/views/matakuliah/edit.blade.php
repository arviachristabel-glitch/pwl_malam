<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mata Kuliah</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f4f7f6; margin: 0; padding: 20px; }
        .container { max-width: 600px; margin: 0 auto; background: white; padding: 30px; border-radius: 12px; box-shadow: 0 8px 20px rgba(0,0,0,0.1); }
        h2 { color: #2c3e50; margin-bottom: 25px; text-align: center; border-bottom: 2px solid #f39c12; padding-bottom: 10px; }
        
        .form-group { margin-bottom: 15px; }
        label { display: block; font-weight: 600; margin-bottom: 5px; color: #34495e; }
        input[type="text"], input[type="number"] {
            width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 6px; box-sizing: border-box; font-size: 14px;
        }
        
        .btn-group { display: flex; gap: 10px; margin-top: 20px; }
        .btn { flex: 1; padding: 12px; border: none; border-radius: 6px; cursor: pointer; font-weight: bold; text-align: center; text-decoration: none; font-size: 15px; }
        .btn-update { background-color: #f39c12; color: white; }
        .btn-back { background-color: #95a5a6; color: white; }
        .btn:hover { opacity: 0.9; }
    </style>    
</head>
<body>

<div class="container">
    <h2>Edit Mata Kuliah</h2>
    <form action="{{ route('matakuliah.update', $matakuliah->id) }}" method="post">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label>Kode Mata Kuliah</label>
            <input type="text" name="Kode_MK" value="{{ $matakuliah->Kode_MK }}" required>
        </div>
        <div class="form-group">
            <label>Nama Mata Kuliah</label>
            <input type="text" name="Nama_MK" value="{{ $matakuliah->Nama_MK }}" required>
        </div>
        <div class="form-group">
            <label>SKS</label>
            <input type="number" name="SKS" value="{{ $matakuliah->SKS }}" required>
        </div>
        <div class="form-group">
            <label>ID Jurusan</label>
            <input type="number" name="jurusan_id" value="{{ $matakuliah->jurusan_id }}">
        </div>
        <div class="form-group">
            <label>ID Dosen Pengampu</label>
            <input type="number" name="dosen_id" value="{{ $matakuliah->dosen_id }}">
        </div>

        <div class="btn-group">
            <button type="submit" class="btn btn-update">Update MK</button>
            <a href="{{ route('matakuliah.index') }}" class="btn btn-back">Batal</a>
        </div>
    </form>
</div>

</body>
</html>