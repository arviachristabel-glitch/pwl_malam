<style>
    body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f4f7f6; margin: 0; padding: 20px; }
    .container { max-width: 600px; margin: 0 auto; background: white; padding: 30px; border-radius: 12px; box-shadow: 0 8px 20px rgba(0,0,0,0.1); }
    h2 { color: #2c3e50; margin-bottom: 25px; text-align: center; border-bottom: 2px solid #3498db; padding-bottom: 10px; }
    
    /* Style Form */
    .form-group { margin-bottom: 15px; }
    label { display: block; font-weight: 600; margin-bottom: 5px; color: #34495e; }
    input[type="text"], input[type="number"], input[type="date"], textarea, select {
        width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 6px; box-sizing: border-box; font-size: 14px; transition: border-color 0.3s;
    }
    input:focus { border-color: #3498db; outline: none; box-shadow: 0 0 5px rgba(52, 152, 219, 0.3); }
    
    /* Tombol */
    .btn-group { display: flex; gap: 10px; margin-top: 20px; }
    .btn { flex: 1; padding: 12px; border: none; border-radius: 6px; cursor: pointer; font-weight: bold; text-align: center; text-decoration: none; font-size: 15px; }
    .btn-save { background-color: #2ecc71; color: white; }
    .btn-back { background-color: #95a5a6; color: white; }
    .btn-reset { background-color: #e74c3c; color: white; }
    .btn:hover { opacity: 0.9; }
</style>    
<div class="container">
    <h2>Tambah Mahasiswa</h2>
    <form action="{{ route('mahasiswa.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" name="fullname" required>
        </div>
        <div class="form-group">
            <label>NIM</label>
            <input type="text" name="NIM" required>
        </div>
        <div class="form-group">
            <label>NIDN</label>
            <input type="text" name="NIDN">
        </div>
        <div class="form-group">
            <label>Tempat Lahir</label>
            <input type="text" name="tempat_lahir">
        </div>
        <div class="form-group">
            <label>Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir">
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <textarea name="alamat" rows="3"></textarea>
        </div>
        <div class="btn-group">
            <button type="submit" class="btn btn-save">Simpan Data</button>
            <a href="{{ route('mahasiswa.index') }}" class="btn btn-back">Kembali</a>
        </div>
    </form>
</div>