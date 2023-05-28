<a href="http:/mahasiswa/create">Tambah Data</a> 


<table border="1">
<thead>
    <tr>
        <td>Id</td>
        <td>Nama</td>
        <td>Kelas</td>
        <td>Jurusan</td>
        <td>Alamat</td>
        <td>Opsi</td>
    </tr>
</thead>
<tbody>
    @foreach ($mahasiswa as $mahasiswa)

        <tr>
            <td>{{$mahasiswa->id}}</td>
            <td>{{$mahasiswa->nama}}</td>
            <td>{{$mahasiswa->kelas}}</td>
            <td>{{$mahasiswa->jurusan}}</td>
            <td>{{$mahasiswa->alamat}}</td>
            <td> <a href="/mahasiswa/{{$mahasiswa->id}}/delete" onclick="return confirm('Yakin nih?')">Hapus</a>
                <a href="/mahasiswa/{{$mahasiswa->id}}/edit">Edit</a></td>
        </tr>

    @endforeach
</tbody>
</table>


