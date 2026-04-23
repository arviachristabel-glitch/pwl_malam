<body bgcolor="grey" text="white">
    <table border=1>
        <thead>
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>NIM</th>
            <th>NIDN</th>
            <th>Tempat/Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Tanggal Pembuatan</th>
            <th>Aksi</th>
            <th> <a href="{{ route('mahasiswa.create') }}" class="btn btn-warning btn-sm">Add</a></th>
        </thead>
        @foreach ($mahasiswa as $m)
        <tr>
            <td>{{$m->id}}</td>
            <td>{{$m->fullname}}</td>
            <td>{{$m->NIM}}</td>
            <td>{{$m->NIDN}}</td>
            <td>{{$m->tempat_lahir}},{{$m->tanggal_lahir}}</td>
            <td>{{$m->alamat}}</td>
            <td>{{$m->created_at}}</td>
           <td>
    <a href="{{ route('mahasiswa.edit', $m->id) }}" class="btn btn-warning btn-sm">Edit</a>

    <form action="{{ route('mahasiswa.destroy', $m->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
    </form>
</td>
        </tr>
        @endforeach
    </table>
</body>