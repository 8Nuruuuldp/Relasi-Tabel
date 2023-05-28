One to One


<table border="1">
<thead>
    <tr>
        <td>Id</td>
        <td>Nama</td>
        <td>Kelas</td>
        <td>Jurusan</td>
        <td>Alamat</td>
        <td>Nama Wali</td>
        <td>Pekerjaan</td>
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
            <td>{{$mahasiswa->wali['nama_wali']}}</td>
            <td>{{$mahasiswa->wali['pekerjaan']}}</td>
        </tr>

    @endforeach
</tbody>
</table>


